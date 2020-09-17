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
        scrollX: greaterThanTen,
        paging:         false,
        // fixedColumns:   {
        //     leftColumns: 3,
        // },
        select: {
            // style : 'os',
            items : 'cell'
        }
    });
    
//========== OVERALL ASSESSMENT
    $(".assessed-button-filter").on("click", function () {
        $(".grade-button-filter").find(".radio-circle").removeClass("fill-circle");
        $(this).find(".radio-circle").addClass("fill-circle");
    });
     $(".grade-button-filter").on("click", function () {
        $(".assessed-button-filter").find(".radio-circle").removeClass("fill-circle");
        $(this).find(".radio-circle").addClass("fill-circle");
    });
    //if a user clicks the overall grade filter
    $("#overall-grade-filter").on("click", function(){
        
        //loop through each grade in each student row
        $(".student-row").each(function(){
           var grade = $(this).data('grade');
           let student_grade = parseFloat(grade); 
            
            //loop through each cell with the .student-skill-result identifier in the current .student-row
            $(this).find(".assessment-result").each(function(){

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
    });
    
    $("#overall-assessed-filter").on("click", function(){
        
        //loop through each grade in each student row
        $(".student-row").each(function(){
           var assessed = $(this).data('assessed');
           let student_grade = parseFloat(assessed); 
            
            //loop through each cell with the .student-skill-result identifier in the current .student-row
            $(this).find(".assessment-result").each(function(){

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
    });

//========== ASSESSEMNT STUDENT ASSESS DATA

    $(".student-row").each(function(){
    $(this).find('.testSheet').on("click", function(){
        let studentName = $(this).val();
        $('.hiddenArea').val(studentName);
        $("#form").submit();
    })
    });

    $(".assessment-btn").on("click", function(){
        let studentName = $(this).val();
        $('.hiddenArea').val(studentName);
        $("#form").submit();
    });
    
    //if a user clicks the grade filter
    $("#assessment-grade-filter").on("click", function(){
        //loop through each grade in each student row
        $(".student-row").each(function(){
           var grade = $(this).data('grade');
           let student_grade = parseFloat(grade); 
            
            //loop through each cell with the .student-skill-result identifier in the current .student-row
            $(this).find(".student-skill-result").each(function(){

                //before applying these classes, we need to remove any existing shading class
                $(this).removeClass("green-fill");
                $(this).removeClass("light-green-fill");
                $(this).removeClass("orange-fill");
                $(this).removeClass("light-orange-fill");
                
                let current_grade = parseFloat($(this).html());

                //if the result is greater than the student's result but less than their max grade but also their current grade does not equal their student grade
                if (current_grade > student_grade && current_grade < student_grade + 1 && current_grade != student_grade) {
                    $(this).addClass("light-green-fill");
                }
                //if the student's result is greater than their max grade
                if (current_grade >= student_grade + 1) {
                    $(this).addClass("green-fill");
                }
                //vice versa from the top half
                if (current_grade < student_grade && current_grade > student_grade - 1) {
                    $(this).addClass("light-orange-fill");
                }
                if (current_grade <= student_grade - 1) {
                    $(this).addClass("orange-fill");
                }
            });
        });
    });
    
    //if a user clicks the assessment grade filter
    $("#assessment-assessed-filter").on("click", function(){
        console.log("work");
        
        //loop through each grade in each student row
        $(".student-row").each(function(){
           var assessed = $(this).data('assessed');
           let student_grade = parseFloat(assessed); 
            
            //loop through each cell with the .student-skill-result identifier in the current .student-row
            $(this).find(".student-skill-result").each(function(){

                //before applying these classes, we need to remove any existing shading class
                $(this).removeClass("green-fill");
                $(this).removeClass("light-green-fill");
                $(this).removeClass("orange-fill");
                $(this).removeClass("light-orange-fill");
                
                let current_grade = parseFloat($(this).html());

                //if the result is greater than the student's result but less than their max grade but also their current grade does not equal their student grade
                if (current_grade > student_grade && current_grade < student_grade + 1 && current_grade != student_grade) {
                    $(this).addClass("light-green-fill");
                }
                //if the student's result is greater than their max grade
                if (current_grade >= student_grade + 1) {
                    $(this).addClass("green-fill");
                }
                //vice versa from the top half
                if (current_grade < student_grade && current_grade > student_grade - 1) {
                    $(this).addClass("light-orange-fill");
                }
                if (current_grade <= student_grade - 1) {
                    $(this).addClass("orange-fill");
                }
            });
        });
    });

    $(".student-row").each(function(){
        $(this).find(".student-skill-result").each(function(){
            $(this).on("click", function() {
                if($(this).html()){
                    let skillId = $(this).attr("data-skillId"); 
                    let mark = $(this).attr("data-mark"); 
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
                        // $(this).find(".student-goal-sheet-info").attr("checked", false);
                        if(availability.length !== 0)
                            $(this).toggleClass("circle");   
                        else
                            $("#no-strategies-warning-modal").modal("show");                          
                        if($(this).hasClass("circle"))
                            $(this).find(".student-goal-sheet-info").attr("checked", true);
                        else 
                            $(this).find(".student-goal-sheet-info").attr("checked", false);                   
                    })
                    .catch(err => {
                        console.log(err);
                    })
                }
            });
        });
    });

    
//======================== ASSESSMENT MARKING =======================================
    
    //assessment-marking script to check whether all radio buttons have been selected before displaying a completed text
    $(".marking-radio").on("click", function(){
        //default is variable is true
        let check = true;
        //loop through each radio button in each group and test whether they are checked or not
        $(".marking-radio").each(function(){
            //get the name of the radio button
            let radio_name = $(this).attr("name"); 
            console.log(radio_name);
            //check to see if each input within the group name is has been checked or not
            if ($("input:radio[name="+radio_name+"]:checked").length === 0) {
                check = false;
            }
        });
        
        //if check is still true, then display the completed text
        if (check === true) {
            $("#assessment-status").find(".complete-style").removeClass("d-none");
            $("#assessment-status").find(".incomplete-style").addClass("d-none");
            $("#assessment-status").find("input").val("1");
        }
    });
    
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
    
    //setting the default examples for the assessment-marking-page blade
    const assessed_level = $("#marking-level").html();
    $("#level-examples div").addClass("d-none");
    
    if (assessed_level != null) {
        if (assessed_level == "121"){
        $("#level-examples div").addClass("d-none");
        $("#level-f").removeClass("d-none");
        }
        else if (assessed_level == "125"){
            $("#level-examples div").addClass("d-none");
            $("#level-1").removeClass("d-none");
        }
        else if (assessed_level == "129"){
            $("#level-examples div").addClass("d-none");
            $("#level-2").removeClass("d-none");
        }
        else if (assessed_level == "133"){
            $("#level-examples div").addClass("d-none");
            $("#level-3").removeClass("d-none");
        }
        else if (assessed_level == "137"){
            $("#level-examples div").addClass("d-none");
            $("#level-4").removeClass("d-none");
        }
        else if (assessed_level == "141"){
            $("#level-examples div").addClass("d-none");
            $("#level-5").removeClass("d-none");
        }
        else if (assessed_level == "145"){
            $("#level-examples div").addClass("d-none");
            $("#level-6").removeClass("d-none");
        }   
    }
    
//======================== ASSESSMENT SETUP =========================================
    
     //If assessment form is incomplete, display the assessment form again
    $("#createAxBTN").on("click", function(event){
        event.preventDefault();
        if ((document.getElementById("assessment_name").value === "") || (document.getElementsByClassName('hidden-rubric-radio').rubric.value == "")) {
            $("#assessment-template").addClass("d-block");
            $("#assessment-template").removeClass("d-none");
            $("#rubric-template").addClass("d-none");
            $("#rubric-template").removeClass("d-block");
            toggleAssessmentSetupHeader("details");
        }else{
            document.getElementById('assessment-setup-form').submit();
        }
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

    // check for rubric-details page
    if(url.includes('rubric-details')){
        // add onlick event for the edit rubric link
        document.getElementById("edit-rubric-link").addEventListener("click", function(event){
            let rubric_edit_button = document.getElementById("edit-rubric-link");
            // retrieve the assessment count for this rubric
            let assessment_count = rubric_edit_button.getAttribute("data-assessment-count");
            if(assessment_count != "0"){
                // if assessment count is 0 then display a modal and prevent redirect
                event.preventDefault();
                $("#multiple-assessments-warning-modal").modal("show");
            }  
        });
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
            url_origin += '/fetch/assessed_skills/';
            url_origin += task_id;
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
                        if(!(checked.includes(skill.skill_Id.toString()))){
                            let node = document.createElement("LI");                
                            let textnode = document.createElement("SPAN");                
                            let colornode = document.createElement("SPAN");            
                            let text = document.createTextNode('  ' + skill.skill_Name);
                            let color = 'colored-dot-color-' + skill.colour;
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
            let currentUrl = window.location.href;
            let assessLevelParentDelete = document.getElementById('scriibi_rubrics_select');
            if (assessLevelParentDelete !== null)
                assessLevelParentDelete.remove();
            let rootNode = document.getElementById('rubric-list-skill-cards');
            rootNode.innerHTML = "";
            let rubricCount = rubrics.length;
            let currentSelected = $('.hidden-rubric-radio').val();
            if(rubricCount !== 0){
                for(let i = 0; i < rubricCount; i++){
                    let skillCardNode = document.createElement("DIV");
                    skillCardNode.classList.add('col-sm-6', 'col-md-6', 'col-lg-3', 'col-xl-3');
                    let linkNode;
                    if(currentUrl.includes('/assessment-setup')){
                        linkNode = document.createElement("div");
                        linkNode.classList.add('assessment-setup-rubric-select-radio-link');
                        linkNode.setAttribute('data-rubric-id', rubrics[i].id);
                        if(currentSelected == rubrics[i].id)
                            linkNode.classList.add('assessment-setup-rubric-selected');
                    }else{
                        linkNode = document.createElement("a");
                        linkNode.href = '/rubric-details/' + rubrics[i].id;
                        linkNode.target = '_self';
                    }
                    linkNode.classList.add('card', 'rubric-box', 'btn-block', 'rubric-list-card-single');
                    skillCardNode.appendChild(linkNode);
                    let rubricTitleNode = document.createElement("DIV");
                    rubricTitleNode.classList.add('rubric-list-text-title', 'text-left');
                    linkNode.appendChild(rubricTitleNode);
                    rubricTitleNode.innerHTML = rubrics[i].name;
                    let rubricSkillsNode = document.createElement("DIV");
                    rubricSkillsNode.classList.add('rubric-box-small', 'rubric-list-skills', 'text-left', 'align-middle');
                    let rubricSkillsTitleNode = document.createElement("p");
                    rubricSkillsTitleNode.classList.add('rubric-skills-para');
                    rubricSkillsNode.appendChild(rubricSkillsTitleNode);
                    rubricSkillsTitleNode.innerHTML = 'Skills';
                    linkNode.appendChild(rubricSkillsNode);
                    let rubricsSkillsDetailsNode = document.createElement('ul');
                    rubricsSkillsDetailsNode.style.cssText = "list-style: none;padding-left:10px;";
                    rubricSkillsNode.appendChild(rubricsSkillsDetailsNode);
                    rubrics[i].skills.forEach((skill, index) => {
                        if(index < 20){
                            let skillItem = document.createElement('li');
                            let skillNameNode = document.createElement('SPAN');
                            let skillColorNode = document.createElement('SPAN');
                            skillNameNode.innerHTML = ' ' + skill.name;
                            let colorClass = 'colored-dot-color-' + skill.color;
                            skillColorNode.classList.add('colored-dot-dimensions', colorClass);
                            skillItem.appendChild(skillColorNode);
                            skillItem.appendChild(skillNameNode);
                            rubricsSkillsDetailsNode.appendChild(skillItem);
                        }
                    });
                    let skillCardFooterNode = document.createElement('DIV');
                    linkNode.appendChild(skillCardFooterNode);
                    let moreSkillsNode = document.createElement('DIV');
                    moreSkillsNode.classList.add('rubric-more-skills');
                    skillCardFooterNode.appendChild(moreSkillsNode);
                    if(rubrics[i].skills.length > 20){
                        moreSkillsNode.innerHTML = (rubrics[i].skills.length - 20) + ' more'; 
                    }
                    if(!currentUrl.includes('/assessment-setup')){
                        let rubricDeleteNode = document.createElement('form');
                        rubricDeleteNode.method = "POST";
                        rubricDeleteNode.action = "/rubricDelete";
                        skillCardFooterNode.appendChild(rubricDeleteNode);
                        let rubricDeletehiddenInputNode = document.createElement('input');
                        rubricDeletehiddenInputNode.type = "hidden";
                        rubricDeletehiddenInputNode.name = "rubricId";
                        rubricDeletehiddenInputNode.value = rubrics[i].id;
                        let rubricDeleteButtonNode = document.createElement('button');
                        rubricDeleteButtonNode.classList.add('rubric-remove-button-styling');
                        rubricDeleteButtonNode.type = 'submit';
                        let rubricDeleteImgNode = document.createElement('img');
                        rubricDeleteImgNode.classList.add('interaction-icon');
                        rubricDeleteImgNode.src = 'images/delete.png';
                        rubricDeleteNode.appendChild(rubricDeletehiddenInputNode);
                        rubricDeleteNode.appendChild(rubricDeleteButtonNode);
                        rubricDeleteButtonNode.appendChild(rubricDeleteImgNode);
                    }
                    rootNode.appendChild(skillCardNode);
                }
                assessmentRubricSelectListener();
            }
        })
        .catch(err => {
            console.log(err);
        })
    });

    // background event listner to check for a rubric select/click during assessment setup
    assessmentRubricSelectListener();

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
            console.log(rubrics);
            updateRubricsGrid(rubrics);
        })
        .catch(err => {
            console.log(err);
        })
    });

    $("#rubric-list-option-build-rubrics").on("click", function(){
        $(".rubric-list-option-current-style").removeClass("rubric-list-option-current-style");
        $(this).addClass("rubric-list-option-current-style");
        let url_origin = window.location.origin;
        url_origin += 'rubric-list-build';
    });

}); //===== /END OF JQUERY =======

