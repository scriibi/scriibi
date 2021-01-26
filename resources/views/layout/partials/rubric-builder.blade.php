<div class="row" id="rubric-builder">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <div class="col-12 col-sm-10 col-md-8"><br>
        <form action={{$scriibi_user ? "/scriibi-rubric-confirm" : "/RubricConfirm"}} method="POST" class="mt-5 mb-0 p-0" id="rubricform">
        @csrf
            @if(!$scriibi_user)
                <div class="row d-flex justify-content-between mb-3 ml-1">
                    <h5 class="rubric-list-title">Rubric Builder</h5>
                    <a href="/rubric-list" class="assessment-btn p-2"><strong>Return to Rubrics List</strong></a>
                </div>
            @endif
            <div class="row mt-5 ">
                <div class="col-12">
                    <h1 class="Assessment-Studentlist-title">Rubric Name :</h1>
                    <p><input class="form-control" type="text" name="rubric_name" id="assessment_name" placeholder="My Rubric"></p>
                </div>
            </div>
            <div class="row mt-3">
                <!-- this is where the description of assessment task goes -->
                <div class="col-12">
                <h1 class="Assessment-Studentlist-title">Select Skills to build your rubric</h1>
                <!-- <p><textarea name="assessment_description" class="form-control" cols="30" rows="10"></textarea></p> -->
                <div class="card universal-card-rubric p-0  row">
                    <div class="card-body">
                        <!-- term-title+Curriculum -->
                        <div class="card-text m-0">
                            <div class="row">
                                @if(!$scriibi_user)
                                    <div class="col-4">
                                        <!-- <h1 class="Assessment-Studentlist-title">Rubric</h1><br /><br /> -->
                                        <label>Show skills and curriculum  milestones for:</label><br />
                                        <select class="select-input" name="assessed_level" id="select_curriculum_code">
                                            <option value="" disabled selected hidden>Please select an option</option>
                                            @foreach($assessed_labels as $al)
                                                <option value={{$al['scriibi_level_id']}} <?php if(isset($level) && $level == $al['scriibi_level_id']) { echo "selected"; } ?>>{{$al['label']}}</option>
                                            @endforeach
                                        </select>
                                        <span class="bar"></span>
                                    </div>
                                    <div class="col-8 justify-content-between float-right" style="text-align:right">
                                        <img  class="skill-flag-icon " src="/images/flag.png" />
                                        <span>= This skill is a curriculum milestone for the selected level</span>
                                    </div>
                                @else
                                    <div class="col-4">
                                        <br /><br />
                                        <label>Curriculum</label><br />
                                        <select class="select-input" name="curriculum">
                                        @foreach($curriculum as $c)
                                            <option value={{$c['id']}}>{{$c['state']}}</option>
                                        @endforeach
                                        </select>
                                        <span class="bar"></span>
                                    </div>
                                    <div class="col-4">
                                        <br /><br />
                                        <label>School Type</label><br />
                                        <select class="select-input" name="schoolType">
                                        @foreach($schoolTypes as $st)
                                            <option value={{$st['id']}}>{{$st['name']}}</option>
                                        @endforeach
                                        </select>
                                        <span class="bar"></span>
                                    </div>
                                    <div class="col-4">
                                        <br /><br />
                                        <label>Level</label><br />
                                        <select class="select-input" name="assessed_level" id="select_scriibi_curriculum_code">
                                            <option value="" disabled selected hidden>Please select an option</option>
                                            @foreach($assessed_labels as $al)
                                                <option value={{$al['scriibi_level_id']}} <?php if(isset($level) && $level == $al['scriibi_level_id']) { echo "selected"; } ?>>{{$al['label']}}</option>
                                            @endforeach
                                        </select>
                                        <span class="bar"></span>
                                    </div>
                                <!-- use an else condition here when setting up the page for scriibi rubric building and delete this comment -->
                                @endif
                            </div>

                            <!-- skills cards deck-->
                            <div class="card-columns p-0 mt-3" id="check-array">
                                @foreach($traitObjects as $to)
                                    <div class="card border-0 p-0 mt-2 skillset-box skillset-box-<?php echo htmlentities($to['color']); ?> mt-1">
                                        <ul class="list-group list-group-flush ">
                                            <li class="text-white m-0 d-flex justify-content-start px-2">
                                                <!-- load icon address-->

                                                <!-- load trait title -->
                                                <span class="skill-title w-100 pl-0 align-self-center px-2">
                                                    <input type="text" name="trait_id" value={{$to['id']}} hidden />
                                                    {{$to['name']}}
                                                </span>
                                            </li>
                                            <div class="list-group-box">
                                                @if(isset($level))

                                                    <?php $skills = $to['skills'] ?>
                                                    @foreach($skills as $key => $value)
                                                        <li class="list-group-item">
                                                            <!-- load each skill item in the skills category;
                                                            the number of skills items in the skill category vary -->
                                                            <label class="frm_checkbox">
                                                                <input type="checkbox" class="skill-checkbox" name="rubric_skills[]" value={{$key}} />
                                                                <span class="skill-name">{{$value['name']}}</span>
                                                                @if ($value['flag'] === true)
                                                                    <img class="skill-flag-icon float-right" src="/images/flag.png" />
                                                                @endif
                                                            </label>
                                                            <span class="skill-tooltip">{!!$value['description']!!}</span>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="list-group-item">
                                                        <label class="frm_checkbox"></label>
                                                @endif
                                            </div>
                                        </ul>
                                    </div>
                                @endforeach
                                <!-- end of each skill card -->
                            </div>
                            <!-- end of skill cards columns -->
                        </div>
                    <div class="col-12 row justify-content-end mx-0 mt-3 mb-3 px-0">
                        <!-- <button class="btn edir-rubric-btn-clear" type="reset" name="button-clear2">Clear Skills</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @if(!$scriibi_user)
        <div class="col-12 d-flex row justify-content-end mt-3 mb-3 mx-0 px-0">
            <input class="btn assessment-btn p-3" type="submit" name="button" id="rubric-save" value="Save this rubric" />
        </div>
    @else
        <div class="col-12 d-flex row justify-content-end mt-3 mb-3 mx-0 px-0">
            <input class="btn assessment-btn p-3" type="submit" name="button" id="scriibi-rubric-save" value="Save this rubric" />
        </div>
    @endif
    <div class="col-12 row justify-content-end mx-0 mt-3 mb-3 px-0">
            <button class="btn btn-clear" type="reset" name="button-clear2">Clear</button>
    </div>
</form>
</div>
</div>

</div>
