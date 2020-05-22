@extends('layout.mainlayout')
@section('title', 'Rubric-List')
@section('content')
<div class="row @if(count($rubrics)===0){{"temporary-page-height-fix"}}@endif pb-5">
   <div class="d-none d-sm-block col-sm-1 col-md-1">
   </div>
    <div class="col-12 col-sm-10 col-md-10">
        <div class="row d-flex justify-content-between mb-3 mt-5">
                <h5 class="rubric-list-title">My Rubrics</h5>
            <a href="/rubrics" class="assessment-btn p-2"><strong>New Rubric +</strong></a>
        </div>
        <!-- show no rubric created message -->

        @if(count($rubrics)===0)

        <div class="notice-styling mt-5">
            <p>You currently do not have any rubric templates.</p>
            <p>Click the <a href="/rubrics" class="assessment-btn p-2 mx-2"><strong>New Rubric +</strong></a> to create your first template</p>
            <p>and begin using them for your assessments!</p>
        </div>

        <!-- show list of rubric created -->
        @else
        <!-- populate more cells as per rubric -->
        @foreach($rubrics as $r)
            <a href="/rubric-details/{{$r->getId()}}" class="card rubric-box btn-block rubric-list-card-single">
                <div class="rubric-list-text-title text-left">
                    {{$r->getName()}}
                </div>
                <div class="rubric-box-small rubric-list-skills text-left align-middle">
                    <p class="rubric-skills-para">Skills</p>
                    <ul style="list-style: none;padding-left:10px;">
                    <!-- get each skill from the rubric and display it into the p tag -->
                    <?php $skills_array = array();
                        $colors_array = array();
                        $traits_skills = $r->getRubricTraitSkills();
                        foreach($traits_skills as $ts){
                            $skillObjects = $ts->getSkills();
                            foreach($skillObjects as $so){
                                array_push($skills_array, $so->getName());
                                array_push($colors_array,$ts->getColor());
                            }
                        };
                        $final_skill = end($skills_array);
                        $count = 0;
                        foreach($skills_array as $sa) {
                            if($count<20)
                            {
                            ?>   
                                <li>
                                <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($colors_array[$count]); ?>"></span>
                                <span>{{$sa}}</span>
                                </li>
                            <?php
                            }
                            $count++;
                        }//end of foreach
                    ?>
                    
                    </ul>
                </div>
                <div>
                    <div class="rubric-more-skills">
                    <?php 
                    if($count>20)
                    {
                        echo ($count-20)." more";
                    }
                    ?>
                    </div>
                    <form method="post" action="/rubricDelete">
                        @csrf
                        <input type="hidden" name="rubricId" value={{$r->getId()}} />
                        <button class="rubric-remove-button-styling" type="submit">
                            <img class="interaction-icon" src="images/delete.png" alt="Delete Rubric Icon" />
                        </button>
                    </form>
                </div>
            </a>
        @endforeach
        @endif
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-1">
   </div>
</div>
@endsection