@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

    <div class="col-10">
        <br><br>
    </div>
    @if($assessmentList !== null)
    <div>
        <div class="data-view-settings">
            <div class="row">
                <div class="col-4">
                    <h6 class="ml-2"><strong>Cohort</strong></h6>
                    @if($privilage === 'Leader')
                        <div>
                            <label for="data-view-range-school">
                                <span class="trait-view-school radio-circle {{$selection == 'school' ? 'fill-circle' : ''}}"></span>
                                <input id="data-view-range-school" type="radio" name="data-view-range-setting-school" value="school" style="display: none">&nbsp;School
                            </label>
                        </div>
                    @endif
                    <div>
                        <div>
                            <label for="data-view-range-grade">
                                <span class="trait-view-grade radio-circle {{ $selection == 'grade' ? 'fill-circle' : '' }}"></span>
                                <input id="data-view-range-grade" type="radio" name="data-view-range-setting" value="grade" style="display: none">&nbsp;Grade
                            </label>
                        </div>
                        <div>
                            <select class="data-view-dropdown" name="data-view-grade-select" {{ $selection == 'grade' ? '' : 'hidden' }}>
                                <option value="none" disabled="disabled" {{ $selection == 'grade' && isset($subselection) ? '' : 'selected' }}>Select one</option>
                                @foreach($grades as $grade)
                                    <option value="{{$grade['scriibi_level_id']}}" <?php if($selection == 'grade' && $subselection == $grade['scriibi_level_id']){echo 'selected';} ?>>{{$grade['label']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="data-view-range-class">
                                <span class="trait-view-class radio-circle {{ $selection == 'class' ? 'fill-circle' : '' }}"></span>
                                <input id="data-view-range-class" type="radio" name="data-view-range-setting" value="class" style="display: none">&nbsp;Class
                            </label>
                        </div>
                        <div>
                            <select class="data-view-dropdown" name="data-view-class-select" {{ $selection == 'class' ? '' : 'hidden' }}>
                                <option value="none" disabled="disabled" {{ $selection == 'class' && isset($subselection) ? '' : 'selected' }}>Select one</option>
                                @foreach($classes as $class)
                                    <option value="{{$class['id']}}" <?php if($selection == 'class' && $subselection == $class['id']){echo 'selected';} ?>>{{$class['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="justify-content-end">
                        <h6><strong>Analyse by</strong></h6>
                        <select class="filter-select" name="data-view-trait-filter-select" style="width: 200px">
                            <option value="" disabled="disabled" selected="selected">Select one</option>
                            <option value="assessed">Assessed Level</option>
                            <option value="grade">Grade Level</option>
                        </select>
                    </div>
                    <div>
                        <input type="hidden" name="current-view" value="{{$currentView}}" />
                        <a href="/growth-view" class="ml-auto"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 {{$currentView == 'growth' ? 'current-active-view' : 'assignment-action-button'}}" >Growth</button></a>
                        <a href="/trait-view" class="ml-auto"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 {{$currentView == 'trait' ? 'current-active-view' : 'assignment-action-button'}}" >Traits Skills</button></a>
                        <a href="/assessment-view" class="ml-auto"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 {{$currentView == 'assessment' ? 'current-active-view' : 'assignment-action-button'}}" >Assessment</button></a>
                    </div>
                </div>
            </div>
        </div>
            <div class="data-view-assessment-settings">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-7">
                                <h6>Assessment Name</h6>
                                <select id="assessment-data-view-assessment-select" class="filter-select" style="width: 150px">
                                    <?php
                                        $assessmentDetails = null;
                                        foreach($assessmentList as $assessment)
                                        {
                                                if($assessment['id'] == $currentAssessment)
                                                {
                                                    $assessmentDetails = $assessment;
                                                }
                                                $selected = $assessment['id'] == $currentAssessment ? "selected" : "";
                                                $id = $assessment['id'];
                                                $name = $assessment['name'];
                                                $string = '<option value="' . $id . '"' . $selected . '>' . $name . '</option>';
                                            echo $string;
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-5">
                                <h6>Date</h6>
                                <p>{{$assessmentDetails['assessed_date']}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="assessment-list-card px-0 mt-2 ml-2" style="max-width: 200px">
                                <?php
                                    $counter = 0;
                                    $set = [];
                                foreach($skills as $skill){
                                    $counter++;
                                    if(!array_key_exists($skill['traits'][0]['color'], $set)){
                                        $set[$skill['traits'][0]['color']] = true;
                                    }
                                }
                                ?>
                                <div class="assessment-list-skill-colors">
                                    <span class="text-left-skills-colors"> <?php echo $counter;?> Skills </span>
                                    <div class="aligh-dots-assessment-list">
                                        @foreach($set as $key => $value)
                                            <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-<?php echo htmlentities($key); ?>"></span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pl-5">
                        <a href="/single-assessment/{{$assessmentDetails['id']}}" class="d-block"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 assignment-action-button" >View Assessment</button></a>
                        <button type="button" name="button" class="btn mt-2 pt-1 pb-1 mr-0 d-block assignment-action-button assessment-goals-gen-btn" >Generate All Goal Sheets
                            <input type="submit" form="student-marks-form" target="_blank" value="Generate All Goal Sheets" class="goals-gen-submit-input" style="display: none">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="data-view-settings">
            <div class="row">
                <div class="col-4">
                    <h6 class="ml-2"><strong>Cohort</strong></h6>
                    @if($privilage === 'Leader')
                        <div>
                            <label for="data-view-range-school">
                                <span class="trait-view-school radio-circle {{$selection == 'school' ? 'fill-circle' : ''}}"></span>
                                <input id="data-view-range-school" type="radio" name="data-view-range-setting-school" value="school" style="display: none">&nbsp;School
                            </label>
                        </div>
                    @endif
                    <div>
                        <div>
                            <label for="data-view-range-grade">
                                <span class="trait-view-grade radio-circle {{ $selection == 'grade' ? 'fill-circle' : '' }}"></span>
                                <input id="data-view-range-grade" type="radio" name="data-view-range-setting" value="grade" style="display: none">&nbsp;Grade
                            </label>
                        </div>
                        <div>
                            <select class="data-view-dropdown" name="data-view-grade-select" {{ $selection == 'grade' ? '' : 'hidden' }}>
                                <option value="none" disabled="disabled" {{ $selection == 'grade' && isset($subselection) ? '' : 'selected' }}>Select one</option>
                                @foreach($grades as $grade)
                                    <option value="{{$grade['scriibi_level_id']}}" <?php if($selection == 'grade' && $subselection == $grade['scriibi_level_id']){echo 'selected';} ?>>{{$grade['label']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="data-view-range-class">
                                <span class="trait-view-class radio-circle {{ $selection == 'class' ? 'fill-circle' : '' }}"></span>
                                <input id="data-view-range-class" type="radio" name="data-view-range-setting" value="class" style="display: none">&nbsp;Class
                            </label>
                        </div>
                        <div>
                            <select class="data-view-dropdown" name="data-view-class-select" {{ $selection == 'class' ? '' : 'hidden' }}>
                                <option value="none" disabled="disabled" {{ $selection == 'class' && isset($subselection) ? '' : 'selected' }}>Select one</option>
                                @foreach($classes as $class)
                                    <option value="{{$class['id']}}" <?php if($selection == 'class' && $subselection == $class['id']){echo 'selected';} ?>>{{$class['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="justify-content-end">
                        <h6><strong>Analyse by</strong></h6>
                        <select class="filter-select" name="data-view-trait-filter-select" style="width: 200px">
                            <option value="" disabled="disabled" selected="selected">Select one</option>
                            <option value="assessed">Assessed Level</option>
                            <option value="grade">Grade Level</option>
                        </select>
                    </div>
                    <div>
                        <input type="hidden" name="current-view" value="{{$currentView}}" />
                        <a href="/growth-view" class="ml-auto"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 {{$currentView == 'growth' ? 'current-active-view' : 'assignment-action-button'}}" >Growth</button></a>
                        <a href="/trait-view" class="ml-auto"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 {{$currentView == 'trait' ? 'current-active-view' : 'assignment-action-button'}}" >Traits Skills</button></a>
                        <a href="/assessment-view" class="ml-auto"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 {{$currentView == 'assessment' ? 'current-active-view' : 'assignment-action-button'}}" >Assessment</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- the container for the table holding student data -->
    @if($dataset !== null)
        <form method="get" action="/goal-sheets" id="student-marks-form" target="_blank">
        @csrf
            <table id="overall-assessment-table" class="table row-border order-column cell-border hover nowrap" style="width: 100%; border-bottom: 1px solid #D2D2D2">
                <!-- Table headers -->
                <thead class="header-style">
                <tr class="header-style text-center">
                    <th  id="fullName" class="text-wrap align-middle" style="width:200px">Full Name</th>
                    <th id="class" class="text-wrap align-middle">Class</th>
                    <th id="grade" class="text-wrap align-middle" style="width: 50px; padding: 25px !important">Grade Level</th>
                    <th id="assessed" class="text-wrap align-middle" style="width: 50px; padding: 20px !important">Assessed Level</th>
                    <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
                    <?php $count = 1;?>
                    @foreach($skills as $skill)
                        <th id="skill{{$count}}" class="assessment-skills text-center skill-column text-wrap align-middle" style="width:100px">{{$skill['name']}}</th>
                        <?php $count++;?>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                <!-- Student data goes down here -->
                @foreach($dataset as $key => $value)
                    <tr class="student-row" data-grade="{{$scriibiLevels[$value['gradeLevel']]}}" data-assessed="{{$scriibiLevels[$value['assessedLevel']]}}" >
                        <td headers="fullName" class="fname" style="width:200px">
                            <button class="testSheet float-right" value="{{$value['name']}}"></button>
                            <?php ((strlen(substr($value['name'], 0, 20))) < (strlen($value['name']))) ? $name = substr($value['name'], 0, 20) . '...' : $name = $value['name']; echo($name) ?>
                        </td>
                        <td class="justify-content-center student-grade-level" headers="class" style="width:100px">{{$value['class']}}</td>
                        <td class="justify-content-center student-grade-level" headers="grade" style="width:100px" >{{$scriibiLevels[$value['gradeLevel']]}}</td>
                        <td class="student-assessed-level" headers="assessed" style="width:100px">{{$scriibiLevels[$value['assessedLevel']]}}</td>
                        <?php $count = 1;?>
                        @foreach($value['skills'] as $k => $v)
                            <td class="student-skill-result trait-skill-result text-center skill-column" headers="skill{{$count}}" data-skillId="{{$k}}" data-mark="{{array_key_exists($v, $scriibiLevels) ? $scriibiLevels[$v] : ' '}}" style="width:100px;">{{ array_key_exists($v, $scriibiLevels) ? $scriibiLevels[$v] : ''}}
                                @if(strval($v) != "")
                                    <input class="student-goal-sheet-info" type="checkbox" value= '{{$k . "?" . $scriibiLevels[$v] . "?" . $value['name'] }}' name="checkbox[]" hidden>
                                @endif
                            </td>
                            <?php $count++;?>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
            <input type="text" class="hiddenArea" name="individual-student" hidden/>
        </form>
    @else
        <div class="no-assessments-notice">There Are No Assessments Available</div>
    @endif
    <style>
        .data-view-settings{
            display: inline-block;
            min-width: 300px;
            max-width: 380px;
            margin-bottom: 10px;
            background: #FFFFFF;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25);
            border-radius: 7px;
            border: none;
            padding: 15px;
            position: relative;
            border: 2px solid white;
        }

        .data-view-assessment-settings{
            display: inline-block;
            margin-left: 50px;
            max-width: 700px;
            min-width: 450px;
            background: #FFFFFF;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25);
            border-radius: 7px;
            border: none;
            padding: 15px;
            position: relative;
            border: 2px solid white;
        }

        .paginate_button{
            padding: 0 !important;
        }

        .page-link{
            color: #33A849 !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            border: none !important;
            background-color: transparent !important;
            width: fit-content;
            height: fit-content;
            padding: 0 !important;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2980B9), color-stop(100%, #2980B9))!important;
            background: -webkit-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
            background: -moz-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
            background: -ms-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
            background: -o-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
            background: linear-gradient(to bottom, #2980B9 0%, #2980B9 100%)!important;
        }

        table{
            margin: 0 auto;
            width: 100%;
            clear: both;
            border-collapse: collapse;
            table-layout: fixed;
            word-wrap:break-word;
        }

        .skill-column{
            max-width: 150px;
        }

        .filter-select{
            border: 1px solid #c0c0c0;
            border-radius: 7px;
            height: 25px;
        }

        .data-view-dropdown{
            border: 1px solid #33A849;
            border-radius: 7px;
            height: 25px;
            margin-left: 10px;
            min-width: 80px;
        }

        .active > a{
            background-color: #FFFFFF !important;
        }

        .active{
            border: #33a849;
            border-radius: 4px !important;
        }

        .no-assessments-notice{
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
            font-weight: bold;
            color: #4e555b;
        }
    </style>

@endsection

<div class="modal fade bd-example-modal-lg no-strategies-warning" id="no-strategies-warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="rubric-edit-warning-image-content">
                                <img src="/images/info.png" alt="more information" class="info-image">
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div>
                                <p>There are no strategies for this skill because:</p>
                                <p>1.  The <strong>minimum</strong> requirement for this skill is at a higher level, <strong>or</strong></p>
                                <p>2.  The <strong>maximum</strong> level of accomplishment for this skill has been achieved.</p>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <button class="assessment-delete-button delete-button-green" data-dismiss="modal" style="text-align:center;margin:0">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
