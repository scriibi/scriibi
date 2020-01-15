@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <div class="col-12 col-sm-10 col-md-8">

        <!-- rubric Builder -->
        <h4 class="top-divider mb-3 header-text"><strong>Rubric Builder</strong></h4>
        <div class="universal-card p-2">
            <form action="index.html" method="post">
                <!-- term-title+Curriculum -->
                <div class="form-group">
                    <div class="d-flex justify-content-around">
                        <div class="col-sm-8 input-group-lg term-title-box">
                            <input type="text" class="form-control " name="" value="Term 1 Rubric">
                        </div>
                        <select class="col-sm-3 input-group-lg" name="">
                            <option value="Code value">Curriculum Codes</option>
                            <option value="">Level 1</option>
                            <option value="">Level 2</option>
                            <option value="">Level 3</option>
                            <option value="">Level 4</option>
                            <option value="">Level 5</option>
                        </select>
                    </div>
                </div>

                <!-- txt-types checkbox -->
                <div class="d-flex btn-group-toggle justify-content-start" datat-toggle="buttons">
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button-" name="" value="description">Description
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="discussion">Discussion
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="explanation">Explanation
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="historical-narrative">Historical Narrative
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="information-report">Information Report
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="narrative">Narrative
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="persuasive">Persuasive
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="poetry">Poetry
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="procedure">Procedure
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="recount">Recount
                        </label>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success text-nowrap">
                            <input type="checkbox" role="button" name="" value="response">Response
                        </label>
                    </div>

                </div>
            </form>
        </div>

   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
