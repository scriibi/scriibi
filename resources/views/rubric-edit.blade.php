@extends('layout.mainlayout')
@section('title', 'Rubric Edit')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8"><br>
    <h1 class="Assessment-Studentlist-title">Edit Rubric</h1>
    <p>We love your student data as much as you do! Therefore in order to keep your students’ records, you can edit this rubric and save a new copy with a new name, however it can’t be a name that is already being used. </p>
    <form action="{{$currentAssessment != null ? '/assessment-rubric-edit-confirm' : '/rubric-edit-confirm'}}" method="POST" class="mt-5 mb-0 p-0" id="rubricform">
        @csrf
        <!-- Assessment Title and edit/delete img-->
        <div class="row mt-5 ">
            <div class="col-10">
            
                <h1 class="Assessment-Studentlist-title">Edit Rubric Name :</h1>
                <p><input class="form-control" type="text" name="rubric_name" value="{{$currentAssessment != null ? 'Copy of ' . $rubric['rubric_Name'] : $rubric['rubric_Name']}}"></p>
                <input type="text" name="rubric_id" value="{{$rubric['rubric_Id']}}" hidden>
            </div>
    
        </div>
        <div class="row mt-2 ">
            <div class="col-10">
                <h3 class="Assessment-Studentlist-title" style="font-size:18px">Assessments using this rubric:</h3>
                @if(count($assessmentCount) == 0)
                    <p>none</p>
                @else
                    <ul>
                        @foreach($assessmentCount as $ac)
                            <li>{{$ac}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="row mt-3">
            <!-- this is where the description of assessment task goes -->
            <div class="col-10">
            <h1 class="Assessment-Studentlist-title">Edit Skills</h1>
                <!-- <p><textarea name="assessment_description" class="form-control" cols="30" rows="10"></textarea></p> -->
                <div class="card universal-card-rubric p-0  row">
                    <div class="card-body">
                        <!-- term-title+Curriculum -->
                        <div class="card-text m-0">
                            <div class="row">
                                <div class="col-4">
                                <h1 class="Assessment-Studentlist-title">Rubric</h1><br><br>
                                <label >Show skills and curriculum  milestones for:</label><br />
                                <select class="select-input" name="assessed_level" id="select_curriculum_code_in_rubric_edit" data-rubric-id={{$rubric['rubric_Id']}} data-task-id={{$currentAssessment != null ? $currentAssessment['writing_task_Id'] : 'NA'}}>
                                    <!-- <option value="" disabled selected hidden>Select your option</option> -->
                                    @foreach($assessedLabels as $al)
                                        <option value={{$al->school_scriibi_level_id}} <?php if(isset($level) && $level == $al->school_scriibi_level_id) { echo "selected"; } ?>>{{$al->assessed_level_label}}</option>
                                    @endforeach
                                </select>
                                <span class="bar"></span>                                    
                                </div>
                                <div class="col-8 justify-content-between float-right" style="text-align:right">
                                    <img class="skill-flag-icon" src="/images/flag.png" />
                                    <span>This Skill is a Curriculum milestone for the selected level</span>
                                <div>
                            </div>
                               
                        </div>

                        <!-- skills cards deck-->
                            <div class="card-columns p-0 mt-3" id="check-array1">
                            @foreach($traitObjects as $to)
                                        <div class="card border-0 p-0 mt-2 skillset-box skillset-box-<?php echo htmlentities($to->getColor()); ?> mt-1">
                                            <ul class="list-group list-group-flush ">
                                                <li class="text-white m-0 d-flex justify-content-start px-2">
                                                    <!-- load icon address-->
                                                    
                                                    <!-- load trait title -->
                                                    <span class="skill-title w-100 pl-0 align-self-center px-2">
                                                        <input type="text" name="trait_id" value={{$to->getId()}} hidden />
                                                        {{$to->getName()}}
                                                    </span>

                                                </li>
                                                <?php $skills = $to->getSkills()?>
                                                <div class="list-group-box">

                                                @if(count($skills) > 0)
                                                    @foreach($skills as $skill)
                                                        <li class="list-group-item">
                                                            <!-- load each skill item in the skills category;
                                                            the number of skills items in the skill category vary -->
                                                            <label class="frm_checkbox">
                                                                <input type="checkbox" class="skill-checkbox1" name="rubric_skills[]" value={{$skill->getId()}} @if(in_array($skill->getId(), $selectedSkills)) checked @endif />
                                                                <span class="skill-name">{{$skill->getName()}}</span>
                                                                @if ($skill->getFlag() === true)
                                                                    <img class="skill-flag-icon float-right" src="/images/flag.png" />
                                                                @endif
                                                            </label>
                                                            <span class="skill-tooltip">{!!$skill->getDefinition()!!}</span>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="list-group-item">          
                                                        <label class="frm_checkbox"></label>

                                                @endif
                                                </div>
                                            </ul>
                                        </div>
                                @endforeach


                                <!-- load cards from skill-categories DB; you should see 7 of them;
                                each card has icon address, skill-title, skillset-items, color code, ex: #FFD12D -->

                                <!-- content inside each skill card -->
                                
                                <!-- end of each skill card -->
                            </div>
                            <!-- end of skill cards columns -->
                        </div>
                        <div class="col-12 row justify-content-end mx-0 mt-3 mb-3 px-0">
                            <!-- <button class="btn edir-rubric-btn-clear" type="reset" name="button-clear2">Clear Skills</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        @if($currentAssessment != null)
            <input type="hidden" name="task_id" value="{{$currentAssessment['writing_task_Id']}}">
        @endif
        <!-- <input type="text" name="assessment_id" value="" hidden /> -->
        <input type="submit" class="btn save-exit-btn col-3" value="{{$currentAssessment != null ? 'Save new Rubric' : 'Update Rubric'}}" id="rubric-edit-submit" style="float:right;margin-right:15%" data-task-id="{{$currentAssessment != null ? $currentAssessment['writing_task_Id'] : 'NA'}}"></button>
    </form>
        <!-- <div class="col-12 d-flex justify-content-end mt-3 pr-4">
            <button type="button" name="button" class="btn save-exit-btn col-2"  onclick="location.href='{{ url('/assessment-list') }}'">Save and Exit</button>
        </div> -->
        <!-- populate more cells as per rubric -->
        </div>
   </div>
    
</div>

@endsection

<div class="modal fade bd-example-modal-lg multiple-assessments-warning" id="multiple-students-marked-for-assessment-warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                <p><strong>You are deleting skills that you have already assessed. Data for these skills will be removed from this assessment if you delete it.</strong></p>
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
                <button class="assessment-delete-button delete-button-red" data-dismiss="modal">cancel</button>
                <button class="assessment-delete-button delete-button-green" id="edit-rubric-warning-modal-yes-button">yes, delete!</button>
            </div>         
        </div>   
      </div>
    </div>
    </div>
  </div>
</div>