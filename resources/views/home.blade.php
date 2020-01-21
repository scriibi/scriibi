@extends('layout.mainlayout')
@section('title', 'Home')
@section('content')


<div class="row mx-4">
    <div class="d-none d-sm-block col-sm-1 col-md-2">
    </div>
    <div class="col-12 col-sm-10 col-md-8">

        <!-- greeting row -->
        <div class="row mt-5">
            <div class="col-12">
                <h3>Hi,</h3>
                <p>What would you like to do today?</p>
            </div>
        </div>

        <!-- main panel row -->
        <div class="row m-0 p-0 " id="main-panel">
            <!-- student list panel -->
            <div class="card sl-panel mr-3 student-list-card-style p-0" id="student-list-panel">
                <!-- start of the list -->
                <div class="student-list-scroll card-body mt-3 mb-0 mx-2 px-1 pb-1 pt-1 d-flex justify-content-center">
                    <div class="align-self-center">
                        <p class="studet-list-text">You currently have no students registered.</p>
                        <p class="studet-list-text">Click the green button below to start adding your students!</p>
                    </div>




                    <!-- popultae student list cell per row-->
                    <!-- <div class="studet-list-cell-style list-group list-group-flush mb-2">
                        <ul class="d-flex justify-content-around m-0 pt-1 pb-2 px-2">
                            <div class="align-self-center">
                                <span>student</span>
                            </div>
                            <div class="align-self-center">
                                <span>Name</span>
                            </div>
                            <div class="align-self-center">
                                <span>ID</span>
                            </div>
                            <div class="align-self-center">
                                <span>grade</span>
                            </div>
                            <div class="align-self-center">
                                <span>grade</span>
                            </div>
                        </ul>
                    </div> -->
                    <!-- end of each stuednt cell -->
                </div>
                <div class="card-footer student-list-footer-style d-flex justify-content-between p-2">
                        <p class="align-self-center p-0 m-0"><strong>you registered <span></span> students</strong></p>
                        <button type="button" name="button" class="btn px-4 text-white go-to-student-btn align-self-center">Go to Student List</button>
                </div>
            </div>

            <!-- btn-panel -->
            <div class="btn-panel">
                <!-- assessments btn -->
                <a href="/assessment-list" class="card extra-card-style list-group-item-action ">
                    <div class="d-flex justify-content-between h-100 mx-4 p-0">
                        <img class="align-self-center "src="/images/Assessment Logo.png" alt="assessment">
                        <span class="align-self-center">Assessments</span>
                    </div>
                </a>
                <!-- rubric template btn -->
                <a href="/rubric-list" class="card extra-card-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4 p-0">
                        <img class="align-self-center" src="/images/rubric-template.png" alt="rubric-template">
                        <span class="align-self-center">Rubric Template</span>
                    </div>
                </a>
                <!-- Goal setting btn -->
                <a href="#" class="card extra-card-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <img class="align-self-center" src="/images/goal-setting.png" alt="rubric-template">
                        <span class="align-self-center">Goal Settings</span>
                    </div>
                </a>
                <!-- Data View btn -->
                <a href="#" class="card extra-card-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <img class="align-self-center" src="/images/data-view.png" alt="data-view">
                        <span class="align-self-center">Data View</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- extra support card row -->
        <div class="card-columns mt-5">

            <!-- Teaching lessons card -->
            <div class="card border-0">
                <div class="teaching-lesson-title p-2">
                    <a href="#">
                        <li class="list-group list-group-flush">
                            <span class="pl-2 text-white text-align-middle">Teaching Lessons</span>
                        </li>
                    </a>
                </div>
                <a href="#" class="teaching-lessons-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3" src="/images/support-material.png" alt="logo1">
                    <span class="align-self-center mx-2">Support Material</span>
                </a>

                <a href="#" class="teaching-lessons-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3" src="/images/lessons.png" alt="logo2">
                    <span class="align-self-center mx-2">Lessons</span>
                </a>

                <a href="#" class="teaching-lessons-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3" src="/images/point-of-need.png" alt="logo3">
                    <span class="align-self-center mx-2">Point of Need</span>
                </a>
            </div>

            <!-- Peer Assessment card -->
            <div class="card border-0">
                <div class="peer-assessment-title p-2">
                    <a href="#">
                        <li class="list-group list-group-flush">
                            <span class="pl-2 text-white text-align-middle">Peer Assessment</span>
                        </li>
                    </a>
                </div>
                <a href="#" class="peer-assessment-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3" src="/images/peer-obvs.png" alt="logo4">
                    <span class="align-self-center text-nowrap mx-2">Peer Observation</span>
                </a>
                <a href="#" class="peer-assessment-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3" src="/images/view-obvs.png" alt="logo5">
                    <span class="align-self-center mx-2 text-nowrap">View Observation</span>
                </a>
                <a href="#" class="peer-assessment-list list-group-item list-group-item-action extra-support-card-list mt-2 mb-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3" src="/images/feedback.png" alt="logo6">
                    <span class="align-self-center mx-2 text-nowrap">Feedback for Me</span>
                </a>
            </div>

            <!-- Scriibi Support -->
            <div class="card border-0">
                <div class="scriibi-support-title p-2">
                    <a href="#">
                        <li class="list-group list-group-flush">
                            <span class="pl-2 text-white text-align-middle">Scriibi Support</span>
                        </li>
                    </a>
                </div>
                <a href="#" class="scriibi-support-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1  d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3" src="/images/help.png" alt="logo7">
                    <span class="align-self-center mx-2 text-nowrap">Help</span>
                </a>
                <a href="#" class="scriibi-support-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3" src="/images/contact us.png" alt="logo8">
                    <span class="align-self-center mx-2 text-nowrap">Contact Us</span>
                </a>

            </div>
        </div>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
    </div>

</div>



@endsection
