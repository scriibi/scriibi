@extends('layout.mainlayout')
@section('title', 'Asssessment setup')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-1">
   </div>
   <!-- main panel -->
    <div class="col-10">
        <form class="mt-5" action="/assessment-submit" method="post" id="assessment-setup-form">
        @csrf
            <!-- create assessment title -->
            <div class="d-flex justify-content-between mt-2 mb-1">
                <p class='mt-5' id='create-assessment-title'>Fill in details for your assessment</p>
                <div class="assessment-setup-assessment-details-page-nav-btns">
                    <input type='submit' name='button' value='Create Assessment' class='btn assessment-btn border-0 mt-5' id='createAxBTN' style="height: 40px;">
                </div>
                <div class="assessment-setup-rubric-details-page-nav-btns" hidden>
                    <button type='button' name='button' class='btn back-btn mt-5' id='backBTN' style="height: 40px; margin-right: 10px">back</button>
                    <button type='button' name='button' class='btn assessment-btn mt-5' id='addRubricToAssessment' style="height: 40px; margin-right: 10px" disabled>Add Skills To Assessment</button>
                </div>
            </div>
            <!-- accordion for assessment setup -->
            <!-- step 1: assessment detail -->
            <div class="card card-assessment-style" id="assessment-template">
                <div class="card-body row no-gutters">
                    <div class="col-9 p-1">
                        <div class="m-2 p-2">
                            <h5 class="assessment-settings-title mt-3">Assessment Name</h5>
                            <input type="text" class="new-text-input" id="assessment_name" name="assessment_name" required />
                        </div>
                        <div class="d-flex flex-wrap justify-content-between ml-2 mr-2 mb-4 mt-4">
                            <div class="p-2" style="width: 25%">
                                <h5 class="assessment-settings-title">Task Date</h5>
                                <p>Select a date when you expect the writing task to be completed. Note: this date can be changed later</p>
                                <input type="date" class="text-input" id="assessment_date" name="assessment_date" required/>
                            </div>
                            <div class="p-2" style="width: 70%">
                                <h5 class="assessment-settings-title">Who do you want to assess?</h5>
                                <p>Note: You will still be able to add and remove individual students after the assessment is created</p>
                                <div class="d-flex flex-wrap m-3">
                                    <div class="mr-3 mb-2">
                                        <div>
                                            <label for="assess-class" class="assessment-settings-btn checked">Assess <strong>my class</strong>
                                                <input type="radio" id="assess-class" class="assess-input" name="assess" value="my-class" checked required />
                                                <span class="btn"></span>
                                            </label>
                                        </div>
                                        <select name="my-class" class="assessment-builder-class-select my-class-select">
                                            @foreach($userClasses as $class)
                                                <option value="{{$class['id']}}">{{$class['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mr-3">
                                        <div>
                                            <label for="assess-grade" class="assessment-settings-btn">Assess <strong>another class</strong>
                                                <input type="radio" id="assess-grade" class="assess-input" name="assess" value="other-class" required />
                                                <span class="btn"></span>
                                            </label>
                                        </div>
                                        <select name="other-class" class="assessment-builder-class-select other-class-select" disabled="true">
                                            @foreach($otherClasses as $class)
                                                <option value="{{$class['id']}}">{{$class['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-2 pl-2 pr-2">
                            <h5 class="assessment-settings-title mt-3">Additional notes about this assessment</h5>
                            <textarea id="assessment_description" name="assessment_description" placeholder="e.g. Jason was absent, Over the holiday assessment, etc." class="assessment-description mt-1"></textarea>
                        </div>
                    </div>
                    <div class="col-3 d-flex flex-column flex-wrap">
                        <h5 class="assessment-settings-title mt-3" style="width: fit-content; margin: auto">Skills</h5>
                        <div class="assessment-settings-selected-rubric">
                            <p style="position: relative; top: 35%; bottom: -65%; height: fit-content; text-align: center; color: #ff0000" class="text-wrap">There are currently no skills selected for this assessment</p>
                        </div>
                        <button id="rubricSelectionBTN" type="button" name="button" class="btn btn-link assessment-btn assessment-settings-rubric-select-btn border-0">Rubric Selection</button>
                    </div>

                </div>
            </div>

            <!-- step 2:Rubric Template to select which rubric to use for assessment-->
            <div id="rubric-template" hidden>
                <input type="radio" name="rubric" value="" class="hidden-rubric-radio" hidden/>
                <div class="pt-1 pb-0">
                    <div>
                        <div class="rubric-list-parent-cont" style="margin: 5% auto">
                            <div class="row no-gutters rubric-list-options-row">
                                <div class="col-6 rubric-list-option" id="rubric-list-option-scriibi-rubrics">
                                    Scriibi Rubrics
                                </div>
                                <!-- <div class="col-3 rubric-list-option" id="rubric-list-option-shared-rubrics">
                                    Shared with Me
                                </div> -->
                                <div class="col-6 rubric-list-option rubric-list-option-current-style" id="rubric-list-option-my-rubrics">
                                    My Saved Rubrics
                                </div>
                                <!-- <a href="/rubrics" class="col-4 rubric-list-option" id="rubric-list-option-build-rubrics" style="text-decoration:none; color:#000000">
                                    Build a new Rubric
                                </a> -->
                            </div>
                        </div>
                        <div class="student-list-scroll" id="rubric-list-skills-section">
                            <div class="row" id="rubric-list-skill-cards">
                                @if (count($rubrics) > 0)
                                    @foreach($rubrics as $key => $value)
                                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="card rubric-box btn-block rubric-list-card-single assessment-setup-rubric-select-radio-link" data-rubric-id={{$key}}>
                                        <div class="rubric-list-text-title text-left">
                                            {{$value['name']}}
                                        </div>
                                        <div class="rubric-box-small rubric-list-skills text-left align-middle">
                                            <p class="rubric-skills-para">Skills</p>
                                            <ul style="list-style: none;padding-left:10px;">
                                            <!-- get each skill from the rubric and display it into the p tag -->
                                                <?php
                                                    $count = 0;
                                                    $skills_array = array();
                                                    $traits_skills = $value['traits'];
                                                    foreach($traits_skills as $ts){
                                                        $skillObjects = $ts['skills'];
                                                        foreach($skillObjects as $so){
                                                            if($count < 20){
                                                ?>
                                                            <li>
                                                                <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($ts['color']); ?>"></span>
                                                                <span>{{$so['name']}}</span>
                                                            </li>
                                                <?php
                                                            }
                                                            $count++;
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="rubric-more-skills">
                                                <?php
                                                    if($count > 20)
                                                    {
                                                        echo ($count-20)." more";
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
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="d-none d-sm-block col-1">
    </div>
</div>

<div class="date-not-in-period-flash flash-warning-message" hidden="hidden">
    <strong>The date is not within a valid teaching period</strong>
</div>
<div class="assessment-build-form-incomplete-flash flash-warning-message" hidden="hidden"></div>
@endsection
