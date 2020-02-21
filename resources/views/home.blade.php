@extends('layout.mainlayout')
@section('title', 'Home')
@section('content')
@csrf

<div class="row mx-4 pb-5">
    <div class="d-none d-sm-block col-sm-1 col-md-2">
    </div>
    <div class="col-12 col-sm-10 col-md-8">

        <!-- greeting row -->
        <div class="row mt-5">
            <div class="col-12">
                <h3>Hi {{$user}}, </h3>
                <p>What would you like to do today?</p>
            </div>
        </div>
        <!-- main panel row -->
        <div class="row m-0 p-0 " id="main-panel">
            <!-- student list panel -->
            <div class="card sl-panel mr-3 student-list-card-style px-0" id="student-list-panel">
                <div class="student-list-scroll px-0 mx-0">
                        <div class="card-body px-2 pt-3 overflow-padding">
                            @foreach($students as $student)
                            <div class="studet-list-cell-style list-group list-group-flush mb-1">

                                <ul class="d-flex justify-content-between row mb-2 mt-2">
                                    <div class="col-7 row d-flex justify-content-start px-0">
                                        <div class="col-4 align-self-center text-truncate pl-1">
                                            <span>{{$student->student_First_Name}}</span>
                                        </div>
                                        <div class="col-5 align-self-center text-truncate pl-1">
                                            <span>{{$student->student_Last_Name}}</span>
                                        </div>
                                        <div class="col-3 align-self-center text-truncate pl-1">
                                            <span>{{$student->Student_Gov_Id}}</span>
                                        </div>

                                    </div>
                                    <div class="col-5 row d-flex justify-content-start px-0">
                                        <div class="col-4 align-self-center text-truncate px-0">
                                            <span>{{$student->grade_label}}</span>
                                        </div>
                                        <div class="col-4 align-self-center text-nowrap px-0">
                                            <span>{{$student->assessed_level_label}}</span>
                                        </div>
                                    </div>

                                </ul>

                            </div>
                            @endforeach
                        </div>
                </div>
                <div class="card-footer put-full-width-bottom student-list-footer-style d-flex justify-content-between p-2">
                        <p class="align-self-center p-0 m-0">Your student count: <span></span><strong>{{count($students)}}</strong></p>
                        <a href="/studentlist">
                            <div class="btn px-4 text-white go-to-student-btn align-self-center">Go to Student List</div>
                        </a>
                </div>
            </div>

            <!-- btn-panel -->
            <div class="btn-panel">
                <!-- assessments btn link-->
                <a href="/assessment-list" class="card extra-card-style list-group-item-action ">
                    <div class="d-flex justify-content-between h-100 mx-4 p-0">
                        <img class="align-self-center home-assessment-icon" src="/images/assessment-logo.png" alt="assessment">
                        <span class="align-self-center text-nowrap">My Assessments</span>
                    </div>
                </a>
                <!-- rubric template btn link -->
                <a href="/rubric-list" class="card extra-card-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4 p-0">

                        <img class="align-self-center home-rubric-icon" src="/images/rubric-template.png" alt="rubric-template">
                        <span class="align-self-center">My Rubrics</span>

                    </div>
                </a>
                <!-- Goal setting btn link-->
                <a href="#" class="card extra-card-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <img class="align-self-center home-goal-icon" src="/images/goal-setting.png" alt="rubric-template">
                        <span class="align-self-center">Goal Settings</span>
                    </div>
                </a>
                <!-- Data View btn -->
                <a href="/data-view" class="card extra-card-style list-group-item-action mt-2">
                    <div class="d-flex justify-content-between h-100 mx-4">
                        <img class="align-self-center home-data-icon" src="/images/data-view.png" alt="data-view">
                        <span class="align-self-center">View Student Data</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- extra support card row -->
        <div class="card-columns mt-5">

            <!-- Teaching lessons card -->
            <div class="card border-0">
                <div class="teaching-lesson-title p-2">
                    <a href="https://writing.scriibi.com/search-lessons/">
                        <li class="list-group list-group-flush">
                            <span class="pl-2 text-white text-align-middle">Teaching Lessons</span>
                        </li>
                    </a>
                </div>
                <a href="https://writing.scriibi.com/additional-support-material/" class="teaching-lessons-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/support-material.png" alt="logo1">
                    <span class="align-self-center mx-2">Support Material</span>
                </a>

                <a href="https://writing.scriibi.com/search-lessons/" class="teaching-lessons-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/lessons.png" alt="logo2">
                    <span class="align-self-center mx-2">Lessons</span>
                </a>

                <a href="https://writing.scriibi.com/point-of-need-tool/" class="teaching-lessons-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/point-of-need.png" alt="logo3">
                    <span class="align-self-center mx-2">Point of Need</span>
                </a>
            </div>

            <!-- Peer Assessment card -->
            <div class="card border-0">
                <div class="peer-assessment-title p-2">
                    <a href="https://writing.scriibi.com/peer-observation/">
                        <li class="list-group list-group-flush">
                            <span class="pl-2 text-white text-align-middle">Peer Assessment</span>
                        </li>
                    </a>
                </div>
                <a href="https://writing.scriibi.com/peer-observation/" class="peer-assessment-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/peer-obvs.png" alt="logo4">
                    <span class="align-self-center text-nowrap mx-2">Peer Observation</span>
                </a>
                <a href="https://writing.scriibi.com/observations-ive-completed/" class="peer-assessment-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/view-obvs.png" alt="logo5">
                    <span class="align-self-center mx-2 text-nowrap">View Observation</span>
                </a>
                <a href="https://writing.scriibi.com/peer-observations/" class="peer-assessment-list list-group-item list-group-item-action extra-support-card-list mt-2 mb-2 p-1 d-flex justify-content-start" >
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/feedback.png" alt="logo6">
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
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/help.png" alt="logo7">
                    <span class="align-self-center mx-2 text-nowrap">Help</span>
                </a>
                <a href="mailto:info@scriibi.com" class="scriibi-support-list list-group-item list-group-item-action extra-support-card-list mt-2 p-1 d-flex justify-content-start">
                    <img class="align-self-center mx-2 px-3 home-etc-icons" src="/images/contact-us.png" alt="logo8">
                    <span class="align-self-center mx-2 text-nowrap">Contact Us</span>
                </a>

            </div>
        </div>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
    </div>

</div>



@endsection
