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
        <div class="row p-0 mx-0 mb-3" id="main-panel">

            <!-- student list panel -->
            <div class="card sl-panel mr-3 card-home-style" id="student-list-panel">
                <div class="card-body p-2">
                    <p>student list view</p>
                </div>
                <div class="card-footer d-flex justify-content-between p-2">
                        <p class="align-self-center m-0">you have registered <span></span> students</p>
                        <button type="button" name="button" class="btn go-to-student-btn m-0">Go to Student List</button>
                </div>
            </div>

            <!-- btn-panel -->
            <div class="btn-panel ">
                <!-- assessments btn -->
                <a href="#" class="card card-home-style list-group-item-action ">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <span class="fa fa-university fa-5x align-self-center"></span>
                        <span class="align-self-center">Assessments</span>
                    </div>
                </a>
                <!-- rubric template btn -->
                <a href="#" class="card card-home-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <span class="fa fa-university fa-3x align-self-center"></span>
                        <span class="align-self-center">Rubric Template</span>
                    </div>
                </a>
                <!-- Goal setting btn -->

                <a href="#" class="card card-home-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <span class="fa fa-university fa-1x align-self-center"></span>
                        <span class="align-self-center">Goal Settings</span>
                    </div>
                </a>
                <!-- Data View btn -->
                <a href="#" class="card card-home-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <span class="fa fa-university fa-1x align-self-center"></span>
                        <span class="align-self-center">Data View</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- extra support card row -->
        <div class="card-columns mt-5 mx-0 px-0">

            <!-- Teaching lessons card -->
            <div class="card border-0 p-0 m-0" id="teaching-lesson-card">
                <li class="list-group list-group-flush">
                    <span class="pl-2 text-white text-align-middle">Teaching Lessons</span>
                </li>
                <div id="teaching-lesson-list">
                    <a href="#" class="list-group-item list-group-item-action" >
                        <div class="d-flex justify-content-start ">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2">Support Material</span>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2">Lessons</span>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2">Point of Need</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Peer Assessment card -->
            <div class="card border-0 p-0 " id="peer-assessment-card">
                <li class="list-group list-group-flush">
                    <span class="pl-2 text-white text-align-middle">Peer Assessment</span>
                </li>
                <div id="peer-assessment-list">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center text-nowrap mx-2">Create Peer Observation</span>
                        </div>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2 text-nowrap">View Observation</span>
                        </div>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2 text-nowrap">Feedback for Me</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scriibi Support -->
            <div class="card border-0 p-0 m-0 " id="scriibi-support-card">
                <li class="list-group list-group-flush">
                    <span class="pl-2 text-white text-align-middle">Scriibi Support</span>
                </li>
                <div id="scriibi-support-list">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2 text-nowrap">Help</span>
                        </div>

                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex justify-content-start">
                            <span class="fas fa-book align-self-center mx-2"></span>
                            <span class="align-self-center mx-2 text-nowrap">Contact US</span>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
    </div>

</div>



@endsection
