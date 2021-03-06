"use strict";

const { event } = require("jquery");
const { filter, forEach } = require("lodash");

//######################################### JQUERY SCRIPTS #########################################
$(function(){

//======================== GLOBAL SCRIPTS ================================================

    //error notificiation UNFINISHED!
    //Count if the list has more than one error, if yes then display the error pop up. if they click the close button, add hide-error class
    if($("#error-content").length > 0) {
        $("#error-pop-up").removeClass("hide-error");
    }

    $("#error-close").on("click", function(){
       $("#error-pop-up").addClass("hide-error");
    });

    //navbar hide on scroll
    var prevScrollPos = $(document).scrollTop();
    //home page navbar scrolling function
    $(window).scroll(function(){
        let currentScrollPos = $(document).scrollTop();
        const main_nav = document.getElementById("main-nav");
        if (prevScrollPos < currentScrollPos) {
            main_nav.classList.add("hide-up");
        } else {
            main_nav.classList.remove("hide-up");
        }
        prevScrollPos = currentScrollPos;
    });

//======================== STUDENT LIST ================================================

    //AJAX display students jquery
   //loads the list of students and displays it onto the listDisplay Div
   $.ajax({
       type:'GET',
       url: '/AJAX/listCall',
       success: function(data){
           $("#listDisplay").html(data);
           //get all the elements with edit-student and close-edit class
           let editStudentButtons = document.getElementsByClassName("edit-student-button"),
               closeStudentButtons = document.getElementsByClassName("close-edit-button");

           //loop through each element and apply an event listener
            for (const openStudentButton of editStudentButtons) {
                openStudentButton.addEventListener('click', openEditForm, true);
            }

           //loop through each element and apply an event listener
            for (const closeStudentButton of closeStudentButtons) {
                closeStudentButton.addEventListener('click', closeEditForm, true);
            }
       },
       error:function(data){
           console.log('error');
           console.log(data);
       }

   });

//======================== DATA VIEW ================================================

    //Table to display student grade data
    let greaterThanTen = false;

    //tests if there are more than 10 columns before enabling scrolling
    if (($(".assessment-date").length >= 9) || ($(".assessment-skills").length >= 9)){
        greaterThanTen = true;
    }

    //dataTables configuration
    let table = $("#overall-assessment-table").DataTable({
        fixedHeader: true,
        scrollX: true,
        scrollY: '418px',
        scrollCollapse: true,
        paging: false,
        "autoWidth": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        select: {
            items : 'cell'
        }
    });

    // methods adds the goalAvailability check on once the assessment data view page loads for the first time
    checkGoalSheetStudentSelect();
    // clean this out and reduce the eventlistner usage
    table.on( 'draw', function () {
        console.log( 'Redraw occurred at: '+new Date().getTime() );
        let value = $('input[name="data-view-filter-select"]:checked').val();
        if(value === 'assessed')
            enableTraitViewAssessedFilter();
        if(value === 'grade')
            enableTraitViewGradeFilter();
        $(".student-row").each(function(){
            $(this).find(".student-skill-result").each(function(){
                $(this).off("click");
            });
        });
        checkGoalSheetStudentSelect();

        $(".student-row").each(function(){
            $(this).find('.testSheet').off("click", function(){
                $(this).off("click");
            });
        });
        $(".student-row").each(function(){
            $(this).find('.testSheet').on("click", function(){
                listenForIndividualStudentGoalGen($(this));
            });
        });
    } );

    $('input[name="data-view-filter-select"]').on('change', function (event){
        let value = $(this).val();
        if(value === 'assessed'){
            enableTraitViewAssessedFilter();
            $('.assessed-filter-radio-circle').addClass('fill-circle');
            $('.grade-filter-radio-circle').removeClass('fill-circle');
        }
        if(value === 'grade'){
            enableTraitViewGradeFilter();
            $('.grade-filter-radio-circle').addClass('fill-circle');
            $('.assessed-filter-radio-circle').removeClass('fill-circle');
        }
    });

    $('#data-view-range-school').on('click', function() {
        let  url_origin = window.location.origin;
        let currentView = $('input[name="current-view"]').val();
        url_origin += '/' + currentView + '-view/school';
        window.location = url_origin;
    });

    $('select[name="data-view-grade-select"]').on('change', function(event){
        let currentView = $('input[name="current-view"]').val();
        let  url_origin = window.location.origin + '/' + currentView + '-view/grade/';
        let value = $(this).val();
        url_origin += value;
        window.location = url_origin;
    });

    $('select[name="data-view-class-select"]').on('change', function(event){
        let currentView = $('input[name="current-view"]').val();
        let  url_origin = window.location.origin + '/' + currentView + '-view/class/';
        let value = $(this).val();
        url_origin += value;
        window.location = url_origin;
    });

    $('input[name="data-view-range-setting"]').on('change', function (event){
       let value = $(this).val();
       if(value === 'grade'){
           $('select[name="data-view-grade-select"]').prop('hidden', false);
           $('select[name="data-view-class-select"]').prop('hidden', true);
           $('.trait-view-grade').addClass('fill-circle');
           $('.trait-view-class').removeClass('fill-circle');
       }
       if(value === 'class'){
           $('select[name="data-view-class-select"]').prop('hidden', false);
           $('select[name="data-view-grade-select"]').prop('hidden', true);
           $('.trait-view-class').addClass('fill-circle');
           $('.trait-view-grade').removeClass('fill-circle');
       }
        $('.trait-view-school').removeClass('fill-circle');
    });

    $('input[name="data-view-range"]').on('change', function (event){
        let subselection = '';
        let currentView = $(this).val();
        let url = window.location.origin + '/' + currentView + '-view/';
        let selection = $('input[name="data-view-range-setting"]:checked').val();

        if(!selection){
            selection = $('#data-view-range-school').val();
            url += selection;
        }
        else
        {
            if(selection === 'grade'){
                subselection = $('select[name="data-view-grade-select"]').val();
                if(!subselection){
                    selection = 'class';
                    subselection = $('select[name="data-view-class-select"]').val();
                }
            }
            else if(selection === 'class'){
                subselection = $('select[name="data-view-class-select"]').val();
                if(!subselection){
                    selection = 'grade';
                    subselection = $('select[name="data-view-grade-select"]').val();
                }
            }
            url += selection + '/' + subselection;
        }
        window.location = url;
    });

    $('#assessment-data-view-assessment-select').on('change', function (event){
        let url_origin = window.location.origin + '/assessment-view/';
        let schoolCheck = $('.trait-view-school').hasClass('fill-circle');
        let classCheck = $('.trait-view-class').hasClass('fill-circle');
        let gradeCheck = $('.trait-view-grade').hasClass('fill-circle');
        console.log('classC', gradeCheck)
        if(schoolCheck)
        {
            url_origin += 'school/null/' + $(this).val();
        }
        if(classCheck)
        {
            let subselection = $('select[name="data-view-class-select"]').val();
            if(subselection)
            {
                url_origin += 'class/' + subselection + "/" + $(this).val();
            }
            else
            {
                let subselection = $('select[name="data-view-grade-select"]').val();
                if(subselection)
                {
                    url_origin += 'grade/' + subselection + "/" + $(this).val();
                }
            }
        }
        if(gradeCheck)
        {
            let subselection = $('select[name="data-view-grade-select"]').val();
            if(subselection)
            {
                url_origin += 'grade/' + subselection + "/" + $(this).val();
            }
            else
            {
                let subselection = $('select[name="data-view-class-select"]').val();
                if(subselection)
                {
                    url_origin += 'class/' + subselection + "/" + $(this).val();
                }
            }
        }
        window.location = url_origin;
    });
//========== OVERALL ASSESSMENT =============

    function enableTraitViewAssessedFilter(){
        $(".student-row").each(function(){
            var assessed = $(this).data('assessed');
            let student_grade = parseFloat(assessed);

            $(this).find(".trait-skill-result").each(function(){
                //before applying these classes, we need to remove any existing shading class
                $(this).removeClass("green-fill");
                $(this).removeClass("light-green-fill");
                $(this).removeClass("orange-fill");
                $(this).removeClass("light-orange-fill");

                let current_grade = parseFloat($(this).html());

                //if the result is greater than the student's result but less than their max grade but also their current grade does not equal their student grade
                if (current_grade >= student_grade + 0.3) {
                    $(this).addClass("light-green-fill");
                }
                //if the student's result is greater than their max grade
                if (current_grade >= student_grade + 0.8) {
                    $(this).addClass("green-fill");
                }
                //vice versa from the top half
                if (current_grade <= student_grade - 0.3) {
                    $(this).addClass("light-orange-fill");
                }
                if (current_grade <= student_grade - 0.8) {
                    $(this).addClass("orange-fill");
                }
            });
        });
    }

    function enableTraitViewGradeFilter(){
        $(".student-row").each(function(){
            var grade = $(this).data('grade');
            let student_grade = parseFloat(grade);
            $(this).find(".trait-skill-result").each(function(){
                //before applying these classes, we need to remove any existing shading class
                $(this).removeClass("green-fill");
                $(this).removeClass("light-green-fill");
                $(this).removeClass("orange-fill");
                $(this).removeClass("light-orange-fill");

                let current_grade = parseFloat($(this).html());

                //if the result is greater than the student's result but less than their max grade but also their current grade does not equal their student grade
                if (current_grade >= student_grade + 0.3) {
                    $(this).addClass("light-green-fill");
                }
                //if the student's result is greater than their max grade
                if (current_grade >= student_grade + 0.8) {
                    $(this).addClass("green-fill");
                }
                //vice versa from the top half
                if (current_grade <= student_grade - 0.3) {
                    $(this).addClass("light-orange-fill");
                }
                if (current_grade <= student_grade - 0.8) {
                    $(this).addClass("orange-fill");
                }
            });
        });
    }

//========== ASSESSEMNT STUDENT ASSESS DATA

    $(".student-row").each(function(){
        $(this).find('.testSheet').on("click", function(){
            listenForIndividualStudentGoalGen($(this));
        });
    });

    function listenForIndividualStudentGoalGen(param){
        let studentName = param.val();
        $('.hiddenArea').val(studentName);
        $("#student-marks-form").submit();
    }

    $(".assessment-goals-gen-btn").on("click", function(){
        let submitInput = $(this).find('.goals-gen-submit-input');
        let studentName = submitInput.val();
        $('.hiddenArea').val(studentName);
        $("#student-marks-form").submit();
    });

    function checkGoalSheetStudentSelect() {
        $(".student-row").each(function(){
            $(this).find(".student-skill-result").each(function(){
                $(this).on("click", function() {
                    checkGoalAvailability($(this));
                });
            });
        });
    }

    function checkGoalAvailability(param){
        let skillId = param.attr("data-skillId");
        let mark = param.attr("data-mark");
        if(mark !== ' ')
        {
            let url_origin = window.location.origin;
            url_origin += '/skill-level-availability/';
            url_origin += skillId;
            url_origin += '/';
            url_origin += mark;
            fetch(url_origin)
            .then(data => {
                return data.json();
            })
            .then(availability => {
                console.log(availability);
                if(availability.length !== 0)
                    param.toggleClass("circle");
                else
                    $("#no-strategies-warning-modal").modal("show");
                if(param.hasClass("circle"))
                    param.find(".student-goal-sheet-info").attr("checked", true);
                else
                    param.find(".student-goal-sheet-info").attr("checked", false);
            })
            .catch(err => {
                console.log(err);
            });
        }
    }

//======================== ASSESSMENT MARKING =======================================

    //assessment-marking script to check whether all radio buttons have been selected before displaying a completed text
    // side-bar collapse function
    $('#sidebar-collapse').on('click', function () {
        $('#assessment-marking-panel').toggleClass('hide-info-panel');
        $(".marking-panel").toggleClass("marking-padding-right");
        $(this).toggleClass("arrow-move");
    });

    // assessment marking right pannel arrow rotate function
    $(".criteria-btn").click(function(){
        $(this).find(".collapsable-arrow").toggleClass("image-rotate");
        let criteria_section = $(this).parent().parent().parent().parent().find(".criteria-section");
        console.log(criteria_section);
        criteria_section.toggleClass("accordion-display");
    });

    //event listner for default examples for the assessment-marking-page blade
    $('#level-examples').on('change', function (event){
        window.open($(this).val());
    });

    $('.left-shift-scale').on('click', function(event){
        event.preventDefault();
        let leftShift = $(this);
        let leftShiftValue = $(this).attr('data-left-extreme');
        let writingTask = $('input[name=writingTask]').val();
        let studentId = $('input[name="studentId"]').val();
        let url_origin = window.location.origin;
        let urlParams = new URLSearchParams();
        urlParams.append('shift', 'left');
        urlParams.append('level', leftShiftValue);
        urlParams.append('task', writingTask);
        urlParams.append('student', studentId);
        url_origin += "/get-shifted-criteria?" + urlParams.toString();
        fetch(url_origin)
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data.skillCards)
            let count = 0;
            $('.marking-scale').each(function(){
                $(this).text(data.rubrics[count].scriibi_level);
                if(count == 0){
                    // This check for level 119 is done to ensure that the user cannot go beyond level -0.5 (Level D)
                    if(data.rubrics[count].id != 119){
                        leftShift.attr('data-left-extreme', data.rubrics[count].id)
                        leftShift.removeClass('d-none')
                    }
                    else{
                        leftShift.addClass('d-none')
                    }
                }
                if(count == 4){
                    let rightShift = $('.right-shift-scale');
                    if(data.rubrics[count].id != 149){
                        rightShift.attr('data-right-extreme', data.rubrics[count].id)
                        rightShift.removeClass('d-none')
                    }
                    else {
                        rightShift.addClass('d-none')
                    }
                }
                count++;
            })
            let skillCard;
            let globalCounter;
            $('.skill-tab').each(function(){
                globalCounter = 0;
                let markingCounter = 0;
                let skillId = $(this).data('skill-card-id');
                skillCard = data.skillCards[skillId];
                let availableMark = $(this).find('.assesible-skill-mark').val();
                $(this).find('.marking-radio').each(function(){
                    let mark = data.rubrics[markingCounter].id + "/" + skillId;
                    $(this).val(mark);
                    if(availableMark == mark) $(this).prop('checked', true);
                    else $(this).prop('checked', false);
                    markingCounter++;
                })
                $(this).find('.global-local-criteria').each(function(){
                    let main = $(this);
                    $(this).find('.global-def').text(skillCard.globalCriteria[globalCounter]);
                    $(this).find('.local-def').empty();
                    if(Array.isArray(skillCard.localCriteria[globalCounter]) && skillCard.localCriteria[globalCounter].length !== 0){
                        for(let val of skillCard.localCriteria[globalCounter]){
                            let localCriteria = document.createElement('div');
                            let localCurriculum = document.createElement('span');
                            let curriculumTooltip = document.createElement('span');
                            localCriteria.classList.add('local-criteria', 'mr-2');
                            localCurriculum.classList.add('local-curriculum');
                            curriculumTooltip.classList.add('curriculum-tooltip');
                            localCurriculum.innerHTML = "<u>" + val[0].code + "</u>";
                            curriculumTooltip.innerHTML = val[0].elaboration;
                            localCriteria.appendChild(localCurriculum);
                            localCriteria.appendChild(curriculumTooltip);
                            main.find('.local-def').append(localCriteria);
                        }
                    }
                    globalCounter++;
                })
            });
        })
        .catch(err => {
            console.log(err);
        })
    });

    $('.right-shift-scale').on('click', function(event){
        event.preventDefault();
        let rightShift = $(this);
        let rightShiftValue = $(this).attr('data-right-extreme');
        let writingTask = $('input[name=writingTask]').val();
        let studentId = $('input[name="studentId"]').val();
        let url_origin = window.location.origin;
        let urlParams = new URLSearchParams();
        urlParams.append('shift', 'right');
        urlParams.append('level', rightShiftValue);
        urlParams.append('task', writingTask);
        urlParams.append('student', studentId);
        url_origin += "/get-shifted-criteria?" + urlParams.toString();
        fetch(url_origin)
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data.skillCards)
            let count = 0;
            $('.marking-scale').each(function(){
                $(this).text(data.rubrics[count].scriibi_level);
                if(count == 0){
                    let leftShift = $('.left-shift-scale');
                    // This check for level 119 is done to ensure that the user cannot go beyond level -0.5 (Level D)
                    if(data.rubrics[count].id != 119){
                        leftShift.attr('data-left-extreme', data.rubrics[count].id)
                        leftShift.removeClass('d-none')
                    }
                    else{
                        leftShift.addClass('d-none')
                    }
                }
                if(count == 4){
                    if(data.rubrics[count].id != 149){
                        rightShift.attr('data-right-extreme', data.rubrics[count].id)
                        rightShift.removeClass('d-none')
                    }
                    else {
                        rightShift.addClass('d-none')
                    }
                }
                count++;
            })
            let skillCard;
            let globalCounter;
            $('.skill-tab').each(function(){
                globalCounter = 0;
                let markingCounter = 0;
                let skillId = $(this).data('skill-card-id');
                skillCard = data.skillCards[skillId];
                let availableMark = $(this).find('.assesible-skill-mark').val();
                $(this).find('.marking-radio').each(function(){
                    let mark = data.rubrics[markingCounter].id + "/" + skillId;
                    $(this).val(mark);
                    if(availableMark == mark) $(this).prop('checked', true);
                    else $(this).prop('checked', false);
                    markingCounter++;
                })
                $(this).find('.global-local-criteria').each(function(){
                    let main = $(this);
                    $(this).find('.global-def').text(skillCard.globalCriteria[globalCounter]);
                    $(this).find('.local-def').empty();
                    if(Array.isArray(skillCard.localCriteria[globalCounter]) && skillCard.localCriteria[globalCounter].length){
                        for(let val of skillCard.localCriteria[globalCounter]) {
                            let localCriteria = document.createElement('div');
                            let localCurriculum = document.createElement('span');
                            let curriculumTooltip = document.createElement('span');
                            localCriteria.classList.add('local-criteria', 'mr-2');
                            localCurriculum.classList.add('local-curriculum');
                            curriculumTooltip.classList.add('curriculum-tooltip');
                            localCurriculum.innerHTML = "<u>" + val[0].code + "</u>";
                            curriculumTooltip.innerHTML = val[0].elaboration;
                            localCriteria.appendChild(localCurriculum);
                            localCriteria.appendChild(curriculumTooltip);
                            main.find('.local-def').append(localCriteria);
                        }
                    }
                    globalCounter++;
                })
            });
        })
        .catch(err => {
            console.log(err);
        })
    });

    $('.marking-radio').on('click', function(event){
        $(this).parent().parent().parent().find('.assesible-skill-mark').val($(this).val())
        let url_origin = window.location.origin;
        let urlParams = new URLSearchParams();
        urlParams.append('id', $(this).val().split("/")[0]);
        url_origin += "/get-scriibi-level?" + urlParams.toString();
        fetch(url_origin)
        .then(response => {
            return response.json();
        })
        .then(data => {
            console.log(data);
            let primarySpecialGrades = {
                "-0.5"    : 'D',
                "-0.25"   : '0.5',
                "0"       : 'F',
                "0.5"     : 'F.5'
            };
            if(primarySpecialGrades[data.toString()]){
                data = primarySpecialGrades[data.toString()];
            }
            $(this).parent().parent().parent().find('.assesible-skill-mark-value').text(data);
            let check = true;
            $(".assesible-skill-mark").each(function(){
                if(!$(this).val()){
                    check = false;
                }
                console.log(check);
            });

            //if check is still true, then display the completed text
            if (check === true) {
                $("#assessment-status").find(".complete-style").removeClass("d-none");
                $("#assessment-status").find(".incomplete-style").addClass("d-none");
                $("#assessment-status").find("input").val("1");
            }
        })
    });

    //=================== ASSESSMENT STUDENTLIST ===================================

    $('.assessment-add-students-btn').on('click', function ($event){
        let url_origin = window.location.origin;
        url_origin += '/get-team-students/' + $(this).data('task-id');
        fetch(url_origin)
        .then(function(response) {
            return response.json()
        })
        .then(function(data){
            let length = data.length;
            let parent = $('.add-students-modal-list');
            let template = $('.add-students-row').first();
            $('.add-students-modal-selected').empty();
            parent.empty();
            for(let i = 0; i < length; i++)
            {
                let newRow = template.clone();
                let fullName = data[i].first_name + ' ' + data[i].last_name;
                newRow.find('input').val(data[i].id);
                newRow.find('input').attr('data-stu-name', fullName);
                newRow.find('input').prop('checked', false);
                newRow.find('label').text(fullName);
                newRow.removeAttr('hidden');
                parent.append(newRow);
            }
            $('#add-students-modal').modal('show');
            $('.add-students-check').on('change', function($event){
                let parent = $('.add-students-modal-selected');
                let name = $(this).attr('data-stu-name');
                if($(this).is(':checked')){
                    parent.append(`<div class="add-student-modal-name-tag m-1" data-tag-name=${name.replace(' ', '_')}>` + name + `</div>`)
                }else{
                    parent.find(`[data-tag-name=${name.replace(' ', '_')}]`).remove();
                }
            });
        });
    });

    $('.add-students-confirm-btn').on('click', function ($event){
        let set = [];
        $('.add-students-check:checkbox:checked').each(function (index){
            set.push($(this).val());
        })
        if(typeof set !== 'undefined' && set.length > 0){
            let writingTaskId = $('.writing-task-id').attr('data-writing-task-id');
            let url_origin = window.location.origin;
            url_origin += '/add-students-to-task';
            let body = new FormData();
            body.append('writingTaskId', writingTaskId);
            body.append('students', set);
            let options = {
                method: 'POST',
                credentials: 'same-origin',
                mode: 'same-origin',
                body: body
            };
            fetch(url_origin, options)
            .then(function(response){
                return response.json();
            })
            .then(function (data){
                console.log(data);
                let parent = $('.assessment-student-list');
                let studentRow = $('.student-list-cell-template');
                let studentCount = data.students.length;
                for(let i = 0; i < studentCount; i++){
                    let newStudent = studentRow.clone();
                    newStudent.attr('href', `/assessment-marking/${data.students[i].id}/${data.writingTaskId}`);
                    newStudent.attr('data-student-card-id', data.students[i].id);
                    newStudent.find('.student-list-name').text(data.students[i].first_name + ' ' + data.students[i].last_name);
                    newStudent.find('.student-list-status').text(data.taskStatus);
                    newStudent.find('.student-list-status').addClass('incomplete-style');
                    newStudent.find('.student-list-scl-mgmt-id').text(data.students[i].school_mgt_sys_id);
                    newStudent.find('.student-list-grade').text(data.gradeLabels[data.students[i].grade_level_id]);
                    newStudent.find('.student-list-assessed').text(data.assessedLabels[data.students[i].assessed_level_id]);
                    newStudent.find('input[name="assessment-delete-students[]"]').val(data.students[i].id);
                    newStudent.removeClass('student-list-cell-template');
                    newStudent.prop('hidden', false);
                    parent.prepend(newStudent);
                }
                attachAssessmentStudentDeleteCheckboxListener();
                $('#add-students-modal').modal('hide');
            });
        }
    });

    if(window.location.pathname.includes('/single-assessment/')){
        attachAssessmentStudentDeleteCheckboxListener();
    }

    $('.complete-assessment-confirm-btn').on('click', function (event){
        $('#cannot-complete-assessment-yet').modal('show');
    });

    function attachAssessmentStudentDeleteCheckboxListener(){
        $('input[name="assessment-delete-students[]"]').on('change', function(event){
           if($('input[name="assessment-delete-students[]"]:checkbox:checked').length > 0){
               $('.asmnt-rmv-stu-btn').prop('disabled', false);
           }
           else{
               $('.asmnt-rmv-stu-btn').prop('disabled', true);
           }
        });
    }

    $('.asmnt-rmv-stu-btn').on('click', function (event){
        let allStudents = [];
        let deleteStudents  = [];
        $('.assessment-student-list').find('input[name="assessment-delete-students[]"]').each(function (index){
            allStudents.push($(this).val());
        });
        $('input[name="assessment-delete-students[]"]:checkbox:checked').each(function (index){
            deleteStudents.push($(this).val());
        });
        console.log(deleteStudents);
        if(allStudents.length === deleteStudents.length)
        {
            $('#cannot-delete-all-students-modal').modal('show');
        }
        else
        {
            $('#delete-students-modal').modal('show');
        }
    });

    $('.asmnt-rmv-stu-confmr-btn').on('click', function (event){
        let set  = [];
        let url_origin = window.location.origin;
        url_origin += '/delete-students-from-task';
        let writingTaskId = $('.writing-task-id').attr('data-writing-task-id');
        $('input[name="assessment-delete-students[]"]:checkbox:checked').each(function (index){
            set.push($(this).val());
        });
        let body = {
            writingTask: writingTaskId,
            students: set
        }
        let options = {
            method: 'DELETE',
            credentials: 'same-origin',
            mode: 'same-origin',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(body)
        }
        fetch(url_origin, options)
        .then(function(response){
            return response.json();
        })
        .then(function (data){
           console.log(data);
           if(data)
           {
                for(let s of set){
                    let selector = `[data-student-card-id="${s}"]`
                    $(selector).remove();
                }
           }
            $('#delete-students-modal').modal('hide');
        });
    });
