@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')

<?php
$color_class ='blue';
?>

<!-- able to change curriculum code and skills refresh -->
<!-- tooltip for each skill item ex. description of each skill item -->
<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <!-- middle section of main content -->
   <div class="col-12 col-sm-10 col-md-8">

        <!-- Rubric Builder -->
        <h4 class="top-divider mb-3 header-text mx-0" id="RubricBuilder_title"><strong>Rubric Builder</strong></h4>

        <!-- card contains 2 forms in 1 form -->
        <div class="card universal-card-rubric p-0  row">
            <div class="card-body">
                <form action="index.html" method="post" class="mb-0 p-0">
                    <form action="index.html" method="post">
                        <!-- term-title+Curriculum -->
                        <div class="card-text m-0">
                            <div class=" form-group d-flex justify-content-between ">
                                <input type="text" class="col-sm-9 input-group-sm rubric-border-box mr-1" name="" value="Term 1 Rubric" required>
                                <div class="d-none d-xs-block">

                                </div>
                                <select class="col-sm-3 input-group-sm rubric-border-box custom-select" name="">
                                    <option value="Code value">Curriculum Codes</option>
                                    <!-- load curriculum codes from teacher's table  -->
                                    <option value="">this text will be load from DB</option>
                                </select>
                            </div>

                            <!-- load and pop checkboxs for each text type from DB; you should see 11 of them.-->
                            <div class="d-flex flex-wrap btn-group-toggle p-0 m-0 justify-content-start" datat-toggle="buttons">
                                <div class="btn-group-toggle px-1 pb-1" data-toggle="buttons">
                                    <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                        <input type="checkbox" role="button-" name="" value="description" class="">load text type from DB
                                    </label>
                                </div>
                            </div>

                            <!-- skills cards deck-->
                            <div class="card-deck row inline-block p-0 mt-5" >

                                <!-- load cards from skill-categories DB; you should see 7 of them;
                                each card has icon address, skill-title, skillset-items, color code, ex: #FFD12D -->

                                <!-- content inside each skill card -->
                                @foreach($traitObjects as $to)
                                    <div class="card border-0 col-sm-3 p-0 mb-0 skillset-box skillset-box-<?php echo htmlentities($to->getColor()); ?>">
                                        <ul class="list-group list-group-flush ">
                                            <li class="text-white m-0 d-flex justify-content-start px-2">
                                                <!-- load icon address-->
                                                <img src="/trait-icon/Ideas.png" alt="ideas" class="align-self-center">
                                                <!-- load trait title -->
                                                <span class="skill-title w-100 pl-0 align-self-center px-2">{{$to->getName()}}</span>
                                            </li>
                                            <?php $skills = $to->getSkills()?>
                                            @foreach($skills as $skill)
                                            <div class="list-group-box">
                                                <li class="list-group-item">
                                                    <!-- load each skill item in the skills category;
                                                    the number of skills items in the skill category vary -->
                                                    <label class="frm_checkbox"><input type="checkbox" name="" value=""><span>{{$skill->getName()}}</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                            </div>
                                        </ul>
                                    </div>
                                @endforeach
                                <!-- end of each skill card -->
                            </div>
                            <!-- end of skill cards columns -->
                        </div>
                        <!-- clear button for form term 1 -->
                        <div class="col-12 row justify-content-end align-self-end p-0 m-0">
                            <button class="btn btn-clear" type="reset" name="button-clear1">Clear</button>
                        </div>
                    </form>
                </div>
                <!-- end of form 1 -->

                <!-- divider between form 1 and 2 -->
                <div class="d-none d-sm-block form-break mt-2 mb-0 p-0">
                </div>

                <!-- beginning of form 2 -->
                <div class="card-body pb-0">
                    <form class="" action="index.html" method="post">
                        <div class="card-text m-0">
                            <!-- input for rubric name and curriculum code -->
                            <div class="form-group d-flex justify-content-between">
                                <input type="text" class="col-sm-9 input-group-sm rubric-border-box mr-1" name="" value="Term 2 Rubric">
                                <div class="d-none d-xs-block">
                                </div>
                                <div class="col-sm-3 input-group-sm rubric-border-box text-nowrap p-0 m-0">
                                    <button class="btn" type="button" name="button">Auto-populate term 2 skills</button>
                                </div>
                            </div>

                            <!-- load and pop checkboxs for each text type from DB; you should see 11 of them.-->
                            <div class="d-flex flex-wrap btn-group-toggle p-0 m-0 justify-content-start" datat-toggle="buttons">
                                <div class="btn-group-toggle px-1 pb-1" data-toggle="buttons">
                                    <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                        <input type="checkbox" name="" value="description">load text type from DB
                                    </label>
                                </div>
                            </div>

                            <!-- skills cards deck-->
                            <div class="card-deck row inline-block p-0 mt-5" >

                                <!-- load cards from skill-categories DB; you should see 7 of them;
                                each card has icon address, skill-title, skillset-items, color code, ex: #FFD12D -->

                                <!-- content inside each skill card -->
                                @foreach($traitObjects as $to)
                                    <div class="card border-0 col-sm-3 p-0 mb-0 skillset-box skillset-box-<?php echo htmlentities($to->getColor()); ?>">

                                        <ul class="list-group list-group-flush frm_checkbox ">
                                            <li class="text-white ">
                                                <!-- load icon address; we dont have this yet;wait for Talia -->
                                                <span class="align-middle">icon</span>
                                                <!-- load skill title -->
                                                <span class="skill-title align-middle w-100 pl-0">{{$to->getName()}}</span>
                                            </li>
                                            @foreach($skills as $skill)
                                                <div class="list-group-box">
                                                    <li class="list-group-item">
                                                        <!-- load each skill item in the skills category;
                                                        the number of skills items in the skill category vary -->
                                                        <label class="frm_checkbox"><input type="checkbox" name="" value=""><span>{{$skill->getName()}}</span>
                                                        </label>
                                                    </li>
                                                </div>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                <!-- end of each skill card -->

                            </div>
                            <!-- end of skill cards columns -->
                        </div>
                        <!-- clear button for form term 2 -->
                        <div class="col-12 row justify-content-end p-0 m-0">
                            <button class="btn btn-clear" type="reset" name="button-clear2">Clear</button>
                        </div>
                    </form>
                    <!-- end of form 2 -->
                </form>
            </div>
        </div>
        <div class="d-flex row justify-content-end mt-4 p-0">
            <button class="btn btn-rubric-save" type="submit" name="button">Review</button>
        </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2 m-0">
   </div>
</div>
@endsection