//######################################### VANILLA JS SCRIPTS #########################################

//======================== STUDENT LIST =============================================

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
        document.getElementById('backBTN').setAttribute('hidden', 'hidden');
        document.getElementById('createAxBTN').setAttribute('hidden', 'hidden');
        content = `Fill in details for your assessment`;
    }else{
        document.getElementById('backBTN').removeAttribute('hidden');
        document.getElementById('createAxBTN').removeAttribute('hidden');
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
    }); 
}

function updateRubricsGrid(dataSet){
    let currentUrl = window.location.href;
    let rubrics = dataSet['rubrics'];
    let assessedLabels = dataSet['assessed_labels'];
    let teacherLevel = dataSet['teacher_level'];
    let rootNode = document.getElementById('rubric-list-skills-section');
    rootNode.classList.remove('student-list-scroll');
    let innerNode = document.getElementById('rubric-list-skill-cards');
    innerNode.classList.add('student-list-scroll');
    let assessLevelParentDelete = document.getElementById('scriibi_rubrics_select');
    if (assessLevelParentDelete !== null)
        assessLevelParentDelete.remove();
    innerNode.innerHTML = "";
    let assessLevelParent = document.createElement('DIV');
    assessLevelParent.classList.add('col-4', 'mb-4');
    assessLevelParent.setAttribute('id', 'scriibi_rubrics_select');
    let assessmentLeveltitle = document.createElement('label');
    assessmentLeveltitle.innerText = 'Show Scriibi Rubrics for:';
    let breakPoint = document.createElement('br');
    rootNode.insertBefore(assessLevelParent, innerNode);
    assessLevelParent.appendChild(assessmentLeveltitle);
    assessLevelParent.appendChild(breakPoint);
    let assessmentLevelSelect = document.createElement('select');
    assessmentLevelSelect.setAttribute('name', 'assessed_level');
    assessmentLevelSelect.setAttribute('id', 'select_curriculum_code_for_scriibi_rubrics');
    assessmentLevelSelect.classList.add('select-input');
    assessedLabels.forEach((label) => {
        let option = document.createElement('option');
        option.setAttribute('value', label.school_scriibi_level_id);
        option.innerText = label.assessed_level_label;
        if(teacherLevel == label.school_scriibi_level_id)
            option.selected = true;
        assessmentLevelSelect.appendChild(option);
    });
    assessLevelParent.appendChild(assessmentLevelSelect);
    let assessLevelDelimeter = document.createElement('SPAN');
    assessLevelDelimeter.classList.add('bar');
    assessLevelParent.appendChild(assessLevelDelimeter);
    let rubricCount = rubrics.length;
    let currentSelected = $('.hidden-rubric-radio').val();
    if(rubricCount !== 0){
        for(let i = 0; i < rubricCount; i++){
            let skillCardNode = document.createElement("DIV");
            skillCardNode.classList.add('col-sm-6', 'col-md-6', 'col-lg-3', 'col-xl-3');
            let linkNode;
            if(currentUrl.includes('/assessment-setup')){
                linkNode = document.createElement("div");
                linkNode.classList.add('assessment-setup-rubric-select-radio-link');
                linkNode.setAttribute('data-rubric-id', rubrics[i].id);
                if(currentSelected == rubrics[i].id)
                    linkNode.classList.add('assessment-setup-rubric-selected');
            }else{
                linkNode = document.createElement("a");
                linkNode.target = '_self';
            }
            linkNode.classList.add('card', 'rubric-box', 'btn-block', 'rubric-list-card-single');
            skillCardNode.appendChild(linkNode);
            let rubricTitleNode = document.createElement("DIV");
            rubricTitleNode.classList.add('rubric-list-text-title', 'text-left');
            linkNode.appendChild(rubricTitleNode);
            rubricTitleNode.innerHTML = rubrics[i].name;
            let rubricSkillsNode = document.createElement("DIV");
            rubricSkillsNode.classList.add('rubric-box-small', 'rubric-list-skills', 'text-left', 'align-middle');
            let rubricSkillsTitleNode = document.createElement("p");
            rubricSkillsTitleNode.classList.add('rubric-skills-para');
            rubricSkillsNode.appendChild(rubricSkillsTitleNode);
            rubricSkillsTitleNode.innerHTML = 'Skills';
            linkNode.appendChild(rubricSkillsNode);
            let rubricsSkillsDetailsNode = document.createElement('ul');
            rubricsSkillsDetailsNode.style.cssText = "list-style: none;padding-left:10px;";
            rubricSkillsNode.appendChild(rubricsSkillsDetailsNode);
            rubrics[i].skills.forEach((skill, index) => {
                if(index < 20){
                    let skillItem = document.createElement('li');
                    let skillNameNode = document.createElement('SPAN');
                    let skillColorNode = document.createElement('SPAN');
                    skillNameNode.innerHTML = ' ' + skill.name;
                    let colorClass = 'colored-dot-color-' + skill.color;
                    skillColorNode.classList.add('colored-dot-dimensions', colorClass);
                    skillItem.appendChild(skillColorNode);
                    skillItem.appendChild(skillNameNode);
                    rubricsSkillsDetailsNode.appendChild(skillItem);
                }
            });
            let skillCardFooterNode = document.createElement('DIV');
            linkNode.appendChild(skillCardFooterNode);
            let moreSkillsNode = document.createElement('DIV');
            moreSkillsNode.classList.add('rubric-more-skills');
            skillCardFooterNode.appendChild(moreSkillsNode);
            if(rubrics[i].skills.length > 20){
                moreSkillsNode.innerHTML = (rubrics[i].skills.length - 20) + ' more'; 
            }
            innerNode.appendChild(skillCardNode);
        }
        assessmentRubricSelectListener();
    }
    let listenOn = document.getElementById('select_curriculum_code_for_scriibi_rubrics');
    listenOn.addEventListener('change', function(){
        let value = listenOn.value;
        let url_origin = window.location.origin;
        url_origin += '/rubric-list-scriibi/' + value;
        fetch(url_origin)
        .then(data => {
            return data.json();
        })
        .then(rubrics => {
            updateRubricsGrid(rubrics);
        })
        .catch(err => {
            console.log(err);
        })
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
