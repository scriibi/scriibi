@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')

<form method="POST" action="/assessment-save">
@csrf
    <div class="row assessment-marking-panel" id="assessment-marking-panel">

        <div class="marking-panel ml-0 mr-1 px-0 mt-3 marking-padding-right" id="marking-panel">
            <div class="score-label mx-0 bg-white" id="score-label">
                <!-- here goes the calculated score section in the value bit -->
                <!-- keep this blank -->
                <div>
                    <p class="w-100 text-center lable-input"></p>
                </div>
                <!-- pop each score point(calculated) in the value attribute (5 times) -->
                <div>
                    <p class="w-100 text-center lable-input">{{$rubrics[0]->scriibi_Level}}</p>
                </div>
                <div >
                    <p class="w-100 text-center lable-input">{{$rubrics[1]->scriibi_Level}}</p>
                </div>
                <div class="text-center">
                    <p class="w-100 text-center lable-input">{{$rubrics[2]->scriibi_Level}}</p>
                </div>
                <div class="text-center">
                    <p class="w-100 text-center lable-input">{{$rubrics[3]->scriibi_Level}}</p>
                </div>
                <div class="text-center">
                    <p class="w-100 text-center lable-input">{{$rubrics[4]->scriibi_Level}}</p>
                </div>
                <!-- end of score points -->
            </div>
            <div class="scroll-panel mx-0 px-0">
            
                <!-- pop the first skill card -->
               
                <?php
                    $counter = 0;
                ?>
                @foreach($skillCards as $sc)
                    <?php
                        $counter++;
                        $global = $sc->getGlobalCriteria();
                        $local = $sc->getLocalCriteria();
                    ?>
                    <div class="card px-0 mx-0 mt-3 ml-1 mr-1 mb-1 border-0">
                        <div class="card-body p-0">
                            <div class="card-title score-items mb-0 radioBTNs-section">
                                <div class="w-100 d-flex justify-content-between">
                                    <!-- load the first trait name -->
                                    <span class="align-self-center ml-3">{{$sc->getName()}}</span>
                                    @if (!empty($global))
                                    <a class="btn btn-link align-self-center criteria-btn">
                                        <img src="/images/close-up-arrow.png" alt="closeBTN" class="collapsable-arrow">
                                    </a>
                                    @endif
                                </div>
                                @if (!empty($global))
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0 ">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="m-0 p-0" type="radio" name="skill_{{$counter}}" value={{$rubrics[0]->scriibi_Level_Id . "/" . $sc->getId()}}><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="" type="radio" name="skill_{{$counter}}" value={{$rubrics[1]->scriibi_Level_Id . "/" . $sc->getId()}}><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input type="radio" name="skill_{{$counter}}" value={{$rubrics[2]->scriibi_Level_Id . "/" . $sc->getId()}}><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="" type="radio" name="skill_{{$counter}}" value={{$rubrics[3]->scriibi_Level_Id . "/" . $sc->getId()}}><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="" type="radio" name="skill_{{$counter}}" value={{$rubrics[4]->scriibi_Level_Id . "/" . $sc->getId()}}><span></span>
                                    </label>
                                </div>
                                @else
                                <div class="w-100 text-center align-self-center">
                                    <input type='radio' name="skill_{{$counter}}" value='na' hidden>
                                    <p>NA</p>
                                </div>
                                @endif
                            </div>
                            <!-- criteria details section-->
                            <div class="card-text score-items criteria-section">
                                <div class="">
                                </div>
                                <?php
                                    $global = $sc->getGlobalCriteria();
                                    $local = $sc->getLocalCriteria();
                                
                                foreach($global as $g){
                                        if($g != end($global)){
                                            echo '<div class="text-left">
                                            <p>'.$g.'</p>
                                            <pclass="milestone"></p>
                                            </div>
                                            <div class="">
                                            </div>';
                                        }else{
                                            echo '<div class="text-left">
                                            <p>'.$g.'</p>
                                            <p class="milestone"></p>
                                            </div>';
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /end of first skill card -->
            </div>
        </div>
        
        
        <!-- SIDEBAR SECTION -->
        <!-- sidebar btn to close or open -->
        <div class="btn-panel" id="btn-panel">
            <button type="button" class="btn align-self-start px-0 sidebar-btn arrow-move" id="sidebar-collapse"><span class="fas fa-arrow-right px-0"></span></button>
        </div>
        <!-- sidebar with assessment info -->
        <div class="info-panel" id="info-panel">

            <div class="d-flex justify-content-end">
                <!-- value attribute: Status -->
                <p class="w-100 @if ($status === "incomplete") {{"incomplete-style"}} @else {{"complete-style"}} @endif">{{$status}}</p>
            </div>
            <div class="d-flex justify-content-end mt-1">
                <!-- value attribute: Full name -->
                <p class="w-100"><strong>{{"$firstName $lastName"}}</strong></p>
            </div>

            <div class="d-flex justify-content-end mt-3">
                <label class="w-100" for="assessed-level">Assessed Level:</label>
            </div>
            <div class="d-flex">
                <!-- value attribute: Assessed level -->
                <select class="select-input" id="assessed-marking-level">
                    <option value="F">Foundation</option>
                    <option value="1">Level 1</option>
                    <option value="2">Level 2</option>
                    <option value="3">Level 3</option>
                    <option value="4">Level 4</option>
                    <option value="5">Level 5</option>
                    <option value="6">Level 6</option>
                </select>
            </div>
            <div class="d-flex mt-3 ">
                <p><strong>Student Leveled Samples</strong></p>
            </div>
            <div id="level-examples" class="d-flex mt-1">
                <div id="level-f" class="">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%20F.pdf">Foundation Level</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%201.pdf">Level 1</a>
                </div>
                <div id="level-1" class="d-none">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%20F.pdf">Foundation Level</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%201.pdf">Level 1</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%202.pdf">Level 2</a>
                </div>
                <div id="level-2" class="d-none">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%201.pdf">Level 1</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%202.pdf">Level 2</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%203.pdf">Level 3</a>
                </div>
                <div id="level-3" class="d-none">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%202.pdf">Level 2</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%203.pdf">Level 3</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%204.pdf">Level 4</a>
                </div>
                <div id="level-4" class="d-none">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%203.pdf">Level 3</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%204.pdf">Level 4</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%205.pdf">Level 5</a>
                </div>
                <div id="level-5" class="d-none">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%204.pdf">Level 4</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%205.pdf">Level 5</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%206.pdf">Level 6</a>
                </div>
                <div id="level-6" class="d-none">
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%205.pdf">Level 5</a>
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%206.pdf">Level 6</a>
                </div>
            </div>
            <div class="mt-5" >
                <textarea class="text-area-style" placeholder="Comments" id="text-area-style"></textarea>
            </div>
            <div class="d-flex justify-content-center mt-5 ">
                <input type="submit" class="save-marking-btn px-4" name="assessment-marking-submit" value="Save Marking" />
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5 ">
            ,<input type="text" name="skillCount" id="" value = {{count($skillCards)}} hidden>
            <button class="btn save-marking-btn px-4" type="submit" name="button">Save Marking</button>
        </div>

    </div>


    </div>
</form> <!-- end of form -->
@endsection
