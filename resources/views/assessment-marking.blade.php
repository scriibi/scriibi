@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')

<form method="POST" action="/assessment-save">
@csrf
    <div class="row assessment-marking-panel" id="assessment-marking-panel">

        <div class="marking-panel ml-0 px-0 mt-3 marking-padding-right" id="marking-panel">
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
                        $rubric1 = $rubrics[0]->scriibi_Level_Id."/".$sc->getId();
                        $rubric2 = $rubrics[1]->scriibi_Level_Id."/".$sc->getId();
                        $rubric3 = $rubrics[2]->scriibi_Level_Id."/".$sc->getId();
                        $rubric4 = $rubrics[3]->scriibi_Level_Id."/".$sc->getId();
                        $rubric5 = $rubrics[4]->scriibi_Level_Id."/".$sc->getId();
                    ?>
                    <div class="card px-0 mx-0 mt-3 ml-1 mr-1 mb-1 border-0">
                        <div class="card-body p-0">
                            <!-- if the global criterias are not empty, display a css that makes it look like a button. Else, display the card like it is a disabled button -->
                            <div class="card-title score-items mb-0 @if($global[0] != "" || $global[1] != "" || $global[2] != "") {{"radioBTNs-section"}} @else {{"na-skill-container"}} @endif">
                                <div class="w-100 d-flex justify-content-between">
                                    <!-- load the first trait name -->
                                    <span class="align-self-center ml-3">{{$sc->getName()}}</span>
                                    <!-- if the global isnt empty then display the drop down button -->
                                    @if ($global[0] != "" || $global[1] != "" || $global[2] != "")
                                    <a class="btn btn-link align-self-center criteria-btn">
                                        <img src="/images/close-up-arrow.png" alt="closeBTN" class="collapsable-arrow">
                                    </a>
                                    @endif
                                </div>
                                <!-- display radio buttons if global arrays are not empty -->
                                @if (($global[0] != "") || ($global[1] != "") || ($global[2] != ""))
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0 ">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="m-0 p-0 marking-radio" type="radio" name="skill_{{$counter}}" value={{$rubrics[0]->scriibi_Level_Id . "/" . $sc->getId()}} @if(in_array($rubric1, $results)) {{"checked"}} @endif><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="marking-radio" type="radio" name="skill_{{$counter}}" value={{$rubrics[1]->scriibi_Level_Id . "/" . $sc->getId()}} @if(in_array($rubric2, $results)) {{"checked"}} @endif><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="marking-radio" type="radio" name="skill_{{$counter}}" value={{$rubrics[2]->scriibi_Level_Id . "/" . $sc->getId()}} @if(in_array($rubric3, $results)) {{"checked"}} @endif><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="marking-radio" type="radio" name="skill_{{$counter}}" value={{$rubrics[3]->scriibi_Level_Id . "/" . $sc->getId()}} @if(in_array($rubric4, $results)) {{"checked"}} @endif><span></span>
                                    </label>
                                </div>
                                <div class="w-100 text-center align-self-center">
                                    <label class="score-radio m-0 p-0">
                                        <!-- please load skill id in the name attribute -->
                                        <input class="marking-radio" type="radio" name="skill_{{$counter}}" value={{$rubrics[4]->scriibi_Level_Id . "/" . $sc->getId()}} @if(in_array($rubric5, $results)) {{"checked"}} @endif><span></span>
                                    </label>
                                </div>
                                @else
                                <div class="w-100 text-center align-self-center">
                                    <input type='radio' name="skill_{{$counter}}" value='na' hidden checked>
                                    <p class="na-skill-message">Not Applicable at student's level</p>
                                </div>
                                @endif
                            </div>
                            <!-- criteria details section-->
                            <div class="card-text score-items criteria-section">
                                <div class="">
                                </div>
                                <?php
                                
                                //the following segment retrieves the correct curriculum code and description, but the loop is incorrect.
                                //it is appearing three times on the front end.
                                $i = 0;
                                foreach($global as $key => $value){
                                        if($key != 2){
                                            ?>
                                            <div class="text-left">
                                                <p class="pt-2"><?php echo $value ?></p>
                                                <div class="d-flex">
                                                <?php
                                                    //check if isset, so we dont throw an "undefined index [0] exception
                                                    if(!empty($local[$i])){
                                                        //access nested array values
                                                        foreach($local[$i] as $l){
                                                        ?>
                                                            <div class="local-criteria mr-2">
                                                                <span class='local-curriculum'><u><?php echo $l[0]["curriculum_code"]; ?></u></span>
                                                                <span class='curriculum-tooltip'><?php echo $l[0]["description_elaboration"]; ?></span>
                                                            </div>
                                                        <?php
                                                        }
                                                    } 
                                                    $i++;        
                                                ?>  
                                                </div>
                                            </div>
                                        <div></div>  
                                <?php
                                        }else{
                                            ?>
                                                <div class="text-left">
                                                    <p class="pt-2"><?php echo $value ?></p>
                                                        <div class="d-flex">
                                                        <?php
                                                            //check if isset, so we dont throw an "undefined index [0] exception
                                                            if(!empty($local[2])){
                                                                foreach($local[2] as $l){
                                                                //access nested array values
                                                                ?>
                                                                    <div class="local-criteria mr-2">
                                                                        <span class='local-curriculum'><u><?php echo $l[0]["curriculum_code"]; ?></u></span>
                                                                        <span class='curriculum-tooltip'><?php echo $l[0]["description_elaboration"]; ?></span>
                                                                    </div>
                                                                <?php
                                                                }
                                                            }        
                                                        ?>  
                                                        </div>
                                                    </div>
                                            <?php
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

            <div class="mt-2 justify-content-end" id="assessment-status">
                <p class="student-table-label mb-0">Status:</p>
                <!-- value attribute: Status -->
                <p class="w-100 incomplete-style mb-0 @if($status != 'incomplete') {{'d-none'}} @endif">Incomplete</p>
                <p class="w-100 complete-style mb-0 @if($status != 'completed') {{'d-none'}} @endif">Completed</p>
                <input type="hidden" name="status" value="0" />
            </div>
            <div class="mt-2">
                <!-- value attribute: Full name -->
                <p class="student-table-label mb-0">Full Name:</p>
                <p class="w-100"><strong>{{"$firstName $lastName"}}</strong></p>
            </div>

            <div class="mt-2">
                <p class="student-table-label w-100 mb-0">Assessed Level:</p>
                <p>{{$assessed_level[0]->assessed_level_label}}</p>
                <p id="marking-level" class="d-none">{{$assessed_level_scriibi_id}}</p>
            </div>
            <div class="d-flex">
                <p class="student-table-label mb-0">Student Leveled Samples</p>
            </div>
            <div id="level-examples" class="d-flex">
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
                    <a target="_blank" class="d-block mb-1" href="https://writing.scriibi.com/wp-content/uploads/scaffoldsetc/Year%20Level%20Assessment%20Samples/Sample%20Level%207.pdf">Level 7</a>
                </div>
            </div>
            <div class="mt-2">
                <textarea class="text-area-style" placeholder="Comments..." name="comment" id="text-area-style">{{$comment}}</textarea>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <!-- hidden fileds for server side use -->
                <input type="text" name="skillCount" value = {{count($skillCards)}} hidden>
                <input type="text" name="studentId" value = {{$student_id}} hidden>
                <input type="text" name="writingTask" value = {{$writting_task_id}} hidden>
                <!-- Form submit button -->
                <input type="submit" class="save-marking-btn px-4" name="assessment-marking-submit" value="Save Marking" />
            </div>
        </div>
    </div>
</form> <!-- end of form -->
@endsection