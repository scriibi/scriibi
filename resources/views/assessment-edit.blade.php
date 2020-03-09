@extends('layout.mainlayout')
@section('title', 'Assessment-Edit List')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
    <h1 class="Assessment-Studentlist-heading">Edit Assessment</h1>
    <form action="/assessment-update" method="get">
        @csrf
        <!-- Assessment Title and edit/delete img-->
        <div class="row mt-5 ">
            <div class="col-10">
            
                <h5 class="Assessment-Studentlist-title">Assessment Name :</h5>
                <p><input class="form-control" type="text" name="assessment_name" value="{{$writing_task->getName()}}"></p>
            </div>
    
        </div>
        <div class="row mt-2 ">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Date :</h5>
                <p><input class="form-control" type="date" name="assessment_date" value="{{$writing_task->getAssessedAt()}}"></p>
            </div>
        </div>
        <div class="row mt-3">
            <!-- this is where the description of assessment task goes -->
            <div class="col-10">
                <h5 class="Assessment-StudentList-title">Additional Notes :</h5>
                <p><textarea name="assessment_description" class="form-control" cols="30" rows="10">{{$writing_task->getDescription()}}</textarea></p>
            </div>
        </div>
        <input type="text" name="assessment_id" value="{{$writing_task->getId()}}" hidden />
        <input type="submit" class="btn save-exit-btn col-2" value="Save Changes"></button>
    </form>
        <!-- <div class="col-12 d-flex justify-content-end mt-3 pr-4">
            <button type="button" name="button" class="btn save-exit-btn col-2"  onclick="location.href='{{ url('/assessment-list') }}'">Save and Exit</button>
        </div> -->
        <!-- populate more cells as per rubric -->
        </div>
   </div>
    
</div>

@endsection
