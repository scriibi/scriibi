@extends('layout.mainlayout')
@section('title', 'Assessment-Edit List')
@section('content')

<div class="row">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <div class="col-12 col-sm-10 col-md-8">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h1 class="Assessment-Studentlist-heading">Edit Assessment</h1>
            </div>
            <div class="col-1"></div>
        </div>
        <form action="/assessment-update" method="get">
            @csrf
            <!-- Assessment Title and edit/delete img-->
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-10">
                    <h5 class="Assessment-Studentlist-title">Assessment Name :</h5>
                    <p><input class="form-control" type="text" name="assessment_name" value="{{$writingTask['name']}}"></p>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row mt-2 ">
                <div class="col-1"></div>
                <div class="col-10">
                    <h5 class="Assessment-Studentlist-title">Date :</h5>
                    <p><input class="form-control" id="assessment_date" type="date" name="assessment_date" value="{{$writingTask['assessed_date']}}"></p>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-10">
                    <h5 class="Assessment-StudentList-title">Additional Notes :</h5>
                    <p><textarea name="assessment_description" class="form-control" cols="30" rows="10">{{$writingTask['description']}}</textarea></p>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <input type="text" name="task" value="{{$writingTask['id']}}" hidden />
                    <input type="submit" class="btn save-exit-btn col-2" value="Save Changes"></button>
                </div>
                <div class="col-1"></div>
            </div>
        </form>
    </div>
</div>

</div>

@endsection
<div class="date-not-in-period-flash flash-warning-message" hidden="hidden">
    <strong>The date is not within a valid teaching period</strong>
</div>
