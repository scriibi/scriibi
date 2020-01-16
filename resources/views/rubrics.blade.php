@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')


<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>

   <div class="col-12 col-sm-10 col-md-8">

        <!-- Rubric Builder -->
        <h4 class="top-divider mb-3 header-text" id="RubricBuilder_title"><strong>Rubric Builder</strong></h4>

        <!-- card contains 2 forms in one form -->
        <div class="card universal-card-rubric p-2">
            <div class="card-body">
                <form action="index.html" method="post" class="p-2">
                    <!-- term-title+Curriculum -->
                    <div class="card-text">
                        <div class=" form-group d-flex justify-content-around ">
                            <input type="text" class="col-9 input-group-sm rubric-border-box " name="" value="Term 1 Rubric">
                            <select class="col-2.5 input-group-sm rubric-border-box" name="">
                                <option value="Code value">Curriculum Codes</option>
                                <option value="">Level 1</option>
                                <option value="">Level 2</option>
                                <option value="">Level 3</option>
                                <option value="">Level 4</option>
                                <option value="">Level 5</option>
                            </select>
                        </div>

                        <!-- txt-types checkboxs -->
                        <div class="d-flex flex-wrap p-2 btn-group-toggle col-11" datat-toggle="buttons">
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button-" name="" value="description">Description
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="discussion">Discussion
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="explanation">Explanation
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="historical-narrative">Historical Narrative
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="information-report">Information Report
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="narrative">Narrative
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="persuasive">Persuasive
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="poetry">Poetry
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="procedure">Procedure
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type ">
                                    <input type="checkbox" role="button" name="" value="recount">Recount
                                </label>
                            </div>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success text-nowrap btn-text-type">
                                    <input type="checkbox" role="button" name="" value="response">Response
                                </label>
                            </div>
                        </div>
                        <!-- skills cards      -->
                        <div class="card-columns">
                            <!-- card for ideas -->
                            <div class="card">
                                <div class="card-body">

                                </div>

                            </div>

                            <!-- card forrganisation -->
                            <div class="card">

                            </div>

                            <!-- card for word choice -->
                            <div class="card">

                            </div>

                            <!-- card for Conventions -->
                            <div class="card">

                            </div>

                            <!-- card for sentence fluency -->
                            <div class="card">

                            </div>

                            <!-- card for Voice -->
                            <div class="card">

                            </div>

                            <!-- card for Other skills -->
                            <div class="card">

                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-body">

            </div>
            <div class="card-body">

            </div>
            <div class="card-body">

            </div>
            <div class="card-body">

            </div>
            <div class="card-body">

            </div>
            <div class="card-body">

            </div>
            <div class="card-body">

            </div>

        </div>

   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
