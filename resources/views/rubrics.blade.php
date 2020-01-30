@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <!-- middle section of main content -->
   <div class="col-12 col-sm-10 col-md-8">

        <!-- Rubric Builder -->
        <h4 class="top-divider mb-3 header-text mx-0" id="RubricBuilder_title"><strong>Select skills to build my rubric</strong></h4>

        <div class="card universal-card-rubric p-0  row">
            <div class="card-body">
                <!-- load and pop checkboxs for each text type from DB; you should see 11 of them.-->
                <!-- <div class="d-flex flex-wrap btn-group-toggle p-0 m-0 justify-content-start" datat-toggle="buttons">
                    @foreach($text_types as $tt)
                        <div class="btn-group-toggle px-1 pb-1" data-toggle="buttons">
                            <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                <input type="checkbox" role="button-" name="" value={{$tt->text_type_Id}} class="">{{$tt->text_type_Name}}
                            </label>
                        </div>
                    @endforeach
                </div> -->
                <form action="/RubricConfirm" method="POST" class="mt-5 mb-0 p-0" id="rubricform">
                @csrf
                    <!-- term-title+Curriculum -->
                    <div class="card-text m-0">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="text-input" id="assessment_name1" name="rubric1_name" value="Term 1 Skills Template" required/>
                                <span class="bar"></span>
                                <label class="student-form-label ml-3" for="assessment_name1">Title</label>
                            </div>
                            <div class="col-4">
                                <select class="select-input" name="assessed_level" id="select_curriculum_code">
                                        <option value="" disabled selected hidden>Select your option</option>
                                    @foreach($assessed_labels as $al)
                                        <option value={{$al->school_scriibi_level_id}} <?php if(isset($level) && $level == $al->school_scriibi_level_id) { echo "selected"; } ?>>{{$al->assessed_level_label}}</option>
                                    @endforeach
                                </select>
                                <span class="bar"></span>
                                <label class="ml-3 student-form-label" for="grade">Show curriculum  milestone for</label><br />
                            </div>
                        </div>

                        <!-- skills cards deck-->
                        <div class="card-columns p-0 mt-3" id="check-array1">

                            <!-- load cards from skill-categories DB; you should see 7 of them;
                            each card has icon address, skill-title, skillset-items, color code, ex: #FFD12D -->

                            <!-- content inside each skill card -->
                            @foreach($traitObjects as $to)
                                @if (count($to->getSkills()) > 0)
                                    <div class="card border-0 p-0 mt-2 skillset-box skillset-box-<?php echo htmlentities($to->getColor()); ?> mt-1">
                                        <ul class="list-group list-group-flush ">
                                            <li class="text-white m-0 d-flex justify-content-start px-2">
                                                <!-- load icon address-->
                                                <img src="/trait-icon/{{$to->getIcon()}}" alt="ideas" class="align-self-center">
                                                <!-- load trait title -->
                                                <span class="skill-title w-100 pl-0 align-self-center px-2">
                                                    <input type="text" name="trait_id" value={{$to->getId()}} hidden />
                                                    {{$to->getName()}}
                                                </span>

                                            </li>
                                            <?php $skills = $to->getSkills()?>
                                            <div class="list-group-box">
                                            @foreach($skills as $skill)
                                                <li class="list-group-item">
                                                    <!-- load each skill item in the skills category;
                                                    the number of skills items in the skill category vary -->
                                                    <label class="frm_checkbox">
                                                        <input type="checkbox" class="skill-checkbox1" name="rubric1_skills[]" value={{$skill->getId()}} / >
                                                        <span class="skill-name">{{$skill->getName()}}</span>
                                                        <!-- @if ($skill->getFlag() === true)
                                                            <img class="skill-flag-icon float-right" src="/images/flag.png" />
                                                        @endif -->
                                                    </label>
                                                    <span class="skill-tooltip">{!!$skill->getDefinition()!!}</span>
                                                </li>
                                            @endforeach
                                            </div>
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                            <!-- end of each skill card -->
                        </div>
                        <!-- end of skill cards columns -->
                    </div>
                </div>
                <!-- end of form 1 -->

                <!-- divider between form 1 and 2 -->
                <div class="d-none d-sm-block form-break mt-2 mb-0 p-0">
                </div>
                <div class="card-body pb-0">
                    <div class="card-text m-0">
                        <!-- input for rubric name and curriculum code -->
                            <div class="row mt-4">
                                <div class="col-8">
                                    <input type="text" class="text-input" id="assessment_name2" name="rubric2_name" value="Term 2 Skills Template" required/>
                                    <span class="bar"></span>
                                    <label class="student-form-label ml-3" for="assessment_name2">Title</label>
                                </div>
                                <div class="col-4"></div>
                            </div>


                        <!-- skills cards deck-->
                        <div class="card-columns p-0 mx-0 mt-5" id="check-array2">

                            <!-- load cards from skill-categories DB; you should see 7 of them;
                            each card has icon address, skill-title, skillset-items, color code, ex: #FFD12D -->

                            <!-- content inside each skill card -->
                            @foreach($traitObjects as $to)
                                @if (count($to->getSkills()) > 0)
                                    <div class="card border-0 p-0 mt-2 skillset-box skillset-box-<?php echo htmlentities($to->getColor()); ?> mt-1">
                                        <ul class="list-group list-group-flush ">
                                            <li class="text-white m-0 d-flex justify-content-start px-2">
                                                <!-- load icon address-->
                                                <img src="/trait-icon/{{$to->getIcon()}}" alt="ideas" class="align-self-center">
                                                <!-- load trait title -->
                                                <span class="skill-title w-100 pl-0 align-self-center px-2">
                                                    <input type="text" name="trait_id" value={{$to->getId()}} hidden />
                                                    {{$to->getName()}}
                                                </span>

                                            </li>
                                            <?php $skills = $to->getSkills()?>
                                            <div class="list-group-box">
                                            @foreach($skills as $skill)
                                                <li class="list-group-item">
                                                    <!-- load each skill item in the skills category;
                                                    the number of skills items in the skill category vary -->
                                                    <label class="frm_checkbox">
                                                        <input type="checkbox" class="skill-checkbox2" name="rubric2_skills[]" value={{$skill->getId()}} / >
                                                        <span class="skill-name">{{$skill->getName()}}</span>
                                                        @if ($skill->getFlag() === true)
                                                            <img class="skill-flag-icon float-right" src="/images/flag.png" />
                                                        @endif
                                                    </label>
                                                    <span class="skill-tooltip">{!!$skill->getDefinition()!!}</span>
                                                </li>
                                            @endforeach
                                            </div>
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                            <!-- end of each skill card -->

                        </div>
                        <!-- end of skill cards columns -->
                    </div>
                    <!-- clear button for form -->
                    <div class="d-flex row justify-content-end mt-3 mb-3 mx-0 px-0">
                        <input class="btn assessment-btn p-3" type="submit" name="button" id="rubric-save" value="save this rubric" />
                    </div>
                    <div class="col-12 row justify-content-end mx-0 mt-3 mb-3 px-0">
                        <button class="btn btn-clear" type="reset" name="button-clear2">Clear</button>
                    </div>
                </form>

            </div>
        </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2 m-0">
   </div>
</div>
@endsection