//======================== ASSESSMENT SETUP =========================================

     //If assessment form is incomplete, display the assessment form again
    $("#createAxBTN").on("click", function(event){
        event.preventDefault();
        let warning = '';
        if (document.getElementById("assessment_name").value === "") {
            warning += '1) Please type in a name for the assessment<br>';
        }
        if(document.getElementsByClassName('hidden-rubric-radio').rubric.value == ""){
            if(warning === ''){
                warning += '1) Please select a rubric for the assessment';
            }else{
                warning += '<br>2) Please select a rubric for the assessment';
            }
        }
        if(warning === ''){
            document.getElementById('assessment-setup-form').submit();
        }else{
            let flash = $('.assessment-build-form-incomplete-flash');
            flash.html('<strong>' + warning + '</strong>');
            flash.prop('hidden', false);
            setTimeout(function () {
                flash.prop('hidden', true);
            }, 3500);
        }
            // $("#assessment-template").addClass("d-block");
            // $("#assessment-template").removeClass("d-none");
            // $("#rubric-template").addClass("d-none");
            // $("#rubric-template").removeClass("d-block");
            // toggleAssessmentSetupHeader("details");
    });

    //assessment-setup rubric selection radio script
    $(".assessment-rubric-item").on("click", function(){
        $(".assessment-rubric-item").find(".radio-circle").removeClass("fill-circle");
        $(this).find(".radio-circle").addClass("fill-circle");
    });

