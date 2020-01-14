@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
      <p id="RubricBuilder_title">Rubric Builder</p>
      <div class="accordion" id="rubric-accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse"
              data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Step 1. Choose Rubric Option</button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="card-body">
                <div class="card-text">
                  <button type="button" name="button" class="btn btn-outline-secondary">
                    <p>Create Rubric</p>
                    <p>T1&T2</p>
                  </button>
                  <button type="button" name="button" class="btn btn-outline-secondary">
                    <p>Create Rubric</p>
                    <p>T3&T4</p>
                  </button>
                  <div class="">
                    <button type="button" name="button" class="btn btn-primary btn-sm btn-success" id="step1-next"  disabled>next</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Step 2. Select Text Types and Skills
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <div class="form d-inline-flex p-2 bd-highlight"  id="step2-form">
                <div class="col d-flex justify-content-around">
                  <input type="text" class="form-control" name="" value="Term 1 Rubric">
                </div>
                <div class="col input-group">
                    <div class="input-group-prepend">
                      <select class="" name="">
                        <option value="Code value">Curriculum Codes</option>
                        <option value="">Level 1</option>
                        <option value="">Level 2</option>
                        <option value="">Level 3</option>
                        <option value="">Level 4</option>
                        <option value="">Level 5</option>
                      </select>
                    </div>
                    <input type="text" name="" value="21" readonly >
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
   </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection
