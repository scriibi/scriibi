@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')


<div class="row" id="assessment-marking-panel">

    <div class="marking-panel ml-0 mr-1 px-0 mt-3" id="marking-panel">
        <div class="score-label mx-0 sticky-top bg-white" id="score-label">
            <!-- here goes the calculated score section in the value bit -->
            <!-- keep this blank -->
            <div>
                <p class="w-100 text-center lable-input"></p>
            </div>
            <!-- pop each score point(calculated) in the value attribute (5 times) -->
            <div>
                <p class="w-100 text-center lable-input ml-2">1</p>
            </div>
            <div >
                <p class="w-100 text-center lable-input ml-1">2</p>
            </div>
            <div class="text-center">
                <p class="w-100 text-center lable-input">3</p>
            </div>
            <div class="text-center">
                <p class="w-100 text-center lable-input">4</p>
            </div>
            <div class="text-center">
                <p class="w-100 text-center lable-input">5</p>
            </div>
            <!-- end of score points -->
        </div>
        <div class="scroll-panel mx-0 px-0">

            <!-- pop the first skill card -->
            <div class="card px-0 mx-0 mb-1 border-0">
                <div class="card-body p-0">
                    <div class="card-title score-items mb-0 radioBTNs-section ml-3">
                        <div class="w-100 d-flex justify-content-between arrow-up-btn">
                            <!-- load the first trait name -->
                            <span class="align-self-center">first skill trait name</span>
                            <a class="btn btn-link align-self-center criteria-btn" href="#load-skill-id" data-toggle="collapse">
                                <img src="/images/close-up-arrow.png" alt="closeBTN" class="collapsable-arrow">
                            </a>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0 ">
                                <!-- please load skill id in the name attribute -->
                                <input class="m-0 p-0" type="radio" name="score" value="score1"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" name="score" value="score2"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" name="score" value="score3"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" name="score" value="score4"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" name="score" value="score5"><span></span>
                            </label>
                        </div>
                    </div>
                    <!-- criteria details section-->
                    <div class="card-text score-items collapse show criteria-section " id="load-skill-id">
                        <div class="">
                        </div>

                        <div class="text-center">
                            <p>Here is the criteria
                             </p>
                            <p class="milestone">VCEAL20548, ACLE25487</p>

                        </div>
                        <div class="">

                        </div>
                        <div class="text-center">
                            <p>Here is the criteria
                            </p>
                            <p class="milestone">VCEAL6844</p>

                        </div>
                        <div class="">

                        </div>
                        <div class="text-center">
                            <p>Here is the criteria

                            </p>
                            <p class="milestone">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end of first skill card -->

            <!-- pop from second skill to the last skill -->
            <div class="card px-0 mx-0 mb-1 border-0">
                <div class="card-body p-0">
                    <div class="card-title score-items mb-0 radioBTNs-section ml-3">
                        <div class="w-100 text-center d-flex justify-content-between arrow-up-btn">
                            <span class="align-self-center">second skill trait name</span>
                            <!-- look at href attribute: please load skill id there-->
                            <a class="btn btn-link align-self-center" href="#load-skill-id-1" data-toggle="collapse">
                                <img src="/images/open-down-arrow.png" alt="closeBTN" class="collapsable-arrow">
                            </a>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0 ">
                                <!-- please load skill id in the name attribute -->
                                <input class="m-0 p-0" type="radio" name="skill-id-1" value="score1"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" id="" name="skill-id-1" value="score2"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" id="" name="skill-id-1" value="score3"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" id="" name="skill-id-1" value="score4"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <!-- please load skill id in the name attribute -->
                                <input class="" type="radio" id="" name="skill-id-1" value="score5"><span></span>
                            </label>
                        </div>
                    </div>
                    <!-- look at id attribute: please load skill-id-->
                    <div class="card-text score-items collapse criteria-section" id="load-skill-id-1">
                        <div class="">

                        </div>

                        <div class="text-center">
                            <p>Here is the criteria
                             </p>
                            <p class="milestone">VCEAL20548, ACLE25487</p>

                        </div>
                        <div class="">

                        </div>
                        <div class="text-center">
                            <p>Here is the criteria
                            </p>
                            <p class="milestone">VCEAL6844</p>

                        </div>
                        <div class="">

                        </div>
                        <div class="text-center">
                            <p>Here is the criteria

                            </p>
                            <p class="milestone">

                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- end skill card -->

        </div>
    </div>
    <!-- sidebar btn to close or open -->
    <div class="btn-panel" id="btn-panel">
        <button type="button" name="button" class="btn align-self-start px-0 sidebar-btn" id="sidebar-collapse"><i class="fas fa-arrow-right px-0"></i></button>
    </div>
    <!-- sidebar with assessment info -->
    <div class="info-panel mt-3 h-100 px-3 position-absolute-fixed" id="info-panel">

        <div class="d-flex justify-content-end mx-2">
            <!-- value attribute: Status -->
            <input class="w-100 mx-2 text-right"type="text-end" name="" value="Status" readonly>
        </div>
        <div class="d-flex justify-content-end mt-2  mx-2">
            <!-- value attribute: Full name -->
            <input class="w-100 mx-2 text-right"type="text" name="" value="Full Name" readonly>
        </div>

        <div class="d-flex justify-content-end mt-5  mx-2">
            <label class="w-100 mx-2 text-right "for="assessed-level">Assessed Level:</label>
        </div>
        <div class="d-flex justify-content-end mt-1  mx-2">
            <!-- value attribute: Assessed level -->
            <input class="w-100 mx-2 text-right "type="text" name="assessed-level" value="LEVEL 2" readonly>
        </div>
        <div class="mt-5" >
            <textarea class="text-area-style"name="name" rows="8" cols="80" placeholder="Comments/Notes" id="text-area-style"></textarea>
        </div>

        <div class="d-flex justify-content-center mt-5 ">
            <button class="btn level-example-btn px-4"type="button" name="button">Level Example</button>
        </div>
        <div class="d-flex justify-content-center mt-5 ">
            <button class="btn save-marking-btn px-4"type="button" name="button">Save Marking</button>
        </div>

    </div>


</div>
@endsection