//======================== RUBRIC FORM ==============================================

    //on change of the drop down, redirect the user to the page with the value appeneded to the url
    $("#select_curriculum_code").change(function(){
        //getting the curriculum level value
        let curriculum_level = $(this).val();
        //get the origin url and apply the rubrics page to it and the value
        let url_origin = window.location.origin;
        url_origin += "/rubricsFlag/";
        url_origin += curriculum_level;
        window.location.href = url_origin;
    });

    $("#select_scriibi_curriculum_code").change(function(){
        //getting the curriculum level value
        let curriculum_level = $(this).val();
        //get the origin url and apply the rubrics page to it and the value
        let url_origin = window.location.origin;
        url_origin += "/scriibi-rubric-builder/";
        url_origin += curriculum_level;
        window.location.href = url_origin;
    });
    //on change of the drop down in the rubric edit page, redirect the user to the page with the value appeneded to the url
    $("#select_curriculum_code_in_rubric_edit").change(function(){
        //getting the curriculum level value
        let curriculum_level = $(this).val();
        let rubric_id = $(this).attr("data-rubric-id");
        let task_id = $(this).attr("data-task-id");
        //get the origin url and apply the rubrics page to it and the value
        let url_origin = window.location.origin;
        url_origin += "/rubric-edit/";
        url_origin += rubric_id;
        url_origin += '/';
        url_origin += curriculum_level;
        url_origin += '/';
        url_origin += task_id;
        window.location.href = url_origin;
    });

    // get the current url of the window
    var url = window.location.href;
    // check if the current url belongs to either the assessment marking page or the rubric creation page
    if(url.includes('assessment-marking') || url.includes('rubricsFlag')){
        // add the noselect css class to the body
        $('body').addClass("noselect");
    }

    // warning for deleting an assessment
    if(url.includes('assessment-list')){
        // add onlick event for the edit rubric link
        $(".rubric-remove-button-styling").click(function(event) {
            event.preventDefault();
            let assessment_id = $(this).attr("data-assessement-id");
            console.log(assessment_id);
            document.getElementById("assessment-delete-warning-modal-form").value = assessment_id;
            $("#delete-assessment-warning-modal").modal("show");
        });
    }

    $("#rubric-edit-submit").on("click", function(event){
        event.preventDefault();
        let task_id = $(this).attr("data-task-id");
        if(task_id !== 'NA'){
            let url_origin = window.location.origin;
            url_origin += `/fetch/assessed_skills/${task_id}`;
            fetch(url_origin)
            .then(data => {
                return data.json()
            })
            .then(skills => {
                let checked = [];
                let rootnode = document.getElementById("assessed-skills-to-delete");
                if(skills.length !== 0){
                    let checkboxes = document.getElementsByName('rubric_skills[]');
                    for(let cbx of checkboxes){
                        if(cbx.checked){
                            checked.push(cbx.value)
                        }
                    }
                    rootnode.innerHTML = "";
                    skills.forEach(skill => {
                        if(!(checked.includes(skill.id.toString()))){
                            let node = document.createElement("LI");
                            let textnode = document.createElement("SPAN");
                            let colornode = document.createElement("SPAN");
                            let text = document.createTextNode('  ' + skill.name);
                            let color = 'colored-dot-color-' + skill.traits[0].color;
                            textnode.appendChild(text);
                            colornode.classList.add(color);
                            colornode.classList.add('colored-dot-dimensions');
                            node.appendChild(colornode);
                            node.appendChild(textnode);
                            rootnode.appendChild(node);
                        }
                    });
                    if(rootnode.childElementCount > 0){
                        $("#multiple-students-marked-for-assessment-warning-modal").modal("show");
                    }else{
                        document.getElementById("rubricform").submit();
                    }
                }else{
                    document.getElementById("rubricform").submit();
                }
            })
            .catch(err => {
                // console.log(err);
            })
        }else if(task_id === 'NA'){
            document.getElementById("rubricform").submit();
        }
    });

    if(url.includes('/rubric-edit')){
        $("#edit-rubric-warning-modal-yes-button").on("click", function(){
            document.getElementById("rubricform").submit();
        });
    }

    if(url.includes('/assessment-setup')){
        $('input[value=my-class]').on('click', function (event){
            $('.my-class-select').prop('disabled', false);
            $('.other-class-select').prop( 'disabled', true);
        });
        $('input[value=other-class]').on('click', function (event){
            $('.other-class-select').prop('disabled', false);
            $('.my-class-select').prop( 'disabled', true);
        });
    }

    //======================== RUBRIC LIST PAGE ==============================================

    $("#rubric-list-option-my-rubrics").on("click", function(){
        $(".rubric-list-option-current-style").removeClass("rubric-list-option-current-style");
        $(this).addClass("rubric-list-option-current-style");
        let url_origin = window.location.origin;
        url_origin += '/rubric-list-mine';
        fetch(url_origin)
        .then(data => {
            return data.json();
        })
        .then(rubrics => {
            updateToPersonalTemplates(rubrics, 'mine');
        })
        .catch(err => {
            console.log(err);
        })
    });

    $("#rubric-list-option-scriibi-rubrics").on("click", function(){
        $(".rubric-list-option-current-style").removeClass("rubric-list-option-current-style");
        $(this).addClass("rubric-list-option-current-style");
        let url_origin = window.location.origin;
        url_origin += '/rubric-list-scriibi/NA';
        fetch(url_origin)
        .then(data => {
            return data.json();
        })
        .then(rubrics => {
            updateToScriibiRubrics(rubrics);
        })
        .catch(err => {
            console.log(err);
        })
    });

    $("#rubric-list-option-shared-rubrics").on("click", function(){
        $(".rubric-list-option-current-style").removeClass("rubric-list-option-current-style");
        $(this).addClass("rubric-list-option-current-style");
        let url_origin = window.location.origin;
        url_origin += '/rubric-list-shared';
        fetch(url_origin)
        .then(data => {
            return data.json();
        })
        .then(rubrics => {
            updateToPersonalTemplates(rubrics, 'shared');
        })
        .catch(err => {
            console.log(err);
        })
    });

    /**  add event listner to the scriibi rubric select control
     *   when the rubric list page or assessment builder page
     *   loads for the first time
    */
    if(url.includes('/rubric-list') || url.includes('/assessment-setup')){
        $('#select_curriculum_code_for_scriibi_rubrics').on('change', function(event){
            let value = $(this).val();
            let url_origin = window.location.origin;
            url_origin += '/rubric-list-scriibi/' + value;
            fetch(url_origin)
            .then(data => {
                return data.json();
            })
            .then(rubrics => {
                updateToScriibiRubrics(rubrics);
            })
            .catch(err => {
                console.log(err);
            });
        });
        if(url.includes('/rubric-list')){
            addRubricListTeacherTemplatesListners();
            addRubricShareEventListner();
        }
        if(url.includes('/assessment-setup'))
            assessmentRubricSelectListener();
    }

    $('#rubric-share-specific').on('click', function (event){
        let btn = $('#rubric-share-team');
        $(this).removeClass('assignment-action-button');
        $(this).addClass('save-exit-btn');
        btn.removeClass('save-exit-btn');
        btn.addClass('assignment-action-button');
        updateRubricShareesToIndividual();
    });

    $('#rubric-share-team').on('click', function (event){
        let btn = $('#rubric-share-specific');
        $(this).removeClass('assignment-action-button');
        $(this).addClass('save-exit-btn');
        btn.removeClass('save-exit-btn');
        btn.addClass('assignment-action-button');
        updateRubricShareesToTeam();
    });

    $('#deselct-all-rubric-sharees').on('click', function (event){
        $('input[name="rubric-share-check[]"]').each(function (index){
           $(this).prop('checked', false);
        });
        $('.rubric-share-modal-selected').empty();
    });

    $('.rubric-share-confirm-btn').on('click',  function (event){
        let set = [];
        let url_origin = window.location.origin + '/share-rubric-confirm';
        let shareType = $('input[name="share-type"]').val();
        let rubricId = $('input[name="rubric-share-id"]').val();
        $('input[name="rubric-share-check[]"]:checkbox:checked').each(function (index){
            set.push($(this).val());
        });
        let body = {
            rubricId: rubricId,
            shareType: shareType,
            teachers: set
        }
        let options = {
            method: 'POST',
            credentials: 'same-origin',
            mode: 'same-origin',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(body)
        }
        fetch(url_origin, options)
        .then(data => {
            return data.json();
        })
        .then(response => {
            $('#share-rubric-modal').modal("hide");
        });
    });

    $('.rubric-copy-confirm-btn').on('click',  function (event){
        let url_origin = window.location.origin + '/copy-rubric-confirm';
        let rubricId = $('input[name="rubric-copy-id"]').val();
        let customName = $('input[name="copy-rubric-custom-name"]').val();
        let body = {
            rubricId: rubricId,
            customName: customName,
        }
        let options = {
            method: 'POST',
            credentials: 'same-origin',
            mode: 'same-origin',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(body)
        }
        fetch(url_origin, options)
        .then(data => {
            return data.json();
        })
        .then(response => {
            $('#copy-rubric-modal').modal('hide');
        });
    });

    $("#rubric-list-option-build-rubrics").on("click", function(){
        $(".rubric-list-option-current-style").removeClass("rubric-list-option-current-style");
        $(this).addClass("rubric-list-option-current-style");
        let url_origin = window.location.origin;
        url_origin += 'rubric-list-build';
    });

    $('#assessment_date').on('change', function(event){
        let url_origin = window.location.origin;
        url_origin += '/get-all-teaching-periods';
        fetch(url_origin)
        .then(data => {
            return data.json();
        })
        .then(teachingPeriods => {
            let status = false;
            let selectedDate = new Date($(this).val());
            for(let tp of teachingPeriods){
                let startDate = new Date(tp.start_date);
                let endDate = new Date(tp.end_date);
                if(selectedDate.getTime() > startDate.getTime() && selectedDate.getTime() < endDate.getTime()){
                    status = true;
                    break;
                }
            }
            if(!status){
                $(this).val(formatDate());
                $('.date-not-in-period-flash').prop('hidden', false);
                setTimeout(function () {
                    $('.date-not-in-period-flash').prop('hidden', true);
                }, 2000);
            }
        })
        .catch(err => {
            console.log(err);
        });
    });

}); //===== /END OF JQUERY =======

