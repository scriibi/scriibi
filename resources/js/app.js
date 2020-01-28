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
saveBTN.addEventListener('click',check_input_filled, true);


// saveBTN.addEventListener('click',function(e){
//
//     // check_cirriculum_code_selected();
//     // check_skill_checked();
//     // if(check_cirriculum_code_selected()&&check_required_inputs()&&check_skill_checked()){
//     //
//     // }e.currentTarget.submit();
//
// });

// validate input from all fields in rubric-form
function check_input_filled(e){

    e.preventDefault();

    var error = "",
        curriculum_code = document.getElementById("select_curriculum_code").value,
        skill_1_error = false,
        skill_2_error = false,
        title_1_error = false,
        title_2_error = false;
    if (curriculum_code === ""){
        error += "you need curriculum code \n";
    }

    // check rubric title 1 & 2 are entered
    var rubric_title_1 = document.getElementById("assessment_name1").value;
    var rubric_title_2 = document.getElementById("assessment_name2").value;
    var title_1_filled = false;
    var title_2_filled = false;
    if (rubric_title_1===""){
        title_1_error = true;
        error+="you need to set term 1 rubric title. \n";
    }

    if (rubric_title_2===""){
        title_2_error = true;
        error+="you need to set term 2 rubric title. \n";
    }


    //check form 1 skill items
    var skill_items_1 = document.getElementById("check-array1").querySelectorAll(".skill-checkbox1");
    var skill_checked_1 = false;
    for (var i = 0; i < skill_items_1.length; i++) {
        if (skill_items_1[i].checked) {
            skill_checked_1 = true;
            break;
        }
    }

    if (skill_checked_1 === false){
        skill_1_error = true;
    }

    if (skill_1_error === true) {
        error += "you need to select skills for term 1 \n";
    }

    //check form 2 skill item
    var skill_items_2 = document.getElementById("check-array2").querySelectorAll(".skill-checkbox2");
    var skill_checked_2 = false;
    for(var i=0; i< skill_items_2.length; i++){
        if (skill_items_2[i].checked) {
            skill_checked_2 = true;
            break;
        }
    }
    if (skill_checked_2 === false){
        skill_2_error = true;
    }
    if (skill_2_error === true){
        error += "you need to select skills for term 2 \n";
    }

    if((skill_checked_1 === true)&&(skill_checked_2 === true)&&(error === "")){
        var form = document.getElementById("rubricform");
        form.submit();
    }
    else {
        alert(error);
    }
}

// check at least one skill- radio is selected
// function check_skill_checked(){
//     var error="";
//
// }

//init function (only executes when onload)
function init() {
    var assessmentDateField = document.getElementById("assessment_date");
    if (assessmentDateField) {
        addDefaultDate(assessmentDateField);
    }
}

window.onload = init();
