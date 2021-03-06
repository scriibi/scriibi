@extends('layout.mainlayout')
@section('title', 'Rubric Edit')
@section('content')

    <div class="row">
        <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
        <div class="col-12 col-sm-10 col-md-8"><br>
            <form action="{{$currentAssessment != null ? '/assessment-rubric-edit-confirm' : '/rubric-edit-confirm'}}"
                  method="POST" class="mt-5 mb-0 p-0" id="rubricform">
            @csrf
            <!-- Assessment Title and edit/delete img-->
                <div class="row mt-5 ">
                    <div class="col-10">
                        <h1 class="Assessment-Studentlist-title">Edit Rubric Name :</h1>
                        <p><input class="form-control" type="text" name="rubric_name" value="{{$rubric['name']}}"></p>
                        <input type="text" name="rubric_id" value="{{$rubric['id']}}" hidden>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-10">
                        <h1 class="Assessment-Studentlist-title">Edit Skills</h1>
                        <div class="card universal-card-rubric p-0  row">
                            <div class="card-body">
                                <!-- term-title+Curriculum -->
                                <div class="card-text m-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <h1 class="Assessment-Studentlist-title">Rubric</h1><br><br>
                                            <label>Show skills and curriculum milestones for:</label><br/>
                                            <select class="select-input" name="assessed_level"
                                                    id="select_curriculum_code_in_rubric_edit"
                                                    data-rubric-id={{$rubric['id']}} data-task-id={{$currentAssessment != null ? $currentAssessment[0]['id'] : 'NA'}}>
                                                <!-- <option value="" disabled selected hidden>Select your option</option> -->
                                                @foreach($assessedLabels as $al)
                                                    <option
                                                        value={{$al['scriibi_level_id']}} <?php if (isset($level) && $level == $al['scriibi_level_id']) {
                                                        echo "selected";
                                                    } ?>>{{$al['label']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="bar"></span>
                                        </div>
                                        <div class="col-8 justify-content-between float-right" style="text-align:right">
                                            <img class="skill-flag-icon" src="/images/flag.png"/>
                                            <span>= This skill is a curriculum milestone for the selected level</span>
                                            <div></div>
                                        </div>

                                        <!-- skills cards deck-->
                                        <div class="card-columns p-0 mt-3" id="check-array1">
                                            @foreach($traitObjects as $to)
                                                <div
                                                    class="card border-0 p-0 mt-2 skillset-box skillset-box-<?php echo htmlentities($to['color']); ?> mt-1">
                                                    <ul class="list-group list-group-flush ">
                                                        <li class="text-white m-0 d-flex justify-content-start px-2">
                                                            <!-- load icon address-->

                                                            <!-- load trait title -->
                                                            <span class="skill-title w-100 pl-0 align-self-center px-2">
                                                                <input type="text" name="trait_id" value={{$to['id']}} hidden/>{{$to['name']}}
                                                            </span>
                                                        </li>
                                                        <?php $skills = $to['skills']?>
                                                        <div class="list-group-box">
                                                            @if(count($skills) > 0)
                                                                @foreach($skills as $key => $value)
                                                                    <li class="list-group-item">
                                                                        <!-- load each skill item in the skills category;
                                                                        the number of skills items in the skill category vary -->
                                                                        <label class="frm_checkbox">
                                                                            <input type="checkbox"
                                                                                   class="skill-checkbox1"
                                                                                   name="rubric_skills[]"
                                                                                   value={{$key}} @if(in_array($key, $selectedSkills)) checked @endif />
                                                                            <span class="skill-name">{{$value['name']}}</span>
                                                                            @if ($value['flag'] === true)
                                                                                <img class="skill-flag-icon float-right" src="/images/flag.png"/>
                                                                            @endif
                                                                        </label>
                                                                        <span class="skill-tooltip">{!!$value['description']!!}</span>
                                                                    </li>
                                                                @endforeach
                                                            @else
                                                                <li class="list-group-item">
                                                                    <label class="frm_checkbox"></label>
                                                                </li>
                                                            @endif
                                                        </div>
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- end of skill cards columns -->
                                    </div>
                                    <div class="col-12 row justify-content-end mx-0 mt-3 mb-3 px-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    @if($currentAssessment != null)
                        <input type="hidden" name="task_id" value="{{$currentAssessment[0]['id']}}">
                    @endif
                    <input type="submit" class="btn save-exit-btn col-3"
                           value="{{$currentAssessment != null ? 'Update Assessment Rubric' : 'Update Rubric'}}"
                           id="rubric-edit-submit" style="float:right;margin-right:15%"
                           data-task-id="{{$currentAssessment != null ? $currentAssessment[0]['id'] : 'NA'}}"></button>
            </form>
        </div>
    </div>
@endsection

<div class="modal fade bd-example-modal-lg multiple-assessments-warning"
     id="multiple-students-marked-for-assessment-warning-modal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                        <div class="col-sm-12">
                            <p><strong>You are deleting skills that you have already assessed. Data for these skills
                                    will be removed from this assessment if you delete it.</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p><strong>These are:</strong></p>
                            <ul id="assessed-skills-to-delete" style="list-style-type:none">
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="assessment-delete-button delete-button-red" data-dismiss="modal">cancel
                            </button>
                            <button class="assessment-delete-button delete-button-green"
                                    id="edit-rubric-warning-modal-yes-button">yes, delete!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