//######################################### VANILLA JS SCRIPTS #########################################

//======================== STUDENT LIST =============================================

// function to convert current date to yyyy-MM-dd format
function formatDate() {
    var d = new Date(),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [year, month, day].join('-');
}

//function to open the form
function openEditForm(event) {
    const element = event.currentTarget;

    var iconGroup = element.parentNode,
        iconColumn = iconGroup.parentNode,
        studentContainer = iconColumn.parentNode,
        parent = studentContainer.parentNode,
        form = parent.querySelector(".edit-form");

    form
        .classList
        .remove("d-none");

    studentContainer
        .classList
        .add("d-none");
}

//function to close the form (i.e by displaying the form as none)
function closeEditForm(event) {
    const element = event.currentTarget;

    var iconGroup = element.parentNode,
        iconColumn = iconGroup.parentNode,
        row = iconColumn.parentNode,
        formContainer = row.parentNode,
        parent = formContainer.parentNode,
        studentContainer = parent.querySelector(".student-details");
    console.log();

    formContainer
        .classList
        .add("d-none");

    studentContainer
        .classList
        .remove("d-none");
}


// assessment setup Page
function toggleAssessmentSetupHeader(page){
    let header, content, visibility;
    if(page === "details"){
        document.querySelector(".assessment-setup-assessment-details-page-nav-btns").removeAttribute('hidden');
        document.querySelector(".assessment-setup-rubric-details-page-nav-btns").setAttribute('hidden', 'true');
        content = `Fill in details for your assessment`;
    }else{
        document.querySelector(".assessment-setup-assessment-details-page-nav-btns").setAttribute('hidden', 'true');
        document.querySelector(".assessment-setup-rubric-details-page-nav-btns").removeAttribute('hidden');
        content = `Select a rubric`
    }
    document.getElementById('create-assessment-title').innerHTML = content;
}

