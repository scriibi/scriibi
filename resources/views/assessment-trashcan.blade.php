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
                    <p class="col-7 text-truncate text-left px-1 mt-2" style="font-size:14px">Rubric</p>
                </span>
                </div>
                   
                    @foreach($assessmentList as $al)
                        <div class="body-cells row mb-2">
                            <div class="row btn-block delete-list-row-styling d-flex justify-content-between pl-3 m-0">
                                <p class="col-3 rubric-list-text text-truncate text-left px-0 mt-2" style="font-size:16px">{{$al->getName()}}</p>
                                <p class="col-2 rubric-list-text text-truncate text-left px-1 mt-2" style="font-size:14px">{{$al->getCreatedAt()}}</p>
                                <div class=" col-6 assessment-list-card px-0 mt-2">
                                    <div class="row">
                                        <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <span class="text-left">
                                                {{$al->getRubric()->getName()}}
                                            </span>
                                        </div>
                                        <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                            <?php $counter = 0;?>                   
                                            @foreach($al->getRubric()->getRubricTraitSkills() as $ts)
                                                @foreach($ts->getSkills() as $s)
                                                    <?php $counter++;?>
                                                @endforeach
                                            @endforeach
                                            <div class="assessment-list-skill-colors"> 
                                                <span class="text-left-skills-colors"> <?php echo $counter;?> Skills </span>                                                                      
                                                <div class="aligh-dots-assessment-list">
                                                    @foreach($al->getRubric()->getRubricTraitSkills() as $ts)
                                                    @if(!$ts->isSkillsEmpty())
                                                        <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-<?php echo htmlentities($ts->getColor()); ?>"></span>
                                                    @endif
                                                    @endforeach
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                {{ $path = '/assessment-restore/' . $al->getId()}}
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
