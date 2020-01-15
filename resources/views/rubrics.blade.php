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
            <form class="" action="index.html" method="post">
                <div class="form-group d-inline-flex p-2 bd-highlight"  id="step2-form">
                    <div class="col d-flex justify-content-between">
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
                    </div>
                </div>
            </form>
        </div>

   </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
