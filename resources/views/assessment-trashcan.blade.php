@extends('layout.mainlayout')
@section('title', 'Assessment-List')
@section('content')
@csrf
<div class="row @if(count($assessmentList)===0){{"temporary-page-height-fix"}}@endif pb-5">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <div class="has-rubric">
            <div class="mt-5">
                <div class="row d-flex justify-content-between mb-3">
                    <h5 class="rubric-list-title">Trash</h5>
                    <a href="/assessment-list" class="assessment-btn p-2"><strong>Return to Assessments List</strong></a>
                </div>
                <div class="row d-flex justify-content-between mb-3">
                    <p style="color:rgba(218,74,84); font-weight: 700"><strong>Assessments will be stored in Trash for 90 days before being permanently deleted.</strong></p>
                    <p>Select <img src="images/restore.png" class="interaction-icon" style="margin: 0 7px" alt=""> to restore an assessment.</p>
                </div>

                @if(count($assessmentList) === 0)
                <div class="notice-styling mt-5">
                    <div class="">
                        <p>Trash is empty.</p>
                    </div>

                </div>

                @elseif(count($assessmentList) > 0)
                <div class="body-cells row mb-2">
                <span class="row btn-block d-flex justify-content-between pl-3 m-0">
                    <p class="col-3 text-truncate text-left px-0 mt-2" style="font-size:16px">Title</p>
                    <p class="col-2 text-truncate text-left px-1 mt-2" style="font-size:14px">Date Created</p>
                    <p class="col-3 text-truncate text-left px-1 mt-2" style="font-size:14px">Rubric</p>
                    <div class="col-4"></div>
                </span>
                </div>
                    @foreach($assessmentList as $assessment)
                        <div class="body-cells row mb-2">
                            <div class="row btn-block delete-list-row-styling d-flex justify-content-between pl-3 m-0">
                                <p class="col-3 rubric-list-text text-truncate text-left px-0 mt-2" style="font-size:16px">{{$assessment['name']}}</p>
                                <p class="col-2 rubric-list-text text-truncate text-left px-1 mt-2" style="font-size:14px">{{$assessment['assessed_date']}}</p>
                                <div class="col-3 assessment-list-card px-0 mt-2">
                                    <?php $counter = 0; $traits = $assessment['rubrics']['traits']?>
                                    @foreach($traits as $key => $value)
                                        @foreach($value['skills'] as $skill)
                                            <?php $counter++;?>
                                        @endforeach
                                    @endforeach
                                    <div class="assessment-list-skill-colors">
                                        <span class="text-left-skills-colors"> <?php echo $counter;?> Skills </span>
                                        <div class="aligh-dots-assessment-list">
                                            @foreach($traits as $key => $value)
                                                @if(!empty($value['skills']))
                                                    <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-<?php echo htmlentities($value['color']); ?>"></span>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                </div>
                                @php $path = '/assessment-restore?task=' . $assessment['id'] @endphp
                                <button class="rubric-remove-button-styling" id="assessment-rubric-remove-button-styling" onclick="location.href='{{ url($path) }}'">
                                    <img class="interaction-icon" src="images/restore.png" alt="Restore Assessment Icon" style="margin:0"/>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
