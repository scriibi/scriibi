@extends('layout.mainlayout')
@section('title', 'Rubric-List')
@section('content')
    <div class="rubric-list-parent-cont">
    
        <div class="row no-gutters rubric-list-options-row">
            <div class="col-4 rubric-list-option" id="rubric-list-option-scriibi-rubrics">
                Scriibi Rubrics
            </div>
            <!-- <div class="col-3 rubric-list-option" id="rubric-list-option-shared-rubrics">
                Shared with Me             
            </div> -->
            <div class="col-4 rubric-list-option rubric-list-option-current-style" id="rubric-list-option-my-rubrics">
                My Saved Rubrics   
            </div>
            <a href="/rubrics" class="col-4 rubric-list-option" id="rubric-list-option-build-rubrics" style="text-decoration:none; color:#000000">
                Build a new Rubric
            </a>
        </div>
        
    </div>
    
    <!-- section for my rubrics to be done through js-->
    <div class="row @if(count(json_decode($rubrics))===0){{"temporary-page-height-fix"}}@endif pb-5 pl-3 pr-4 pt-3" id="rubric-list-rubrics-view">    
        <div class="d-none d-sm-block col-sm-1 col-md-1"></div>
        
        <div class="col-10 col-sm-10 col-md-10" style="height:12cm">

            @if(count(json_decode($rubrics)) === 0)
                <div class="notice-styling mt-5" id="no-rubrics-available">
                    <p>You currently do not have any rubric templates.</p>
                </div>
                <div class="row" id="rubric-list-skill-cards"></div>
            <!-- show list of rubric created -->
            @else
            <!-- populate more cells as per rubric -->
            <div class="student-list-scroll px-0 mx-0" style="height:100%">
                <div class="row " id="rubric-list-skill-cards">
                    @foreach(json_decode($rubrics) as $r)
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <a href="/rubric-details/{{$r->id}}" class="card rubric-box btn-block rubric-list-card-single">
                                <div class="rubric-list-text-title text-left">
                                    {{$r->name}}
                                </div>
                                <div class="rubric-box-small rubric-list-skills text-left align-middle">
                                    <p class="rubric-skills-para">Skills</p>
                                    <ul style="list-style: none;padding-left:10px;">
                                    <!-- get each skill from the rubric and display it into the p tag -->
                                        <?php
                                            $count = 0;
                                            $skillsCount = count($r->skills);
                                            foreach($r->skills as $s){
                                                if($count < 20){                                       
                                        ?>   
                                                    <li>
                                                        <span class="colored-dot-dimensions colored-dot-color-<?php echo htmlentities($s->color); ?>"></span>
                                                        <span>{{$s->name}}</span>
                                                    </li>
                                        <?php
                                                $count++;
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div>
                                    <div class="rubric-more-skills">
                                        <?php 
                                            if($skillsCount > 20)
                                            {
                                                echo ($skillsCount-20)." more";
                                            }
                                        ?>
                                    </div>
                                    <form method="post" action="/rubricDelete">
                                    @csrf
                                        <input type="hidden" name="rubricId" value={{$r->id}} />
                                        <button class="rubric-remove-button-styling" type="submit">
                                            <img class="interaction-icon" src="images/delete.png" alt="Delete Rubric Icon" />
                                        </button>
                                    </form>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                </div>
            @endif
        </div>
        <div class="d-none d-sm-block col-sm-1 col-md-1"></div>
    </div>
                                           
@endsection