@extends('layout.mainlayout')
@section('title', 'Asssessment setup')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <!-- main panel -->
    <div class="col-12 col-sm-10 col-md-8">
        <!-- create assessment title -->
        <p class=" mt-5" id="create-assessment-title">Fill in details for your assessment</p>
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
                            <label class="student-form-label ml-3" for="assessment_date">Writing task completion date</label>
                        </div>
                    </div>
                    <h5 class="assessment-settings-title mt-3">Fill in details for your assessement.</h5>
                    <div class="d-flex mt-3 mb-5">
                        <label for="assess-class" class="assessment-settings-btn checked">Assess <strong>my class</strong>
                            <input type="radio" id="assess-class" class="assess-input" name="assess" value="mine" checked required />
                            <span class="btn"></span>
                        </label>
                        <label for="assess-grade" class="assessment-settings-btn ml-4">Assess <strong>whole grade level</strong>
                            <input type="radio" id="assess-grade" class="assess-input" name="assess" value="all" required />
                            <span class="btn"></span>
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
            <!-- step 2:Rubric Template to select which rubric to use for assessment-->
            <div id="rubric-template" hidden>
                <input type="radio" name="rubric" value="" class="hidden-rubric-radio" hidden/>
                <div class="pt-1 pb-0" >
                    <div>
                        <h5><strong>Rubric Template Selection</strong></h5>
                    </div>
                    <div>
                        <div class="rubric-list-parent-cont">
                            <div class="row no-gutters rubric-list-options-row">
                                <div class="col-4 rubric-list-option" id="rubric-list-option-scriibi-rubrics">
                                    Scriibi Rubrics
                                </div>
                                <!-- <div class="col-3 rubric-list-option" id="rubric-list-option-shared-rubrics">
                                    Shared with Me             
                                </div> -->
                                <div class="col-4 rubric-list-option rubric-list-option-current-style" id="rubric-list-option-my-rubrics">
                                    My Saved Rubrics   
                                </div>
                                <a href="/rubrics" class="col-4 rubric-list-option" id="rubric-list-option-build-rubrics" style="text-decoration:none; color:#000000">
                                    Build a new Rubric
                                </a>
                            </div>                 
                        </div>
                        <div class="student-list-scroll" id="rubric-list-skills-section">
                            <div class="row" id="rubric-list-skill-cards">
                                @if (count($rubrics) > 0)
                                    @foreach($rubrics as $r)
                                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="card rubric-box btn-block rubric-list-card-single assessment-setup-rubric-select-radio-link" data-rubric-id={{$r->getId()}}>
                                        <div class="rubric-list-text-title text-left">
                                            {{$r->getName()}}
                                        </div>
                                        <div class="rubric-box-small rubric-list-skills text-left align-middle">
                                            <p class="rubric-skills-para">Skills</p>
                                            <ul style="list-style: none;padding-left:10px;">
                                            <!-- get each skill from the rubric and display it into the p tag -->
                                                <?php
                                                    $count = 0;
                                                    $skills_array = array();
                                                    $traits_skills = $r->getRubricTraitSkills();
                                                    foreach($traits_skills as $ts){
                                                        $skillObjects = $ts->getSkills();
                                                        foreach($skillObjects as $so){
                                                            $skills_array[$so->getName()] = $ts->getColor();
                                                        }
                                                    };
                                                    $skillsCount = count($skills_array);
                                                    foreach($skills_array as $k => $v){
                                                        if($count < 20){                                       
                                                ?>   
                                                            <li>
                                                                <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($v); ?>"></span>
                                                                <span>{{$k}}</span>
                                                            </li>
                                                <?php
                                                        $count++;
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="rubric-more-skills">
                                                <?php 
                                                    if($skillsCount > 20)
                                                    {
                                                        echo ($skillsCount-20)." more";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-5 mb-2">
                            <button type="button" name="button" class="btn back-btn" id="backBTN">back</button>

                            <!-- Has a test inside the input to see if a rubric has been made. Else, disable the submit button -->
                            <input type="submit" name="button" value="Create Assessment" class="btn assessment-btn border-0" id="createAxBTN">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
    </div>
</div>



@endsection
