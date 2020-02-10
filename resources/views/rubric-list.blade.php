@extends('layout.mainlayout')
@section('title', 'Rubric-List')
@section('content')
@csrf
<div class="row @if(count($rubrics)===0){{"temporary-page-height-fix"}}@endif pb-5">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
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
        <div class="row student-table-label d-flex mt-5 pl-3">
            <p class="col-4 text-left">Rubric Name</p>
            <p class="col-2 text-left">Date Created</p>
            <p class="col-4 text-left">Skills</p>
        </div>
        <!-- populate more cells as per rubric -->
        @foreach($rubrics as $r)
            <a href="#" class="row btn-block rubric-list-row d-flex  pl-3 m-0 mb-2 pb-0">
                <div class="col-4 rubric-list-text text-left pl-0 mb-0">
                    <p>{{$r->getName()}}</p>
                </div>
                <div class="col-2 rubric-list-text text-left">
                    <p>{{$r->getDate()}}</p>
                </div>
                <div class="col-5 rubric-list-skills text-left align-middle">
                    <!-- get each skill from the rubric and display it into the p tag -->
                    <?php $skills_array = array();
                    $traits_skills = $r->getRubricTraitSkills();
                    foreach($traits_skills as $ts){
                        $skillObjects = $ts->getSkills();
                        foreach($skillObjects as $so){
                            array_push($skills_array, $so->getName());
                        }
                    };
                     ?>
                    <p>
                        <!-- Applying a comma after each skill -->
                        <?php
                            $final_skill = end($skills_array);
                            $count = 1;
                            foreach($skills_array as $sa) {
                                if($sa != $final_skill) {
                                    echo($sa . ", ");
                                    $count++;
                                }
                                else {
                                    echo($sa);
                                }
                                //apply an ellipses if reached 11 skills
                                if ($count === 7){
                                    echo($sa."...");
                                    break;
                                }
                            }//end of foreach
                        ?>
                    </p>
                </div>
                <div class="col-1">
                    <form method="post">
                        <input type="hidden" value="put something in here" />
                        <button class="remove-button-styling" type="button">
                            <img class="interaction-icon" src="images/delete.png" alt="Delete Rubric Icon" />
                        </button>
                    </form>
                </div>
            </a>
        @endforeach
        @endif
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
