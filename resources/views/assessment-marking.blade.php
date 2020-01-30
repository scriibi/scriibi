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
                <p class="w-100 text-center lable-input ml-2">{{$rubrics[0]}}</p>
            </div>
            <div >
                <p class="w-100 text-center lable-input ml-1">{{$rubrics[1]}}</p>
            </div>
            <div class="text-center">
                <p class="w-100 text-center lable-input">{{$rubrics[2]}}</p>
            </div>
            <div class="text-center">
                <p class="w-100 text-center lable-input">{{$rubrics[3]}}</p>
            </div>
            <div class="text-center">
                <p class="w-100 text-center lable-input">{{$rubrics[4]}}</p>
            </div>
            <!-- end of score points -->
        </div>
        <div class="scroll-panel mx-0 px-0">

            <!-- pop the first skill card -->
            @foreach($skillCards as $sc)
                <div class="card px-0 mx-0 mb-1 border-0">
                    <div class="card-body p-0">
                        <div class="card-title score-items mb-0 radioBTNs-section ml-3">
                            <div class="w-100 d-flex justify-content-between">
                                <!-- load the first trait name -->
                                <span class="align-self-center">{{$sc->getName()}}</span>
                                <a class="btn btn-link align-self-center criteria-btn arrow-up-btn" href="#load-skill-id" data-toggle="collapse">
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
                            <?php
                                $global = $sc->getGlobalCriteria();
                                $local = $sc->getLocalCriteria();
                            ?>
                            <div class="text-left">
                                <p>{{$global[0]}}
                                </p>

                                <pclass="milestone"></p>

                            </div>
                            <div class="">

                            </div>
                            <div class="text-left">
                                <p>{{$global[1]}}
                                </p>

                                <p class="milestone"></p>


                            </div>
                            <div class="">

                            </div>
                            <div class="text-left">
                                <p>{{$global[2]}}</p>

                                <p class="milestone"></p>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- /end of first skill card -->

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
            <input class="w-100 mx-2 text-right"type="text-end" name="" value={{$status}} readonly>
        </div>
        <div class="d-flex justify-content-end mt-2  mx-2">
            <!-- value attribute: Full name -->
            <input class="w-100 mx-2 text-right"type="text" name="" value="{{"$firstName $lastName"}}" readonly>
        </div>

        <div class="d-flex justify-content-end mt-5  mx-2">
            <label class="w-100 mx-2 text-right "for="assessed-level">Assessed Level:</label>
        </div>
        <div class="d-flex justify-content-end mt-1  mx-2">
            <!-- value attribute: Assessed level -->
            <select id="assessed-marking-level">
                <option value="F">Foundation</option>
                <option value="1">Level 1</option>
                <option value="2">Level 2</option>
                <option value="3">Level 3</option>
                <option value="4">Level 4</option>
                <option value="5">Level 5</option>
                <option value="6">Level 6</option>
            </select>
        </div>
        <div class="mt-5" >
            <textarea class="text-area-style"name="name" rows="8" cols="80" placeholder="Comments/Notes" id="text-area-style"></textarea>
        </div>

        <div class="d-flex justify-content-center mt-5 ">
            <h5><strong>Student Leveled Samples</strong></h5>
        </div>
        <div id="level-examples" class="d-flex justify-content-center mt-5 ">
            <div id="level-f" class="">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%20F.pdf">Foundation Level</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%201.pdf">Level 1</a>
            </div>
            <div id="level-1" class="d-none">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%20F.pdf">Foundation Level</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%201.pdf">Level 1</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%202.pdf">Level 2</a>
            </div>
            <div id="level-2" class="d-none">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%201.pdf">Level 1</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%202.pdf">Level 2</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%203.pdf">Level 3</a>
            </div>
            <div id="level-3" class="d-none">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%202.pdf">Level 2</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%203.pdf">Level 3</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%204.pdf">Level 4</a>
            </div>
            <div id="level-4" class="d-none">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%203.pdf">Level 3</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%204.pdf">Level 4</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%205.pdf">Level 5</a>
            </div>
            <div id="level-5" class="d-none">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%204.pdf">Level 4</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%205.pdf">Level 5</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%206.pdf">Level 6</a>
            </div>
            <div id="level-6" class="d-none">
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%205.pdf">Level 5</a>
                <a target="_blank" class="d-block mb-3" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%206.pdf">Level 6</a>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5 ">
            <button class="btn save-marking-btn px-4"type="button" name="button">Save Marking</button>
        </div>

    </div>


</div>
@endsection