function closeAssessmentForm(event){
    document.getElementById("assessment-template").classList.remove("d-none","d-block");
    document.getElementById("assessment-template").classList.toggle("d-none",true);
}

function openRubricForm(event){
    toggleAssessmentSetupHeader("rubric");
    document.getElementById("rubric-template").classList.remove("d-block","d-block");
    document.getElementById("rubric-template").classList.toggle("d-block",true);
}

function openAssessmentForm(event){
    toggleAssessmentSetupHeader("details");
    document.getElementById("assessment-template").classList.toggle("d-none",false);
    document.getElementById("assessment-template").classList.toggle("d-block",true);
}

function closeRubricForm(event){
    document.getElementById("rubric-template").classList.toggle("d-block",false);
    document.getElementById("rubric-template").classList.toggle("d-none",true);
}

function addDefaultDate(event) {
    var today = new Date();
    event.value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
}

//radio button script for assessment setup
let assessClass = document.getElementById("assess-class"),
    assessGrade = document.getElementById("assess-grade");

function toggleRadioBorder(event) {
    let parent = event.currentTarget.parentNode,
        siblingName = event.currentTarget.id,
        //find the sibling of radio and apply it into a variable
        sibling = (siblingName === "assess-class") ? assessGrade:assessClass;

    //if radio button is checked then add the border
    if (event.checked) {
        sibling.parentNode.classList.add("checked");
        parent.classList.remove("checked");
    }
    //else, remove the border and add it to the sibling instead
    else {
        parent.classList.add("checked");
        sibling.parentNode.classList.remove("checked");
    }
}
if (assessClass !== null) {
    assessClass.addEventListener("click", toggleRadioBorder, true);
}

