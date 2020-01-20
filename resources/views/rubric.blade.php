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
          <div class="card-header">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse"
              data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Step 1. Choose Rubric Option</button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="card-text d-flex justify-content-between">
                <button type="button" name="button" class="btn btn-outline-secondary">
                  <p>Create Rubric</p>
                  <p>T1&T2</p>
                </button>
                <button type="button" name="button" class="btn btn-outline-secondary ">
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
                <div class="form-group d-inline-flex p-2 bd-highlight"  id="step2-form">
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
                      <input type="text" name="" value="" readonly >
                  </div>
                </div>
                <div class="form-group row">
                  <p id="text-type-title">Optional: Select 1 or more text types to guide skills selection</p>
                </div>
                <div class="form-group row" id="checkbox-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Description</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox1">Discussion</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox1">Explanation</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                    <label class="form-check-label" for="inlineCheckbox1">Historical Narrative</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                    <label class="form-check-label" for="inlineCheckbox1">Information Report</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                    <label class="form-check-label" for="inlineCheckbox1">Narrative</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                    <label class="form-check-label" for="inlineCheckbox1">Persuasive</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                    <label class="form-check-label" for="inlineCheckbox1">Poetry</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                    <label class="form-check-label" for="inlineCheckbox1">Procedure</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                    <label class="form-check-label" for="inlineCheckbox1">Recount</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11">
                    <label class="form-check-label" for="inlineCheckbox1">Response</label>
                  </div>
                </div>
                <div class="card-columns">
                  <div class="card card-ideas h-auto d-inline-block ">
                    <div class="card-body idea-body">
                      <div class="card-text skill-cat">
                        <h5 class="skill-cat text-white">Ideas</h5>
                      </div>

                      <div class="form-check body-list bg-white">
                        <div class="d-block border-for-checkbox">
                          <input class="form-check-input" type="checkbox" name="" value="">
                          <label class="form-check-label" for="">12</label>
                        </div>
                        <div class="">
                          <input class="form-check-input"type="checkbox" name="" value="">
                          <label class="form-check-label" for="">56</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card h-auto d-inline-block">
                    <div class="card-header">
                      <h5 class="skill-cat">Organisation</h5>
                    </div>
                    <div class="card-body">
                      <p>2</p>
                    </div>
                  </div>
                  <div class="card h-auto d-inline-block">
                    <div class="card-header">
                      <h5 class="skill-cat">Word Choice</h5>
                    </div>
                    <div class="card-body">
                      <p>3</p>
                    </div>
                  </div>
                  <div class="card h-auto d-inline-block">
                    <div class="card-header">
                      <h5 class="skill-cat">Conventions</h5>
                    </div>
                    <div class="card-body">
                      <p>4</p>
                    </div>
                  </div>
                  <div class="card h-auto d-inline-block">
                    <div class="card-header">
                      <h5 class="skill-cat">Sentence Fluency</h5>
                    </div>
                    <div class="card-body">
                      <p>5</p>
                    </div>
                  </div>
                  <div class="card h-auto d-inline-block">
                    <div class="card-header">
                      <h5 class="skill-cat">Voice</h5>
                    </div>
                    <div class="card-body">
                      <p>6</p>
                    </div>
                  </div>
                  <div class="card h-auto d-inline-block">
                    <div class="card-header">
                      <h5 class="skill-cat">Other Skills</h5>
                    </div>
                    <div class="card-body">
                      <p>7</p>
                    </div>
                  </div>
                </div>
                <div class="form-group row" id="term1-savebtn">
                  <button type="button" name="button" class="btn btn-success btn-sm">Save</button>
                </div>

                <fieldset id="term2-form" class="form-group row" hidden>
                  <div class="form-group d-inline-flex p-2 bd-highlight"  id="step2-form">
                    <div class="col d-flex justify-content-around">
                      <input type="text" class="form-control" name="" value="Term 2 Rubric">
                    </div>
                    <div class="">
                      <button type="button" name="button" class="btn btn-success ">Auto-pop term 2 skills</button>

                    </div>
                  </div>
                  <div class="form-group row">
                    <p id="text-type-title">Optional: Select 1 or more text types to guide skills selection</p>
                  </div>
                  <div class="form-group row" id="checkbox-group">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">Description</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox1">Discussion</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                      <label class="form-check-label" for="inlineCheckbox1">Explanation</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                      <label class="form-check-label" for="inlineCheckbox1">Historical Narrative</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                      <label class="form-check-label" for="inlineCheckbox1">Information Report</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                      <label class="form-check-label" for="inlineCheckbox1">Narrative</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                      <label class="form-check-label" for="inlineCheckbox1">Persuasive</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                      <label class="form-check-label" for="inlineCheckbox1">Poetry</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                      <label class="form-check-label" for="inlineCheckbox1">Procedure</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                      <label class="form-check-label" for="inlineCheckbox1">Recount</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11">
                      <label class="form-check-label" for="inlineCheckbox1">Response</label>
                    </div>
                  </div>
                  <div class="card-columns">
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Ideas</h5>
                      </div>
                      <div class="card-body">
                        <p>1</p>
                      </div>
                    </div>
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Organisation</h5>
                      </div>
                      <div class="card-body">
                        <p>2</p>
                      </div>
                    </div>
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Word Choice</h5>
                      </div>
                      <div class="card-body">
                        <p>3</p>
                      </div>
                    </div>
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Conventions</h5>
                      </div>
                      <div class="card-body">
                        <p>4</p>
                      </div>
                    </div>
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Sentence Fluency</h5>
                      </div>
                      <div class="card-body">
                        <p>5</p>
                      </div>
                    </div>
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Voice</h5>
                      </div>
                      <div class="card-body">
                        <p>6</p>
                      </div>
                    </div>
                    <div class="card h-auto d-inline-block">
                      <div class="card-header">
                        <h5>Other Skills</h5>
                      </div>
                      <div class="card-body">
                        <p>7</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row" id="term1-savebtn">
                    <button type="button" name="button" class="btn btn-success btn-sm">Save</button>
                  </div>

                </fieldset>
            </div>

          </div>

        </div>
        <div class="" id="btn-reviewRubric">
          <button type="button" name="button" class="btn btn-success btn-md" >Review</button>
        </div>
      </div>
   </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection
