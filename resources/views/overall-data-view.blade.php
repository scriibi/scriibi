@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

<div class="view-by-container">
    <p>View By</p>
    <div class="d-inline-block">
        <label class="filter-btn" for="overall-assessed-filter">
            <span class="radio-circle"></span>
            <input type="radio" name="data-filter" id="overall-assessed-filter" />
            <p>Assessed</p>
        </label>
        <label class="filter-btn" for="overall-grade-filter">
            <span class="radio-circle"></span>
            <input type="radio" name="data-filter" class="assess-input" id="overall-grade-filter" />
            <p>Grade</p>
        </label>
    </div>
</div>

<!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="row-border order-column ">
    <!-- Table headers -->created_Date
    <thead class="header-style" >
        <tr class="header-style text-center">
            <th rowspan="2" id="fullName">Full Name</th>
            <th colspan="2"><p class="text-center">Levels</p></th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
            @foreach($writingTasks as $wt)
                <th class="assessment-date" rowspan="2" id="date"><a href="#"><?php $date = new DateTime($wt->created_Date); echo ($date->format('d-m-Y'))?></a></th>
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
        <tr class="student-row">
            <td headers="Full Name">
              <!-- link this to the student-skill-view -->
           
                <a href="#">{{$dt[1]}}</a>
                </td>
                <td class="justify-content-center student-grade-level" headers="grade">{{$dt[2]}}</td>
                <td class="student-assessed-level" headers="assessed">{{$dt[3]}}</td>
                @foreach($dt[4] as $taskAvg)
                    <td class="assessment-result" headers="date">{{$taskAvg}}</td>
                @endforeach     
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
