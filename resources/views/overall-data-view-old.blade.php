@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

<div class="view-by-container">
    <div class="d-inline-block">
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

<!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="row-border order-column cell-border hover nowrap">
    <!-- Table headers -->
    <thead class="header-style" >
        <tr class="header-style text-center">
            <th rowspan="2" id="fullName">Full Name</th>
            <th colspan="2"><p class="text-center">Levels</p></th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
            @foreach($writingTasks as $wt)
                <th class="assessment-date" rowspan="2" style="width:100px" id="date"><a href="/assessment-data-view/{{$wt->writing_task_Id}}"><?php $date = new DateTime($wt->created_Date); echo ($date->format('d M, Y'))?></a></th>
            @endforeach
        </tr>
        <tr class="header-style">
            <th id="grade"><p class="text-center">Grade</p></th>
            <th id="assessed"><p class="text-center">Assessed</p></th>
        </tr>
    </thead>
    <tbody >
        <!-- Student data goes down here -->
        @foreach($dataTable as $dt)
        <tr class="student-row" data-grade={{$dt[3]}} data-assessed={{$dt[5]}}>
            <td headers="Full Name">
              <!-- link this to the student-skill-view -->
           
                <a href="#" class="order-row">{{$dt[1]}}</a>
                </td>
                <td class="justify-content-center student-grade-level" headers="grade">{{$dt[2]}}</td>
                <td class="student-assessed-level" headers="assessed">{{$dt[4]}}</td>
                @foreach($dt[6] as $taskAvg)
                    <td class="assessment-result" headers="date">{{$taskAvg}}</td>
                @endforeach     
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
