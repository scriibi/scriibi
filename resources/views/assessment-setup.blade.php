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
        <div class="card card-assessment-style" id="assessment-template">
            <div class="card-body">
                <div class="card-title mb-0">
                    <h5>Assessment Details</h5>
                </div>
                <div class="card-text mb-0 mt-4 row" id=>
                    <div class="col-sm-8">
                        <label class="" >
                            Assessment Title
                            <input type="text" name="" value="" id="assessment-title" class="">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label for="assessment-date ">
                            Date
                            <input type="date" name="" value="" id="assessment-date">
                        </label>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="" class="col-sm-12 m-0 p-0">Description</label>
                    <input type="textarea" name="" value="" class="col-sm-12 mt-1" id="description-for-assessment">
                </div>
                <h5 class="assessment-settings-title mt-5">Assessment Settings</h5>
                <div class="d-flex justify-content-start mt-3">
                    <button type="button" name="button" class="btn assessment-settings-btn">Assess <strong>my</strong> students </button>
                    <button type="button" name="button" class="btn assessment-settings-btn ml-4">Assess <strong>all</strong> students </button>
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
                    <h5>Rubric Selection</h5>
                </div>

                <div>
                    <form class="mt-5" action="index.html" method="post">
                        <div class="header-cells row rubric-table-header d-flex justify-content-between mt-5 pl-3">
                            <p class="col-5 text-left px-0">Rubric Title</p>
                            <p class="col-6 text-left px-0">Skills</p>
                        </div>
                        <!-- populate more cells as per rubric -->
                        <div class="body-cells row mt-2 mx-0">
                            <button type="button" name="button" class="row btn btn-block rubric-list-row d-flex justify-content-between pl-3 px-0 mx-0">
                                <p class="col-5 rubric-list-text text-truncate align-self-center text-left px-0">Cold Write - Narrative - What I did on the weekend</p>
                                <p class="col-6 rubric-list-text text-truncate align-self-center text-left px-0">Paragraphing, Sequencing, Text Pattern, Ending, Sentence Length, Modality, Vocabulary, Figurative language, Writer’s voice (Tone), Fluency...</p>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between mt-5 mb-2">
                            <button type="button" name="button" class="btn back-btn" id="backBTN">back</button>
                            <a href="/assessment-list"><button type="button" name="button" class="btn assessment-btn border-0" id="createAxBTN">Create Assessment</button></a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection
