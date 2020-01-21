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
        <div class="accordion card-assessment-style" id="assessmentAccordion">
            <!-- step 1: assessment detail -->
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-0">
                        <h5>Step 1: assessment details</h5>
                    </div>
                    <div class="card-text mb-0 mt-4 row" id=>
                        <div class="col-sm-8">
                            <label class="" >
                                Assessment Title
                                <input type="text" name="" value="" id="assessment-title" class="">
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label for="assessment-date">
                                Date
                                <input type="date" name="" value="" id="assessment-date">
                            </label>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="" class="col-sm-12 m-0 p-0">Description</label>
                        <input type="textarea" name="" value="" class="col-sm-12 mt-1" id="description-for-assessment">
                    </div>
                    <div class="d-flex justify-content-end mt-4 mb-2">
                        <button type="button" name="button" class="btn btn-link assessment-btn border-0" data-toggle="collapse"
                        data-target="#rubric-template" aria-expanded="true" aria-controls="rubric-template">Next</button>
                    </div>
                </div>
            </div>
            <!-- step 2:Rubric Template -->
            <div class="card" >
                <div class="card-body pt-1 pb-0">
                    <div class="card-title" >
                        <h5>Step 2: Rubric Template</h5>
                    </div>
                    <div class="collapse"  id="rubric-template">
                        <div class="card-text">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>

                            <div class="d-flex justify-content-end mt-4 mb-2">
                                <button type="button" name="button" class="btn btn-link assessment-btn border-0" data-toggle="collapse"
                                data-target="#student-options" aria-expanded="true" aria-controls="student-options">Next</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- step 3:Student Option -->
            <div class="card">
                <div class="card-body pt-1 pb-0">
                    <div class="card-title">
                        <h5>Step 3: Student Options</h5>
                    </div>
                    <div class="collapse"  id="student-options">
                        <div class="card-text">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <button type="button" name="button" class="btn btn-lg assessment-btn border-0">Save</button>

        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection
