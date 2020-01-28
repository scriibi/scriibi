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
        // window.location.href="RubricFlag/"+$(this).val();
        return "/RubricFlag/" + $(this).val();
    });

});


//Student List scripts

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

assessClass.addEventListener("click", toggleRadioBorder, true);
assessGrade.addEventListener("click", toggleRadioBorder, true);
//end of radio button script

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
console.log(saveBTN);
var form = document.getElementById("#rubricform");

saveBTN.addEventListener('click',check_skill_checked,true);
// check if curriculum code is selected
saveBTN.addEventListener('click',check_cirriculum_code_selected, true);


saveBTN.addEventListener('click',function(e){
    e.preventDefault();
    check_cirriculum_code_selected();
    check_skill_checked();
    if(check_cirriculum_code_selected()&&check_required_inputs()&&check_skill_checked()){
        e.currentTarget.submit();
    }

});

// check curriculum code is selected
function check_cirriculum_code_selected(){
    var error = "";
    var curriculum_code = document.getElementById("select_curriculum_code").value;
    if (curriculum_code == " "){
        error += "You need a curriculum_code \n";
    }

    var skill_items = document.getElementById("check-array2").querySelector(".skill-checkbox2");
    console.log(skill_items);

}

// check at least one skill- radio is selected
function check_skill_checked(){
    var error="";

}

//init function (only executes when onload)
function init() {
    var assessmentDateField = document.getElementById("assessment_date");
    if (assessmentDateField) {
        addDefaultDate(assessmentDateField);
    }
}

window.onload = init();
