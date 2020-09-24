@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

<div class="col-10">
       <p></br></br>
        </p>
</div>
<div class="view-by-container">
    <div class="d-inline-block">
        <div class="filter-buttons">
            <div class="assessed-button-filter">
                <label class="filter-btn" for="overall-assessed-filter">
                    <span class="radio-circle"></span>
                    <input type="radio" name="data-filter" id="overall-assessed-filter" />
                    <p class="pl-1 pt-1">Assessed</p>
                </label>
            </div>
            <div class="grade-button-filter">
                <label class="filter-btn" for="overall-grade-filter">
                    <span class="radio-circle"></span>
                    <input type="radio" name="data-filter" class="assess-input" id="overall-grade-filter" />
                    <p class="pl-1 pt-1">Grade</p>
                </label>
            </div>
        </div>  
    </div>
</div>

    <!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="row-border order-column cell-border hover nowrap" style="margin-left:0px;border-bottom:1px solid #111">
    <!-- Table headers -->
    <thead class="header-style" >
        <tr class="header-style text-center">
            <th  id="fullName" style="width:200px">Full Name</th>
            <th id="grade">Grade</th>
            <th id="assessed">Assessed</th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
            @foreach(array_reverse($writingTasks) as $wt)
            
                <th class="writingtask  text-left" style="width:100px;" id="date">
                
                <a href="/assessment-data-view/{{$wt->writing_task_Id}}" style ="text-decoration:none">
                <span class="task-desc">{{$wt->task_name}}</span>
                <p class=" text-truncate text-center dataview-taskname" >{{$wt->task_name}}</p>
                <p class="text-center" style="color:#04A020"><?php 
                //$date = new DateTime($wt->created_Date); 
                 //echo ($date->format('d M, Y'));
                 echo (date("d-m-Y", strtotime($wt->created_Date))); ?>
                 </p></a></th>
            
            @endforeach
        </tr>
        
    </thead>
    <tbody >
        <!-- Student data goes down here -->
        @foreach($dataTable as $dt)
        <tr class="student-row" data-grade={{$dt[3]}} data-assessed={{$dt[5]}} >
            <td headers="Full Name">
              <!-- link this to the student-skill-view -->
           
                <a href="#" class="order-row text-truncate" style="width:200px">{{$dt[1]}}</a>
                </td>
                <td class="justify-content-center student-grade-level" headers="grade">{{$dt[2]}}</td>
                <td class="student-assessed-level" headers="assessed">{{$dt[4]}}</td>
                @foreach(array_reverse($dt[6]) as $taskAvg)
                    <td class="assessment-result" headers="date">{{$taskAvg}}</td>
                @endforeach     
        </tr>
        @endforeach
    </tbody>
</table>

    
@endsection