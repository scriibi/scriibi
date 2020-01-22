"use strict";

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

//Student List scripts

//AJAX display students jquery
$(function(){
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
   })
});

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

var editStudentButtons = document.getElementsByClassName("edit-student-button");
var closeStudentButtons = document.getElementsByClassName("close-edit-button"); 

for (const openStudentButton of editStudentButtons) {
    openStudentButton.addEventListener('click', openEditForm, true);
}

for (const closeStudentButton of closeStudentButtons) {
    closeStudentButton.addEventListener('click', closeEditForm, true);
}