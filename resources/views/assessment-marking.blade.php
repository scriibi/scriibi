@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')

<div class="row" id="assessment-marking-panel">

    <div class="marking-panel mx-0 px-0 mt-2" id="marking-panel">
        <div class="score-label pl-0 pr-2 mx-0" id="score-label">
            <!-- here goes the calculated score section in the value bit -->

            <!-- keep this blank -->
            <div>
                <input type="text" name="" value="" class="w-100 text-center lable-input">
            </div>
            <!-- pop each score point(calculated) in the value attribute (5 times) -->
            <div>
                <input type="text" name="" value="1" class="w-100 text-center lable-input" readonly>
            </div>
            <div >
                <input type="text" name="" value="2" class="w-100 text-center lable-input" readonly>
            </div>
            <div class="text-center">
                <input type="text" name="" value="3" class="w-100 text-center lable-input" readonly>
            </div>
            <div class="text-center">
                <input type="text" name="" value="4" class="w-100 text-center lable-input" readonly>
            </div>
            <div class="text-center">
                <input type="text" name="" value="5"  class="w-100 text-center lable-input" readonly>
            </div>
            <!-- end of score points -->
        </div>
        <div class="scroll-panel mx-0 px-0">

            <!-- pop the first skill card -->
            <div class="card px-0 mx-0 mb-1 border-0">
                <div class="card-body p-0">
                    <div class="card-title score-items mb-0 radioBTNs-section">
                        <div class="w-100 text-center d-flex justify-content-around arrow-up-btn">
                            <!-- load the first trait name -->
                            <span class="align-self-center">skill trait name</span>
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
                    <div class="card-title score-items mb-0 radioBTNs-section">
                        <div class="w-100 text-center d-flex justify-content-around arrow-up-btn">
                            <span class="align-self-center">skill trait name</span>
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
            </div><!-- /skill card -->
        </div>
    </div>
    <div class="btn-panel" id="btn-panel">
        <button type="button" name="button" class="btn align-self-start px-0" id="sidebar-collapse"><i class="fas fa-arrow-right px-0"></i></button>
    </div>
    <!-- sidebar with assessment info -->
    <div class="info-panel d-block justify-content-end h-100 w-100" id="info-panel">

        <div class="">
            <!-- value attribute: Status -->
            <input class="mt-1"type="text" name="" value="Status" readonly>
            <!-- value attribute: Full name -->
            <input class="mt-2"type="text" name="" value="Full Name" readonly>
            <!-- value attribute: Assessed level -->
            <input class="mt-3"type="text" name="" value="Assessed Level" readonly>

            <textarea class="mt-5 text-area-style"name="name" rows="8" cols="80" placeholder="Comments/Notes"></textarea>
            <div class="">
                <button class="btn level-example-btn px-4"type="button" name="button">Level Example</button>
            </div>
            <div class="">
                <button class="btn save-marking-btn px-4"type="button" name="button">Save Marking</button>
            </div>
        </div>

    </div>


</div>
@endsection
