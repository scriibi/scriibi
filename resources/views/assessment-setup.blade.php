@extends('layout.mainlayout')
@section('title', 'Asssessment setup')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <!-- main panel -->
    <div class="col-12 col-sm-10 col-md-8">
        <!-- create assessment title -->
        <p class=" mt-5" id="create-assessment-title">Creating Assessment</p>
        <!-- accordion for assessment setup -->
        <!-- step 1: assessment detail -->
    <form class="mt-5" action="/assessment-submit" method="post">
        @csrf
        <div class="card card-assessment-style" id="assessment-template">
            <div class="card-body">
                <div class="card-title mb-5 mt-3">
                    <h5><strong>Assessment Details</strong></h5>
                </div>                            
                <div class="card-text mb-5 mt-4 row">    
                    <div class="col-sm-8">
                        <input type="text" class="text-input" id="assessment_name" name="assessment_name" required />
                        <span class="bar"></span>
                        <label class="student-form-label ml-3" for="assessment_name">Title</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="text-input" id="assessment_date" name="assessment_date" required/>
                        <span class="bar"></span>
                        <label class="student-form-label ml-3" for="assessment_date">Date</label>
                    </div>
                </div>
                <h5 class="assessment-settings-title mt-3">Assessment Settings</h5>
                <div class="d-flex mt-3 mb-5">
                    <label class="assessment-settings-btn">
                        <input type="radio" name="assess" value="mine" checked required />
                        <span class="btn">Assess <strong>my class</strong></span>
                    </label>
                    <label class="assessment-settings-btn ml-4">
                        <input type="radio" name="assess" value="all" required />
                        <span class="btn">Assess <strong>whole grade level</strong></span>
                    </label>
                </div>
                <div class="mt-3">
                    <label for="assessment_description" class="col-sm-12 m-0 p-0">Additional Notes</label>
                    <textarea id="assessment_description" name="assessment_description" placeholder="e.g. Jason was absent, Over the holiday assessment, etc." class="assessment-description mt-1"></textarea>
                </div>    
                <div class="d-flex justify-content-end mt-4 mb-2">
                    <button id="rubricSelectionBTN" type="button" name="button" class="btn btn-link assessment-btn border-0">Rubric Selection</button>
                </div>
            </div>
        </div>
        <!-- step 2:Rubric Template -->
        <div id="rubric-template" hidden>
            <div class="pt-1 pb-0 " >
                <div>
                    <h5><strong>Rubric Selection</strong></h5>
                </div>
                <div>    
                    <!-- populate more cells as per rubric -->
                    @if(count($rubrics) > 0)
                    <div class="header-cells row rubric-table-header d-flex justify-content-between mt-5 pl-3">
                        <p class="col-4 text-left px-0">Rubric Title</p>
                        <p class="col-8 text-left px-0">Skills</p>
                    </div>
                        @foreach($rubrics as $r)
                            <div class="body-cells row mt-2 mx-0 ">
                                <label class="rubric-settings-btn row">
                                    <input type="radio" name="rubric" value={{$r->getId()}}>
                                    <span class="btn col-4">{{$r->getName()}}</span>
                                    <span class="btn col-8">
                                    <?php 
                                        $skills_array = array();
                                        $traits_skills = $r->getRubricTraitSkills();
                                        foreach($traits_skills as $ts){
                                            $skillObjects = $ts->getSkills();
                                            foreach($skillObjects as $so){
                                                array_push($skills_array, $so->getName());    
                                            }
                                        };
                                    ?>

                                    <?php
                                        $final_skill = end($skills_array);
                                        foreach($skills_array as $sa)
                                        if($sa != $final_skill)
                                            echo($sa . ", ");
                                        else
                                            echo($sa);
                                    ?>
                                    </span>
                                </label>
                            </div>
                        @endforeach
                    <div class="d-flex justify-content-between mt-5 mb-2">
                        <button type="button" name="button" class="btn back-btn" id="backBTN">back</button>

                        <!-- Has a test inside the input to see if a rubric has been made. Else, disable the submit button -->
                        <input type="submit" name="button" value="Create Assessment" class="btn assessment-btn border-0" id="createAxBTN">
                    </div>
                    @else
                    <div class="mt-5 rubric-instruction">
                        <p>You currently do not have any rubric templates.</p>
                        <p>Click the <a href="/rubrics" class="btn assessment-btn px-4">New Rubric+</a> to create your first rubric</p>
                        <p>and using them for your assessments!</p>
                    </div>
                    <button type="button" name="button" class="btn back-btn-disabled" id="backBTN">back</button>
                    @endif    
                </div>
            </div>
        </div>
    </form>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection
