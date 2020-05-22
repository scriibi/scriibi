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
                <span class="row btn-block d-flex justify-content-between pl-3 m-0">
                    <p class="col-4 text-truncate text-left px-0 mt-2" style="font-size:16px">Title</p>
                    <p class="col-4 text-truncate text-left px-1 mt-2" style="font-size:14px">Date Created</p>
                    <p class="col-4 text-truncate text-left px-1 mt-2" style="font-size:14px">Rubric</p>
                </span>
                </div>
                   
                <!-- populate more cells as per assessment -->
                    @foreach($assessmentList as $al)
                        <div class="body-cells row mb-2">
                            <a href="{{ url('/single-assessment/' . $al->getId()) }}" class="row btn-block assessment-rubric-list-row d-flex justify-content-between pl-3 m-0">
                                <p class="col-3 rubric-list-text text-truncate text-left px-0 mt-2" style="font-size:16px">{{$al->getName()}}</p>
                                <p class="col-1 rubric-list-text text-truncate text-left px-1 mt-2" style="font-size:14px">{{$al->getCreatedAt()}}</p>
                                <div class="assessment-list-card px-0 mt-2">
                                    <span class="text-left">{{$al->getRubric()->getName()}}</span>
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
                                <form method="post" action="/rubricDelete">
                                    @csrf
                                    <input type="hidden" name="rubricId" value={{$al->getId()}} />
                                    <button class="rubric-remove-button-styling" id="assessment-rubric-remove-button-styling"type="submit">
                                        <img class="interaction-icon" src="images/delete.png" alt="Delete Rubric Icon" />
                                    </button>
                                </form>
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
