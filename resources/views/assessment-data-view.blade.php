@extends('layout.mainlayout')
@section('title', 'Data View')
@section('content')


<!-- the container for the table holding student data -->
<div class="row mt-5 ">
    <div class="col-10">
        <h5 class="Assessment-Studentlist-title">Assessment Name :</h5>
        <p>{{$writingTask[0]->task_name}}</p>
    </div>
</div>
    <div class="row mt-2 ">
        <div class="col-10">
            <h5 class="Assessment-Studentlist-title">Date :</h5>
            <p><?php echo (date("d-m-Y", strtotime($writingTask[0]->created_Date))); ?></p>
        </div>
    </div>
    
<table id="overall-assessment-table" class="row-border order-column ">
    <!-- Table headers -->
    <thead class="header-style" >
        <tr class="header-style text-center">
            <th rowspan="2" id="fullName">Full Name</th>
            <th colspan="2"><p class="text-center">Levels</p></th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID WITH UNIQUE IDENTIFIER & INNERHTML WITH THE RELATED TITLE-->
            <th class="assessment-date" rowspan="2" id="average">Average</th>
        </tr>
        <tr class="header-style">
            <th id="grade"><p class="text-center"><button type="button" id="assessment-grade-filter">Grade</button></p></th>
            <th id="assessed"><p class="text-center"><button type="button" id="assessment-assessed-filter">Assessed</button></p></th>
            <?php $count = 1;?>
            @foreach($skills as $s)
                <th id="skill{{$count}}" class="assessment-skills"><p class="text-center">{{$s->skill_Name}}</p></th>
                <?php $count++;?>
            @endforeach
            <!-- Implement a foreach loop for each skill and assign it with a unique identifier
                    foreach (skills a s)
                        <th id="student-id-skill2" class="assessment-skills"><p class="text-center">Skill 2</p></th>
                    endforeach
            -->
        </tr>
    </thead>
    <tbody >
        <!-- Student data goes down here -->
        <!-- Implement a foreach loop for each student and assign headers with the unique identifier -->
            @foreach ($dataTable as $dt)
                <tr class="student-row" data-grade={{$dt[3]}} data-assessed={{$dt[5]}}>
                    <td headers="fullName">
                        <a href="#">{{$dt[1]}}</a>
                    </td>
                    <td class="justify-content-center student-grade-level" headers="grade">{{$dt[2]}}</td>
                    <td class="student-assessed-level" headers="assessed">{{$dt[4]}}</td>
                    <td headers="progerssion-point">{{$dt[6]}}</td>
                    <?php $count = 1;?>
                    @foreach($dt[7] as $s)
                        <td class="student-skill-result" headers="skill{{$count}}">{{$s}}</td>
                        <?php $count++;?>
                    @endforeach
                </tr>
            @endforeach
        <!-- <tr class="student-row">
            <td headers="Full Name">
              Jacob Jacobsonmeister
            </td>
            <td class="justify-content-center student-grade-level" headers="grade">3</td>
            <td class="student-assessed-level" headers="assessed">5</td>
            <td headers="progerssion-point">4.2</td>
            <td class="student-skill-result" headers="skill1">4</td>
        </tr> -->
    </tbody>
</table>
@endsection
