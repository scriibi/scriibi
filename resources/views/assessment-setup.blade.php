@extends('layout.mainlayout')
@section('title', 'Asssessment setup')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <!-- main panel -->
    <div class="col-12 col-sm-10 col-md-8">
        <!-- create assessment title -->
        <p class=" mt-5" id="create-assessment-title">Creating Assessment</p>
        <!-- accordion for assessment setup -->
        <!-- step 1: assessment detail -->
    <form class="mt-5" action="index.html" method="post">
        <div class="card card-assessment-style" id="assessment-template">
            <div class="card-body">
                <div class="card-title mb-5 mt-3">
                    <h5><strong>Assessment Details</strong></h5>
                </div>
                <div class="card-text mb-5 mt-4 row">
                    <div class="col-sm-8">
                        <input type="text" class="text-input" id="assessment_name" name="assessment_name" required />
                        <span class="bar"></span>
                        <label class="student-form-label ml-3" for="assessment_name">Title</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="text-input" id="assessment_date" name="assessment_date" required/>
                        <span class="bar"></span>
                        <label class="student-form-label ml-3" for="assessment_date">Date</label>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="" class="col-sm-12 m-0 p-0">Description</label>
                    <input type="textarea" name="" value="" class="col-sm-12 mt-1" id="description-for-assessment">
                </div>
                <h5 class="assessment-settings-title mt-5">Assessment Settings</h5>
                <div class="d-flex justify-content-start mt-3">
                    <label class="assessment-settings-btn">
                        <input type="radio" name="access" value="mine">
                        <span class="btn">Assess <strong>my</strong> students</span>
                    </label>
                    <label class="assessment-settings-btn ml-4">
                        <input type="radio" name="access" value="all">
                        <span class="btn">Assess <strong>all</strong> students</span>
                    </label>
                </div>
                <div class="d-flex justify-content-end mt-4 mb-2">
                    <button id="rubricSelectionBTN" type="button" name="button" class="btn btn-link assessment-btn border-0">Rubric Selection</button>
                </div>
            </div>
        </div>
        <!-- step 2:Rubric Template -->
        <div id="rubric-template" hidden>
            <div class="pt-1 pb-0 " >
                <div>
                    <h5><strong>Rubric Selection</strong></h5>
                </div>
                <div>
                        <div class="header-cells row rubric-table-header d-flex justify-content-between mt-5 pl-3">
                            <p class="col-4 text-left px-0">Rubric Title</p>
                            <p class="col-8 text-left px-0">Skills</p>
                        </div>
                        <!-- populate more cells as per rubric -->
                        <div class="body-cells row mt-2 mx-0 ">
                            <label class="rubric-settings-btn row">
                                <input type="radio" name="access" value="all">
                                <span class="btn col-4">Rubric name goes here</span>
                                <span class="btn col-8">Skill 1, skill 2, skill 3, skill 4, skill 5, skill 6, skill 7</span>
                            </label>
                        </div>
                        <div class="body-cells row mt-2 mx-0 ">
                            <label class="rubric-settings-btn row">
                                <input class="btn rubric-selection" type="radio" name="access" value="all">
                                <span class="col-4">Rubric name goes here</span>
                                <span class="col-8">Skill 1, skill 2, skill 3, skill 4, skill 5, skill 6, skill 7</span>
                            </label>
                        </div>
                        <div class="body-cells row mt-2 mx-0 ">
                            <label class="btn rubric-settings-btn row">
                                <input type="radio" name="access" value="all">
                                <span class="col-4">Rubric name goes here</span>
                                <span class="col-8">Skill 1, skill 2, skill 3, skill 4, skill 5, skill 6, skill 7</span>
                            </label>
                        </div>
                        <div class="d-flex justify-content-between mt-5 mb-2">
                            <button type="button" name="button" class="btn back-btn" id="backBTN">back</button>
                            <a href="/assessment-list"><button type="button" name="button" class="btn assessment-btn border-0" id="createAxBTN">Create Assessment</button></a>
                        </div>
                </div>
            </div>
        </div>
    </form>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection
