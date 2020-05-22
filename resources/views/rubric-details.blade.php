@extends('layout.mainlayout')
@section('title', 'Assessment-Student List')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <div class="row mt-5 rubric-detail-info-section">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Rubric Name :</h5>
                <!-- Insert rubric name here -->
                <p>{{$data['rubric']->getName()}}</p>
            </div>
            <div class="col-2">
                <!-- put the width and height of this image to the css file later -->
                <span><a href="/rubric-edit/{{$data['rubric']->getId()}}" id="edit-rubric-link" data-assessment-count="{{count($data['writing_tasks'])}}"><img src="/images/Edit Rubric Icon and Text.png" alt="edit assessment icon" width="110px" height="25px"></a></span>
            </div>
        </div>
        <div class="row mt-3 rubric-detail-info-section">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Date :</h5>
                <!-- change date later -->
                <p><?php //echo (date("d-m-Y", strtotime($writingTask->getAssessedAt()))); ?></p>
                <p>{{$data['rubric']->getDate()}}</p>
            </div>
        </div>
        <div class="row mt-3 rubric-detail-info-section">
            <div class="col-10">
                <p style="font-size:1.3rem"><strong>Assessments using this rubric :</strong></p>
                <!-- foreach required here to display assessments-->  
                <ul>
                    @foreach($data['writing_tasks'] as $assessment)
                        <li>{{$assessment->task_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row mt-3 rubric-detail-info-section">
            <div class="col-12">
                <h5 class="Assessment-Studentlist-title">Skills</h5>
                <ul style="list-style: none">
                    @foreach($data['rubric']->getRubricTraitSkills() as $rst)
                        @foreach($rst->getSkills() as $skill)
                            <div class="rubric-info-rubric-skills-div">
                                <span class="rubric-details-colored-dot-dimensions colored-dot-color-<?php echo htmlentities($rst->getColor()); ?>"></span>
                                <span class="rubric-info-rubric-skills-span">{{$skill->getName()}}</span>
                            </div>   
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>

@endsection



<div class="modal fade bd-example-modal-lg multiple-assessments-warning" id="multiple-assessments-warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
          <div class="col-sm-6"><img src="/images/warning.png" class="img-fluid w-75 rounded mx-auto d-block" alt=""></div>       
          <div class="col-sm-6">
              <p><strong>Uh oh! Seems like you've already used this rubric for more than one assessment.</strong></p>
              <p>You're unalbe to edit this irgunal rubric as we will loose your students' data from each assessment if any changes are made here</p>
              <p>However, you can click on each assessment using this rubric to individually <strong>edit, rename</strong> and <strong>save</strong> a copy of this rubric as another one.</p>
              <p>Thankyou!</p>
            </div>     
        </div> 
      </div>
    </div>
    </div>
  </div>
</div>


