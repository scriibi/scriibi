@extends('layout.mainlayout')
@section('title', 'Rubric-List')
@section('content')
    <div class="d-flex flex-row-reverse" style="margin: 120px auto 20px auto; width: 80%;">
        <a href="/rubrics" class="assessment-btn p-2"><strong>Build a new Rubric +</strong></a>
    </div>
    <div class="rubric-list-parent-cont">
        <div class="row no-gutters rubric-list-options-row">
            <div class="col-4 rubric-list-option" id="rubric-list-option-scriibi-rubrics">
                Scriibi Rubrics
            </div>
            <div class="col-4 rubric-list-option rubric-list-option-current-style" id="rubric-list-option-my-rubrics">
                My Saved Rubrics
            </div>
            <div class="col-4 rubric-list-option" id="rubric-list-option-shared-rubrics">
                Shared with Me
            </div>
        </div>

    </div>

    <!-- section for my rubrics to be done through js-->
    <?php $response = json_decode($rubrics) ?>
    <div class="row @if(empty($response)){{"temporary-page-height-fix"}}@endif pb-5 pl-3 pr-4 pt-3" id="rubric-list-rubrics-view">
        <div class="d-none d-sm-block col-sm-1 col-md-1"></div>
        <div class="col-10 col-sm-10 col-md-10" id="rubric-list-skills-section">
        {{--      grade selector for the scriibi rubrics view      --}}
            <div class="col-4 mb-4 pl-0" id="scriibi_rubrics_select" hidden>
                <label>Show Scriibi Rubrics for:</label>
                <br>
                <select name="assessed_level" id="select_curriculum_code_for_scriibi_rubrics" class="select-input"></select>
                <span class="bar"></span>
            </div>
        {{--    rubric cards section    --}}
            <div class="row student-list-scroll" id="rubric-list-skill-cards">
                @if(!empty($response))
                    @foreach($response as $key => $value)
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="card rubric-box btn-block rubric-list-card-single">
                                <div class="rubric-list-text-title text-left">
                                    {{$value->name}}
                                </div>
                                <div class="rubric-box-small rubric-list-skills text-left align-middle">
                                    <p class="rubric-skills-para">Skills</p>
                                    <ul style="list-style: none;padding-left:10px;">
                                    <!-- get each skill from the rubric and display it into the p tag -->
                                        <?php
                                            $count = 0;
                                            $skillsCount = 0;
                                            foreach($value->traits as $tKey => $tValue){
                                                $skills = $tValue->skills;
                                                foreach($skills as $s){
                                                    if($count < 15){
                                        ?>
                                                        <li>
                                                            <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($tValue->color); ?>"></span>
                                                            <span>{{$s->name}}</span>
                                                        </li>
                                        <?php
                                                    $count++;
                                                    }
                                                    $skillsCount++;
                                                }
                                            }
                                        ?>
                                    </ul>
                                    <div class="rubric-more-skills">
                                        <?php
                                        if($skillsCount > 15)
                                        {
                                            echo ($skillsCount-15)." more";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="rubric-card-controls">
                                    <button class="rubric-card-control-icons teacher-template-delete" data-delete-rubric-id="{{$key}}">
                                        <img class="interaction-icon" src="images/delete.png" alt="Delete Rubric Icon" />
                                    </button>
                                    <button class="rubric-card-control-icons teacher-template-edit" data-edit-rubric-id="{{$key}}">
                                        <img class="interaction-icon" src="images/pencil.png" alt="Edit Rubric Icon" />
                                    </button>
                                    <button class="rubric-card-control-icons teacher-template-share" data-share-rubric-id="{{$key}}">
                                        <img class="interaction-icon-medium" src="images/share_icon_with_text.png" alt="Share Rubric Icon" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-1 col-md-1"></div>
    </div>

@endsection
@include('layout.partials.rubric-card')
<div class="modal fade bd-example-modal-lg multiple-assessments-warning" id="delete-rubric-warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="rubric-edit-warning-image-content">
                            <img src="/images/warning.png" class="rounded mx-auto d-block" alt="" style="width:50%">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <h3 style="margin-top: 25px"><strong>You are deleting a rubric template</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <p>If this rubric is shared, other users will loose access to this rubric after you delete it</p>
                        <p style="color: #33a849">
                            Don’t worry, assessments will not be affected.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-11" style="text-align: center">
                        <form method="post" action="/rubricDelete">
                            @csrf
                            <input type="hidden" name="rubricId" value="" id="rubric-delete-warning-modal-form"/>
                            <button class="assessment-delete-button delete-button-red"  data-dismiss="modal">cancel</button>
                            <button class="assessment-delete-button delete-button-green" type='submit'>yes, move to trash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="share-rubric-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Share With...</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="share-type" />
                <input type="hidden" name="rubric-share-id" />
                <div class="share-rubric-option-btns">
                    <button id="rubric-share-specific" type="button" name="button" class="btn save-exit-btn mt-2 pt-1 pb-1 mr-2">Specific People</button>
                    <button id="rubric-share-team" type="button" name="button" class="btn save-exit-btn mt-2 pt-1 pb-1 mr-2">Team</button>
                </div>
                <div class="rubric-share-modal-selected p-1"></div>
                <div class="rubric-share-modal-list">
                    <div class="rubric-sharee-row" hidden="hidden">
                        <input type="checkbox" class="rubric-share-check" name="rubric-share-check[]" value="">
                        <label></label>
                    </div>
                </div>
                <div style="margin-top: 5px">
                    <span id="deselct-all-rubric-sharees" style="color: #33A849; cursor: pointer; font-weight: bold;">Deselect all</span>
                    <span> - Dont worry, any assessments that have used this rubric will not be affected.</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="button" class="btn btn rubric-share-confirm-btn save-exit-btn mt-2 pt-1 pb-1 mr-2">Share</button>
                <button style="width: fit-content" type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="copy-rubric-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Copy Template</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="rubric-copy-id" />
                <p>The following Rubric Template will be added to your  My saved Rubrics folder You can rename this now if you like.</p>
                <input type="text" name="copy-rubric-custom-name" style="width: 100%" />
            </div>
            <div class="modal-footer">
                <button type="button" name="button" class="btn btn rubric-copy-confirm-btn save-exit-btn mt-2 pt-1 pb-1 mr-2">Copy</button>
                <button style="width: fit-content" type="button" name="button" class="btn assignment-action-button mt-2 pt-1 pb-1" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