if (assessGrade !== null) {
    assessGrade.addEventListener("click", toggleRadioBorder, true);
}//end of radio button script


// the rubric selection button
var rubricSelectionBTN = document.getElementById("rubricSelectionBTN");
if (rubricSelectionBTN) {
    rubricSelectionBTN.addEventListener('click', closeAssessmentForm, true);
    rubricSelectionBTN.addEventListener('click', openRubricForm, true);
}
var backBTN = document.getElementById("backBTN");
if (backBTN) {
    backBTN.addEventListener('click',openAssessmentForm, true);
    backBTN.addEventListener('click', closeRubricForm, true);
}

var addRubricToAssessment = document.getElementById("addRubricToAssessment");
if (addRubricToAssessment) {
    addRubricToAssessment.addEventListener('click',openAssessmentForm, true);
    addRubricToAssessment.addEventListener('click', closeRubricForm, true);
}

// rubric builder page

var saveBTN= document.getElementById("rubric-save");

// saveBTN.addEventListener('click',check_skill_checked,true);
// check if curriculum code is selected
if (saveBTN !== null) {
    saveBTN.addEventListener('click',check_input_filled, true);
}



// validate input from all fields in rubric-form
function check_input_filled(e){
    e.preventDefault();
    var error = "",
        curriculum_code = document.getElementById("select_curriculum_code").value,
        skill_error = false,
        title_error = false;

    if (curriculum_code === ""){
        error += "you need to select a curriculum code. \n";
    }

    // check rubric title is entered
    var rubric_title = document.getElementById("assessment_name").value;
    if (rubric_title===""){
        title_error = true;
        error+="you need to set a rubric title. \n";
    }

    //check skill items
    var skill_items = document.getElementById("check-array").querySelectorAll(".skill-checkbox");
    var skill_checked = false;
    for (var i = 0; i < skill_items.length; i++) {
        if (skill_items[i].checked) {
            skill_checked = true;
            break;
        }
    }

    if (skill_checked === false){
        skill_error = true;
    }

    if (skill_error === true) {
        error += "you need to select at least one skill for the rubric. \n";
    }

    if((skill_checked === true)&&(error === "")){
        var form = document.getElementById("rubricform");
        form.submit();
    }
    else {
        alert(error);
    }
}

