@extends('layout.mainlayout')
@section('title', 'Assessment-Student List')
@section('content')
    <div class="row">
        <div class="d-none d-sm-block col-sm-1 col-md-2">
        </div>
        <div class="col-12 col-sm-10 col-md-8">
            <!-- Assessment Title and edit/delete img-->
            <div class="mt-5">
                <button type="button" name="button" class="btn save-exit-btn col-2"  onclick="location.href='{{ url('/assessment-list') }}'">Save and Exit</button>
            </div>
            <div class="row no-gutters assessment-details-card justify-content-start">
                <div class="col-8">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <span class="writing-task-id" data-writing-task-id="{{$writingTask[0]['id']}}" hidden="hidden"></span>
                            <h5 class="Assessment-Studentlist-title">{{$writingTask[0]['name']}}</h5>
                            <h5 class="Assessment-details-date"><strong><?php echo (date("d-m-Y", strtotime($writingTask[0]['assessed_date']))); ?></strong></h5>
                            <div class="row no-gutters mt-4 d-inline-block">
                                <div class="col-sm-auto assessment-studentlist-rubric mt-2">
                                    <?php $counter = 0;?>
                                    @foreach($rubric['traits'] as $key => $value)
                                        @foreach($value['skills'] as $s)
                                            <?php $counter++;?>
                                        @endforeach
                                    @endforeach
                                    <div class="single-assessment-rubric-tab pt-1 pl-2">
                                        <span class="aligh-dots-assessment-list-assessment-page">
                                            <span class="text-left-skills-colors-assessment-page">
                                                <?php echo $counter; $count = 0; ?> Skills
                                            </span>
                                            @foreach($rubric['traits'] as $key => $value)
                                                @if(!empty($value['skills']))
                                                    <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-<?php echo htmlentities($value['color']); ?>"></span>
                                                @else
                                                    <?php $count++; ?>
                                                @endif
                                            @endforeach
                                            <?php
                                            while($count > 0){
                                            ?>
                                                    <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-white"></span>
                                            <?php
                                            $count--;
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <span class="rubric-tooltip">
                                        <div class="rubric-tooltip-skills">
                                            <h6 style="padding: 5px 0 0 5px">Skills</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="rubric-box-small rubric-list-skills text-left align-middle">
                                                        <ul style="list-style: none;padding-left:10px;">
                                                        <!-- get each skill from the rubric and display it into the p tag -->
                                                            <?php
                                                            $targetSkill;
                                                            $count = 0;
                                                            foreach($rubric['traits'] as $key => $value){
                                                            foreach($value['skills'] as $s){
                                                            if($count < 10){
                                                            $targetSkill = $s['id'];
                                                            ?>
                                                                <li>
                                                                    <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($value['color']); ?>"></span>
                                                                    <span>{{$s['name']}}</span>
                                                                </li>
                                                            <?php
                                                            $count++;
                                                            }
                                                            }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="rubric-box-small rubric-list-skills text-left align-middle">
                                                        <ul style="list-style: none;padding-left:10px;">
                                                            <?php
                                                            $targetReached = false;
                                                            $totalSkillCount = 0;
                                                            $count = 0;
                                                            foreach($rubric['traits'] as $key => $value){
                                                            foreach($value['skills'] as $s){
                                                            if($count < 9){
                                                            if($targetReached){
                                                            ?>
                                                                <li>
                                                                    <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($value['color']); ?>"></span>
                                                                    <span>{{$s['name']}}</span>
                                                                </li>
                                                            <?php
                                                            $count++;
                                                            }
                                                            if($s['id'] === $targetSkill){
                                                                $targetReached = true;
                                                            }
                                                            }
                                                            $totalSkillCount++;
                                                            }
                                                            }
                                                            ?>
                                                            <li>{{$totalSkillCount > 19 ? $totalSkillCount - 19 . " more" : ""}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <span><a href="/rubric-edit?rubric={{$rubric['id']}}&level=NA&task={{$writingTask[0]['id']}}"><img src="/images/edit.png" class="home-etc-icons"></a></span>
                        </div>
                        <div class="col-6">
                            <div class="mt-xl-4 mt-sm-4 mt-md-4 mt-lg-4">
                                <span><strong>Additional Notes:</strong></span><br>
                                <p class="Assessment-details-description">{{$writingTask[0]['description']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <div class="d-flex flex-column">
                            <a href="/assessment-edit?task={{$writingTask[0]['id']}}" class="ml-auto"><button type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" >Edit Assessment</button></a>
                            <a class="ml-auto"><button type="button" name="button" class="complete-assessment-confirm-btn btn assignment-action-button mt-2 pt-1 pb-1">Complete Assessment</button></a>
{{--                            <a class="ml-auto"><button type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1">Data and Goal Sheets</button></a>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- show list of students whether is 'my student' or 'all students' -->
            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="Assessment-Studentlist-title">Grade Your Students</h5>
                </div>
                <div class="col-12 d-flex">
                    <div class="mr-auto">
                        <p>Click on each student to grade them</p>
                    </div>
                    <div>
                        <button type="button" name="button" class="btn assessment-add-students-btn assignment-action-button mt-2 pt-1 pb-1 ml-auto mr-2" data-task-id="{{$writingTask[0]['id']}}">+ Add Student</button>
                    </div>
                    <div>
                        <button type="button" name="button" class="btn asmnt-rmv-stu-btn assignment-action-button-delete mt-2 pt-1 pb-1 ml-auto" disabled="disabled">- Remove Student</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="header-cells rubric-table-header mt-5 px-0 pt-0 pb-0 row no-gutters">
                        <p class="col-3 text-left px-0">Full Name</p>
                        <p class="col-2 text-left px-0">Status</p>
                        <p class="col-2 text-left px-0">ID</p>
                        <p class="col-2 text-left px-0">Grade</p>
                        <p class="col-2 text-left px-0">Assessed Level</p>
                        <p class="col-1 text-left px-0"></p>
                    </div>
                </div>
                <div class="col-12 assessment-student-list">
                    @foreach($students as $s)
                        <a href="/assessment-marking?student={{$s['id']}}&task={{$writingTask[0]['id']}}" class="row btn-block Assessment-Student-list-cell d-flex justify-content-start px-0" role="button" data-student-card-id="{{$s['id']}}">
                            <p class="col-3 rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0">{{$s['first_name']}} {{$s['last_name']}}</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0 @if($s['pivot']['status_flag'] == "complete") {{"complete-style"}} @else {{"incomplete-style"}} @endif">{{$s['pivot']['status_flag']}}</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0">{{$s['school_mgt_sys_id']}}</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0">{{$gradeLabels[$s['grade_level_id']]}}</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0">{{$assessedLabels[$s['assessed_level_id']]}}</p>
                            <input type="checkbox" name="assessment-delete-students[]" value="{{$s['id']}}" class="col-1 assessment-delete-student-checkbox align-self-center text-left pl-3">
                        </a>
                    @endforeach
                </div>
                <!-- populate more cells as per rubric -->
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-1 col-md-2">
        </div>
    </div>
@endsection

<a class="row btn-block Assessment-Student-list-cell student-list-cell-template d-flex justify-content-start px-0" role="button" hidden="hidden">
    <p class="col-3 student-list-name rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0"></p>
    <p class="col-2 student-list-status rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0"></p>
    <p class="col-2 student-list-scl-mgmt-id rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0"></p>
    <p class="col-2 student-list-grade rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0"></p>
    <p class="col-2 student-list-assessed rubric-list-text text-truncate align-self-center text-left mt-2 pl-3 mb-0"></p>
    <input type="checkbox" name="assessment-delete-students[]" class="col-1 assessment-delete-student-checkbox align-self-center text-left pl-3">
</a>

<div class="modal" id="add-students-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Add Students</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="add-students-modal-selected p-1"></div>
                <div class="add-students-modal-list">
                    <div class="add-students-row" hidden="hidden">
                        <input type="checkbox" class="add-students-check" name="add-students-check[]" value="">
                        <label></label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" class="btn btn add-students-confirm-btn save-exit-btn mt-2 pt-1 pb-1 mr-2">Done</button>
                <button style="width: fit-content" type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="delete-students-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-justify"><strong>Discard Results?</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Removing these students from the assessment will delete any results, student work and comments that you have already recorded for them.</p>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" class="btn asmnt-rmv-stu-confmr-btn btn-danger mt-2 pt-1 pb-1 mr-2">Yes, discard results</button>
                <button style="width: fit-content" type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" data-dismiss="modal">No, go back</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="cannot-delete-all-students-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-justify"><strong>Attention!</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please note that you cannot remove all students from the assessment. Minimum of <strong>ONE</strong> student must remain.</p>
            </div>
            <div class="modal-footer">
                <button style="width: fit-content" type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="cannot-complete-assessment-yet" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-justify"><strong>Attention!</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="width: fit-content; margin: auto !important;">
                    This feature is Not Active.
                </div>
            </div>
            <div class="modal-footer">
                <button style="width: fit-content" type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
