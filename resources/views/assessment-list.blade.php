@extends('layout.mainlayout')
@section('title', 'Assessment-List')
@section('content')
@csrf
<div class="row @if(count($assessmentList)===0){{"temporary-page-height-fix"}}@endif pb-5">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <!-- show no assessment created message -->


        <!-- show list of assessment created -->
        <div class="has-rubric">
            <div class="mt-5">
                <div class="row d-flex justify-content-between mb-3">
                    <h5 class="rubric-list-title">Assessments</h5>
                    <a href="/assessment-setup" class="assessment-btn p-2"><strong>New Assessment +</strong></a>
                </div>
                <div class="row d-flex justify-content-between mb-3">
                    <h5 class="rubric-list-title"></h5>
                    <a href="/deleted-assessments" class="assessment-trashbin-button p-2">
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trash&nbsp;&nbsp;&nbsp;</strong>
                        <img src="images/grey bin.png" alt="" class="interaction-icon assessment-trash-tab-icon-grey" style="margin: 0">
                        <img src="images/redbin.png" alt="" class="interaction-icon assessment-trash-tab-icon-red" style="margin: 0">
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                    </a>
                </div>

                <!-- do a student count; if 0 count then display below div -->
                @if(count($assessmentList) === 0)
                <div class="notice-styling mt-5">
                    <div class="">
                        <p>You currently do not have any assessments.</p>
                        <p>Create assessment for your students by</p>
                        <p>clicking<a href="/assessment-setup" class="assessment-btn p-2 mx-2">New Assessment+</a></p>
                    </div>

                </div>
                <!-- if student count >0 then display below-->
                @elseif(count($assessmentList) > 0)
                <!-- <div class="header-cells row rubric-table-header mt-5 pl-3">
                    <p class=" text-left px-0" style="width:31%">Title</p>
                    <p class=" text-left px-0" style="width:13%">Date Created</p>
                    <p class=" text-left px-0" style="width:56%">Rubric</p>
                </div> -->

                <div class="body-cells row mb-2">
                <span class="row btn-block d-flex pl-3 m-0">
                    <p class="col-3 text-truncate text-left px-0 mt-2" style="font-size:16px"><strong>Title</strong></p>
                    <p class="col-1 text-truncate text-left px-0 mt-2" style="font-size:16px"><strong>Status</strong></p>
                    <p class="col-2 text-truncate text-left px-0 mt-2" style="font-size:16px"><strong>Cohort</strong></p>
                    <p class="col-2 text-truncate text-left px-1 mt-2" style="font-size:14px"><strong>Task Date</strong></p>
                    <p class="col-3 text-truncate text-left px-1 mt-2" style="font-size:14px"><strong>Skills</strong></p>
                </span>
                </div>
                <!-- populate more cells as per assessment -->
                    @foreach($assessmentList as $al)
                        <div class="body-cells row mb-2">
                            <a href="{{ url('/single-assessment/' . $al['id']) }}" class="row btn-block assessment-rubric-list-row d-flex justify-content-between pl-3 m-0">
                                <p class="col-3 rubric-list-text text-truncate text-left px-0 mt-2" style="font-size:16px">{{$al['name']}}</p>
                                <p class="col-1 rubric-list-text text-truncate text-left px-0 mt-2" style="font-size:16px"><img src="images/{{$al['status']['name'] === 'active' ? 'status_active.png' : 'status_completed.png'}}" class="interaction-icon" style="margin-top:3px !important;"></p>
                                <p class="col-2 rubric-list-text text-truncate text-left px-1 mt-2" style="font-size:14px">
                                    @foreach($al['classes'] as $class)
                                        {{$class['name']}}
                                    @endforeach
                                </p>
                                <p class="col-2 rubric-list-text text-truncate text-left px-1 mt-2" style="font-size:14px">{{$al['assessed_date']}}</p>
                                <div class="col-3 assessment-list-card px-0 mt-2">
                                    <?php $counter = 0; $traits = $al['rubrics']['traits']?>
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
                                <div class="col-1"></div>
                                <button class="rubric-remove-button-styling" id="assessment-rubric-remove-button-styling" data-assessement-id={{$al['id']}} >
                                    <img class="interaction-icon" src="images/delete.png" alt="Delete Rubric Icon" />
                                </button>
                            </a>
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

<div class="modal fade bd-example-modal-lg multiple-assessments-warning" id="delete-assessment-warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <img src="/images/warning.png" class="rounded mx-auto d-block" alt="" style="width:60%">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <p><strong>You are moving this assessment to Trash.</strong></p>
                        <p style="color: rgb(218, 74,84)"><strong>Any student assessment data within this assessment will be removed from the system.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-9">
                        <p>You can access Trash to restore this assessment and it’s data within 90 days, after which it will be permanently deleted.</p>
                        <p>If you are not sure about anything please reach out to us at <strong>help@scriibi.com</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-11" style="text-align: center">
                        <form method="post" action="/asssessment-delete">
                            @csrf
                            <input type="hidden" name="assessmentId" value="" id="assessment-delete-warning-modal-form"/>
                            <button class="assessment-delete-button delete-button-red"  data-dismiss="modal">cancel</button>
                            <button class="assessment-delete-button delete-button-green" type='submit'>yes, move to trash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
