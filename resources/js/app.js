"use strict";


//Start of Jquery
$(function(){
    //AJAX display students jquery
   //loads the list of students and displays it onto the listDisplay Div
   $.ajax({
       type:'GET',
       url: '/AJAX/listCall',
       success: function(data){
           $("#listDisplay").html(data);
       },
       error:function(data){
           console.log('error');
           console.log(data);
       }
   });
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

    // side-bar collapse function
    $('#sidebar-collapse').on('click', function () {
        console.log('TOGGLE INFO PANEL');
        $('#assessment-marking-panel').toggleClass('hide-info-panel');
    });

    // arrow rotate function
    $(".arrow-up-btn").click(function(){
        $(this).find(".collapsable-arrow").toggleClass("image-rotate");
    });

    // rubric builder curriculum code on change function
    $('#select_curriculum_code').change(function(){
        $(this).val();
        window.location.href="RubricFlag/"+$(this).val();
        // return "/RubricFlag/" + $(this).val();
    });

    $('#rubric-save').click(function(){

        alert("you are leaving rubric builder!");
        setTimeout(redirect, 1000);


    });

    function redirect(){
        window.location.href="/RubricConfirm";
    }








});

//Student List scripts
function openEditForm(event) {
    alert("works");
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

let editStudentButtons = document.getElementsByClassName("edit-student-button"),
    closeStudentButtons = document.getElementsByClassName("close-edit-button");

for (const openStudentButton of editStudentButtons) {
    console.log(openStudentButton);
    openStudentButton.addEventListener('click', openEditForm, true);
}

for (const closeStudentButton of closeStudentButtons) {
    closeStudentButton.addEventListener('click', closeEditForm, true);
}



// assessment setup Page

function closeAssessmentForm(event){
    document.getElementById("assessment-template").classList.remove("d-none","d-block");
    document.getElementById("assessment-template").classList.toggle("d-none",true);
}

function openRubricForm(event){
    document.getElementById("rubric-template").classList.remove("d-block","d-block");
    document.getElementById("rubric-template").classList.toggle("d-block",true);
}

function openAssessmentForm(event){
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

//init function (only executes when onload)
function init() {
    var assessmentDateField = document.getElementById("assessment_date");
    if (assessmentDateField) {
        console.log(assessmentDateField);
        addDefaultDate(assessmentDateField);
    }
}

window.onload = init();