function assessmentRubricSelectListener(){
    $('.assessment-setup-rubric-select-radio-link').on('click', function(){
        let radio = $('.hidden-rubric-radio');
        radio.prop('checked', true);
        radio.prop('value', $(this).data("rubric-id"));
        let previouslySelected = $('.assessment-setup-rubric-selected');
        if(previouslySelected){
            previouslySelected.removeClass('assessment-setup-rubric-selected');
        }
        $(this).addClass('assessment-setup-rubric-selected');
        let currentlySelected = $(this).clone();
        currentlySelected.removeClass(['assessment-setup-rubric-select-radio-link', 'assessment-setup-rubric-selected']);
        $('.assessment-settings-selected-rubric').empty().prepend(currentlySelected).css('border', 'none');
        $('#addRubricToAssessment').prop('disabled', false);
    });
}

function addRubricListTeacherTemplatesListners(){
    $('.teacher-template-delete').on('click', function (event){
        event.preventDefault();
        let rubricId = $(this).attr('data-delete-rubric-id');
        document.getElementById("rubric-delete-warning-modal-form").value = rubricId;
        $('#delete-rubric-warning-modal').modal("show");
    });

    $('.teacher-template-edit').on('click', function (event){
        event.preventDefault();
        let rubricId = $(this).attr('data-edit-rubric-id');
        let url_origin = window.location.origin;
        url_origin += `/rubric-edit/${rubricId}/NA/NA`;
        window.location.href = url_origin;
    });
}

function updateToScriibiRubrics(dataSet) {
    let currentUrl = window.location.href;
    let rubrics = dataSet['rubrics'];
    let assessedLabels = dataSet['assessed_labels'];
    let teacherLevel = dataSet['teacher_level'];
    let currentSelected = $('.hidden-rubric-radio').val();
    let gradeSelector = document.getElementById('scriibi_rubrics_select');
    let selectControl = gradeSelector.querySelector('#select_curriculum_code_for_scriibi_rubrics');
    selectControl.innerHTML = "";
    assessedLabels.forEach((label) => {
        let option = document.createElement('option');
        option.setAttribute('value', label.scriibi_level_id);
        option.innerText = label.label;
        if(teacherLevel == label.scriibi_level_id)
            option.selected = true;
        selectControl.appendChild(option);
    });
    gradeSelector.removeAttribute('hidden');
    let skillCardsSection = document.getElementById('rubric-list-skill-cards');
    skillCardsSection.innerHTML = "";
    let skillCardTemplate = document.getElementById('rubric-card-template').cloneNode(true);
    skillCardTemplate.removeAttribute('id');
    skillCardTemplate.removeAttribute('hidden');
    if(currentUrl.includes('/assessment-setup'))
        skillCardTemplate.querySelector('.rubric-list-card-single').classList.add('assessment-setup-rubric-select-radio-link');
    let skillItemTemplate = document.getElementById('rubric-list-card-skill').cloneNode(true);
    skillItemTemplate.removeAttribute('id');
    skillItemTemplate.removeAttribute('hidden');
    if(Object.keys(rubrics).length !== 0){
        for(const key in rubrics){
            let skillCard = skillCardTemplate.cloneNode(true);
            if(currentUrl.includes('/assessment-setup')){
                skillCard.querySelector('.rubric-list-card-single').setAttribute('data-rubric-id', key);
                if(currentSelected == key)
                    skillCard.querySelector('.rubric-list-card-single').classList.add('assessment-setup-rubric-selected');
            }
            skillCard.querySelector('.rubric-list-text-title').innerHTML = rubrics[key].name;
            let skillsSection = skillCard.querySelector('ul');
            let counter = 0;
            for(const trait in rubrics[key].traits){
                for(const skill in rubrics[key].traits[trait].skills){
                    let name = rubrics[key].traits[trait].skills[skill].name;
                    if(counter < 15){
                        let skill = skillItemTemplate.cloneNode(true);
                        let skillDetails = skill.getElementsByTagName('span');
                        skillDetails[1].innerText = ' ' + name;
                        let colorClass = 'colored-dot-color-' + rubrics[key].traits[trait].color;
                        skillDetails[0].classList.add('colored-dot-dimensions', colorClass);
                        skillsSection.appendChild(skill);
                    }
                    counter++;
                }
            }
            let remainingSkills = counter - 15;
            if(remainingSkills > 0){
                skillCard.querySelector('.rubric-more-skills').innerHTML = (counter - 15) + ' more';
            }
            skillCardsSection.appendChild(skillCard);
        }
        if(currentUrl.includes('/assessment-setup'))
            assessmentRubricSelectListener();
    }
}

