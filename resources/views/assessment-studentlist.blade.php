@extends('layout.mainlayout')
@section('title', 'Assessment-Student List')
@section('content')
<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <!-- Assessment Title and edit/delete img-->
        <div class="row mt-5 ">
            <div class="col-10">
                <h5 class="Assessment-Studentlist-title">Assessment Name :<span style="font-size:0.8em;font-weight:normal;padding-left:10px">{{$writingTask->getName()}}</span></h5>
                <br>
            </div>
            <div class="col-2">
                <span><a href="/assessment-edit/{{$writingTask->getId()}}"><img src="/images/edit assessment button.png" alt="edit assessment icon" width="150px" height="28px"></a></span>
            </div>
        </div>
        <div class="row mt-2 ">
            <div class="col-10">
                <h5><strong>Date :</strong></h5>
                <p><?php echo (date("d-m-Y", strtotime($writingTask->getAssessedAt()))); ?></p>
            </div>
        </div><br>
        <div class="row mt-3">
            <!-- this is where the description of assessment task goes -->
            <div class="col-10">
                <p><strong>Additional Notes:</strong></p>
                <!-- <p>hjvsjvbskjbnskfjbn</p> -->
                <p>{{$writingTask->getDescription()}}</p><br>
            </div>
        </div>
        <div style="position:inherit">
            <h5 class="Assessment-Studentlist-title">Rubric Assigned</h5>
            <div class="assessment-list-card-assessment-page px-0 mt-2">
                <span class="text-left">
                    {{$writingTask->getRubric()->getName()}} 
                </span>
                <?php $counter = 0;?>                   
                    @foreach($writingTask->getRubric()->getRubricTraitSkills() as $ts)
                        @foreach($ts->getSkills() as $s)
                <?php $counter++;?>
                        @endforeach
                    @endforeach
                <span class="assessment-list-skill-colors-assessment-page"> 
                                                                                         
                    <span class="aligh-dots-assessment-list-assessment-page">
                    <span class="text-left-skills-colors-assessment-page"> 
                        <?php echo $counter; $count = 0; ?> Skills 
                    </span> 
                        @foreach($writingTask->getRubric()->getRubricTraitSkills() as $ts)
                        @if(!$ts->isSkillsEmpty())
                            <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-<?php echo htmlentities($ts->getColor()); ?>"></span>
                        @else
                            <?php $count++; ?>
                        @endif
                        @endforeach
                        <?php
                            while($count > 0){
                        ?>
                                <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-white"></span>
                        <?php
                            $count--;
                            }
                        ?>
                    </span> 
                </span>
            </div>
        </div>
        <!-- show list of students whether is 'my student' or 'all students' -->
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="Assessment-Studentlist-title">Student List</h5>
            </div>
            <div class="col-12">
                    <div class="header-cells rubric-table-header d-flex justify-content-start mt-5 px-0 pt-0 pb-0">
                        <p class="col-4 text-left px-0">Full Name</p>
                        <p class="col-2 text-left px-0">ID</p>
                        <p class="col-2 text-left px-0">Grade</p>
                        <p class="col-2 text-left px-0">Assessed Level</p>
                        <p class="col-2 text-left px-0">Status</p>
                    </div>
            </div>
            <div class="col-12">
                <?php
                    $students = $writingTask->getStudents();
                    $temp = array();
                    foreach($students as $s){
                        if($s->status == "incomplete"){
                            array_push($temp, $s);
                        }
                    }
                ?>
            @foreach($students as $s)
                @if(!in_array($s, $temp))                
                <a href="/assessment-marking/{{$s->student_Id}}/{{$writingTask->getId()}}" class="row btn-block Assessment-Student-list-cell d-flex justify-content-start px-0" role="button">
                    <p class="col-4 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$s->student_First_Name}} {{$s->student_Last_Name}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$s->Student_Gov_Id}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$s->grade_label}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$s->assessed_level_label}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0 @if($s->status == "completed") {{"complete-style"}} @else {{"incomplete-style"}} @endif">{{$s->status}}</p>
                </a> 
                @endif  
            @endforeach
            @foreach($temp as $t)
            <a href="/assessment-marking/{{$t->student_Id}}/{{$writingTask->getId()}}" class="row btn-block Assessment-Student-list-cell d-flex justify-content-start px-0" role="button">
                    <p class="col-4 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$t->student_First_Name}} {{$t->student_Last_Name}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$t->Student_Gov_Id}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$t->grade_label}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0">{{$t->assessed_level_label}}</p>
                    <p class="col-2 rubric-list-text text-truncate align-self-center text-left  pl-3 mb-0 @if($t->status == "completed") {{"complete-style"}} @else {{"incomplete-style"}} @endif">{{$t->status}}</p>
                </a>    
            @endforeach
            </div>
            <div class="col-12 d-flex justify-content-end mt-3 pr-4">
                <button type="button" name="button" class="btn save-exit-btn col-2"  onclick="location.href='{{ url('/assessment-list') }}'">Save and Exit</button>
            </div>
            <!-- populate more cells as per rubric -->
        </div>
   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection