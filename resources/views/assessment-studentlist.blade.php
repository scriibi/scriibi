@extends('layout.mainlayout')
@section('title', 'Assessment-Student List')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <!-- Assessment Title and edit/delete img-->
        <div class="row mt-5 ">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Assessment Name :</h5>
                <p>This is where the assessment title goes</p>
            </div>
            <div class="col-2">
                <span><img src="/images/edit.png" alt="edit-logo"> </span>
                <span><img src="/images/delete.png" alt="edit-logo"></span>
            </div>
        </div>
        <div class="row mt-2 ">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Date :</h5>
                <p>This is where the date goes</p>
            </div>
        </div>
        <div class="row mt-3">
            <!-- this is where the description of assessment task goes -->
            <div class="col-10">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor lacus mi, vitae suscipit mauris elementum non. Aliquam ultrices, lacus eu molestie posuere, mauris elit volutpat lorem, ut volutpat augue nunc eu sapien. Duis eget consectetur enim, a maximus metus. In quam dolor, ullamcorper non interdum id, pellentesque nec massa. Duis et erat non eros gravida sodales non et metus. Mauris tristique enim magna, a efficitur augue tincidunt interdum. In vitae condimentum orci.
                </p>
            </div>
        </div>

        <!-- show list of students whether is 'my student' or 'all students' -->
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="Assessment-Studentlist-title">Student List</h5>
            </div>
            <div class="col-12">
                <div class="header-cells rubric-table-header d-flex justify-content-start mt-5 px-0 pt-0 pb-0">
                    <p class="col-4 text-left px-0">Full Name</p>
                    <p class="col-2 text-left px-0">ID</p>
                    <p class="col-2 text-left px-0">Grade</p>
                    <p class="col-2 text-left px-0">Assessed Level</p>
                    <p class="col-2 text-left px-0">Status</p>
                </div>
            </div>
            <div class="col-12">
                <a href="#" class="row btn btn-block Assessment-Student-list-cell d-flex justify-content-start px-0" role="button">
                    <!-- here goes the full name, id, grade, assessed level, status -->
                    <p class="col-4 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">Louis Armstrong</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">s1234556</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">level 1</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">level 2</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">incomplete</p>
                </a>
            </div>

            <div class="col-12 d-flex justify-content-end mt-3 pr-4">
                <button type="button" name="button" class="btn save-exit-btn col-2">Save and Exit</button>

            </div>

            <!-- populate more cells as per rubric -->

        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