function updateToPersonalTemplates(dataSet, type) {
    let currentUrl = window.location.href;
    let rubrics = dataSet;
    document.getElementById('scriibi_rubrics_select').setAttribute('hidden', 'hidden');
    let currentSelected = $('.hidden-rubric-radio').val();
    let skillCardsSection = document.getElementById('rubric-list-skill-cards');
    skillCardsSection.innerHTML = "";
    let skillCardTemplate = document.getElementById('rubric-card-template').cloneNode(true);
    skillCardTemplate.removeAttribute('id');
    skillCardTemplate.removeAttribute('hidden');

    let skillItemTemplate = document.getElementById('rubric-list-card-skill').cloneNode(true);
    skillItemTemplate.removeAttribute('id');
    skillItemTemplate.removeAttribute('hidden');
    if(Object.keys(rubrics).length !== 0){
        for(const key in rubrics){
            let skillCard = skillCardTemplate.cloneNode(true);
            if(currentUrl.includes('/assessment-setup')){
                skillCard.querySelector('.rubric-list-card-single').classList.add('assessment-setup-rubric-select-radio-link');
                skillCard.querySelector('.rubric-list-card-single').setAttribute('data-rubric-id', key);
                if(currentSelected == key)
                    skillCard.querySelector('.rubric-list-card-single').classList.add('assessment-setup-rubric-selected');
            }
            skillCard.querySelector('.rubric-list-text-title').innerHTML = rubrics[key].name;
            let skillsSection = skillCard.querySelector('ul');
            let counter = 0;
            for(const trait in rubrics[key].traits){
                for(const skill in rubrics[key].traits[trait].skills){
                    let name = rubrics[key].traits[trait].skills[skill].name;
                    if(counter < 15){
                        let skill = skillItemTemplate.cloneNode(true);
                        let skillDetails = skill.getElementsByTagName('span');
                        skillDetails[1].innerText = ' ' + name;
                        let colorClass = 'colored-dot-color-' + rubrics[key].traits[trait].color;
                        skillDetails[0].classList.add('colored-dot-dimensions', colorClass);
                        skillsSection.appendChild(skill);
                    }
                    counter++;
                }
            }
            let remainingSkills = counter - 15;
            if(remainingSkills > 0){
                skillCard.querySelector('.rubric-more-skills').innerHTML = (counter - 15) + ' more';
            }

            setControlButtons(skillCard, currentUrl, type, key);
            skillCardsSection.appendChild(skillCard);
        }
        if(currentUrl.includes('/assessment-setup')){
            assessmentRubricSelectListener();
        }
        if(currentUrl.includes('/rubric-list') && type == 'mine'){
            addRubricListTeacherTemplatesListners();
            addRubricShareEventListner();
        }
        if(currentUrl.includes('/rubric-list') && type == 'shared'){
            addRubricCopyEventListner();
        }
    }
}

function setControlButtons(skillCard, currentUrl, type, rubricId){
    if(currentUrl.includes('/rubric-list') && type == 'mine'){
        let deleteControl = skillCard.querySelector('.teacher-template-delete');
        let editControl = skillCard.querySelector('.teacher-template-edit');
        let shareControl = skillCard.querySelector('.teacher-template-share');
        deleteControl.removeAttribute('hidden');
        editControl.removeAttribute('hidden');
        shareControl.removeAttribute('hidden');
        deleteControl.setAttribute('data-delete-rubric-id', rubricId);
        editControl.setAttribute('data-edit-rubric-id', rubricId);
        shareControl.setAttribute('data-share-rubric-id', rubricId);
    }
    if(currentUrl.includes('/rubric-list') && type == 'shared'){
        let shareControl = skillCard.querySelector('.copy-rubric-template');
        shareControl.removeAttribute('hidden');
        shareControl.setAttribute('data-copy-rubric-id', rubricId);
    }
}

function addRubricShareEventListner(){
    $('.teacher-template-share').on('click', function (event){
        let rubricId = $(this).attr('data-share-rubric-id');
        $('input[name="rubric-share-id"]').val(rubricId);
        openRubricShareModal(rubricId);
    });
}

function addRubricCopyEventListner(){
    $('.copy-rubric-template').on('click', function (event){
        let rubricId = $(this).attr('data-copy-rubric-id');
        $('input[name="rubric-copy-id"]').val(rubricId);
        let url_origin =  window.location.origin + '/rubric-details/' + rubricId;
        fetch(url_origin)
        .then(response => {
            return response.json();
        })
        .then(data => {
            $('input[name="copy-rubric-custom-name"]').val(data.name);
            $('#copy-rubric-modal').modal("show");
        });
    });
}

function getIndividualRubricSharees(rubricId){
    return new Promise(resolve => {
        let url_origin = window.location.origin;
        url_origin += `/get-individual-teachers-with-rubric-shares/${rubricId}`;
        fetch(url_origin)
        .then(response => {
            return response.json();
        })
        .then(data => {
            resolve(data);
        });
    });
}

function getTeamRubricSharees(rubricId){
    return new Promise(resolve => {
        let url_origin = window.location.origin;
        url_origin += `/get-team-with-rubric-shares`;
        fetch(url_origin)
        .then(response => {
            return response.json();
        })
        .then(data => {
            resolve(data);
        });
    });
}

async function openRubricShareModal(rubricId){
    let shareeType = 'individual';
    $('input[name="share-type"]').val(shareeType);
    let sharees = await getIndividualRubricSharees(rubricId);
    updateShareeList(sharees, shareeType);
    $('#share-rubric-modal').modal("show");
}

async function updateRubricShareesToIndividual(){
    let shareeType = 'individual';
    $('input[name="share-type"]').val(shareeType);
    let rubricId = $('input[name="rubric-share-id"]').val();
    let sharees = await getIndividualRubricSharees(rubricId);
    updateShareeList(sharees, shareeType);
}

async function updateRubricShareesToTeam(){
    let shareeType = 'team';
    $('input[name="share-type"]').val(shareeType);
    let sharees = await getTeamRubricSharees();
    updateShareeList(sharees, shareeType);
}

function updateShareeList(sharees, type){
    let length = sharees.length;
    let parent = $('.rubric-share-modal-list');
    let template = $('.rubric-sharee-row').first();
    $('.rubric-share-modal-selected').empty();
    parent.empty();
    for(let i = 0; i < length; i++)
    {
        let newRow = template.clone();
        let value, name = null;
        if(type === 'individual'){
            value = sharees[i].id;
            name = sharees[i].name;
        }
        if(type === 'team'){
            value = sharees[i].scriibi_level_id;
            name = sharees[i].label;
        }
        newRow.find('input').val(value);
        newRow.find('input').attr('rubric-sharee-name', name);
        if('shared' in sharees[i]){
            if(!sharees[i].shared)
                 newRow.find('input').prop('checked', false);
            else
                newRow.find('input').prop('checked', true);
        }else{
            newRow.find('input').prop('checked', false);
        }
        newRow.find('label').text(name);
        newRow.removeAttr('hidden');
        parent.append(newRow);
    }
    $('.rubric-share-check').on('change', function($event){
        let parent = $('.rubric-share-modal-selected');
        let name = $(this).attr('rubric-sharee-name');
        if($(this).is(':checked')){
            parent.append(`<div class="add-student-modal-name-tag m-1" data-tag-name=${name.replace(' ', '_')}>` + name + `</div>`)
        }else{
            parent.find(`[data-tag-name=${name.replace(' ', '_')}]`).remove();
        }
    });
}

//init function (only executes when onload)
function init() {
    var assessmentDateField = document.getElementById("assessment_date");
    if (assessmentDateField) {
        addDefaultDate(assessmentDateField);
    }
}

window.onload = init();
