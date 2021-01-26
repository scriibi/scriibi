@extends('layout.mainlayout')
@section('title', 'Assessment-Student List')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <div class="row mt-5 rubric-detail-info-section">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Rubric Name :<span style="font-size:0.8em;font-weight:normal;padding-left:10px">{{$data['name']}}</span></h5>
                </br>
            </div>
            <div class="col-2">
                <!-- put the width and height of this image to the css file later -->
                <span><a href="/rubric-edit/{{$data['id']}}/NA/NA" id="edit-rubric-link"><img src="/images/Edit Rubric Icon and Text.png" alt="edit assessment icon" width="110px" height="25px"></a></span>
            </div>
        </div>
        <div class="row " style="padding-top:1cm">
           
        </div>
        <div class="row mt-3 rubric-detail-info-section">
            <div class="col-12">
                <h5 class="Assessment-Studentlist-title">Skills</h5>
                <ul style="list-style: none">
                    @foreach($data['traits'] as $trait)
                        @foreach($trait['skills'] as $skill)
                            <div class="rubric-info-rubric-skills-div">
                                <span class="rubric-details-colored-dot-dimensions colored-dot-color-<?php echo htmlentities($trait['color']); ?>"></span>
                                <span class="rubric-info-rubric-skills-span">{{$skill['name']}}</span>
                            </div>   
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>

@endsection