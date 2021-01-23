@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

<div class="col-10">
       <br><br>
</div>
{{--<div class="view-by-container">--}}
{{--    <div class="d-inline-block">--}}
{{--        <div class="filter-buttons">--}}
{{--            <div class="assessed-button-filter">--}}
{{--                <label class="filter-btn" for="overall-assessed-filter">--}}
{{--                    <span class="radio-circle"></span>--}}
{{--                    <input type="radio" name="data-filter" id="overall-assessed-filter" />--}}
{{--                    <p class="pl-1 pt-1">Assessed</p>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <div class="grade-button-filter">--}}
{{--                <label class="filter-btn" for="overall-grade-filter">--}}
{{--                    <span class="radio-circle"></span>--}}
{{--                    <input type="radio" name="data-filter" class="assess-input" id="overall-grade-filter" />--}}
{{--                    <p class="pl-1 pt-1">Grade</p>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="data-view-settings">
    <div class="row">
        <div class="col-4">
            <h6><strong>Cohort</strong></h6>
            <div>
                <label for="data-view-range-school">
                    <span class="trait-view-school radio-circle {{$selection == 'school' ? 'fill-circle' : ''}}"></span>
                    <input id="data-view-range-school" type="radio" name="data-view-range-setting-school" value="school" style="display: none">&nbsp;School
                </label>
            </div>
            <div>
                <div>
                    <label for="data-view-range-grade">
                        <span class="trait-view-grade radio-circle {{ $selection == 'grade' ? 'fill-circle' : '' }}"></span>
                        <input id="data-view-range-grade" type="radio" name="data-view-range-setting" value="grade" style="display: none">&nbsp;Grade
                    </label>
                </div>
                <div>
                    <select class="data-view-dropdown" name="data-view-grade-select" {{ $selection == 'grade' ? '' : 'hidden' }}>
                        <option value="none" disabled="disabled" {{ !isset($subselection) ? 'selected' : '' }}>Select one</option>
                        @foreach($grades as $grade)
                            <option value="{{$grade['scriibi_level_id']}}" <?php if($selection == 'grade' && $subselection == $grade['scriibi_level_id']){echo 'selected';} ?>>{{$grade['label']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label for="data-view-range-class">
                        <span class="trait-view-class radio-circle {{ $selection == 'class' ? 'fill-circle' : '' }}"></span>
                        <input id="data-view-range-class" type="radio" name="data-view-range-setting" value="class" style="display: none">&nbsp;Class
                    </label>
                </div>
                <div>
                    <select class="data-view-dropdown" name="data-view-class-select" {{ $selection == 'class' ? '' : 'hidden' }}>
                        <option value="none" disabled="disabled" {{ !isset($subselection) ? 'selected' : '' }}>Select one</option>
                        @foreach($classes as $class)
                            <option value="{{$class['id']}}" <?php if($selection == 'class' && $subselection == $class['id']){echo 'selected';} ?>>{{$class['name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-8">
            <h6><strong>Analyse by</strong></h6>
            <select class="filter-select" name="data-view-trait-filter-select">
                <option value="" disabled="disabled" selected="selected">Select one</option>
                <option value="assessed">Assessed Level</option>
                <option value="grade">Grade Level</option>
            </select>
        </div>
    </div>
</div>
    <!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="table row-border order-column cell-border hover nowrap" style="width: 100%">
    <!-- Table headers -->
    <thead class="header-style">
        <tr class="header-style text-center">
            <th  id="fullName" style="width:200px">Full Name</th>
            <th id="class">Class</th>
            <th id="grade">Grade Level</th>
            <th id="assessed">Assessed Level</th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
            <?php $count = 1;?>
            @foreach($skills as $skill)
                <th id="skill{{$count}}" class="assessment-skills text-center skill-column" style="width:100px">{{strlen($skill['name']) > 10 ? substr($skill['name'], 0, 15) . '...' : $skill['name']}}</th>
                <?php $count++;?>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <!-- Student data goes down here -->
        @foreach($dataset as $key => $value)
        <tr class="student-row" data-grade="{{$scriibiLevels[$value['gradeLevel']]}}" data-assessed="{{$scriibiLevels[$value['assessedLevel']]}}" >
            <td headers="fullName" class="fname" style="width:200px">
            {{$value['name']}}
            </td>
            <td class="justify-content-center student-grade-level" headers="class" style="width:100px">{{$value['class']}}</td>
            <td class="justify-content-center student-grade-level" headers="grade" style="width:100px" >{{$scriibiLevels[$value['gradeLevel']]}}</td>
            <td class="student-assessed-level" headers="assessed" style="width:100px">{{$scriibiLevels[$value['assessedLevel']]}}</td>
            <?php $count = 1;?>
            @foreach($value['skills'] as $key => $value)
                <td class="trait-skill-result text-center skill-column" headers="skill{{$count}}" data-skillId="{{$key}}" data-mark="{{$value}}  " style="width:100px;">{{ array_key_exists($value, $scriibiLevels) ? $scriibiLevels[$value] : ''}}</td>
                <?php $count++;?>
            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
   <style>
       .data-view-settings{
           min-width: 300px;
           max-width: 380px;
           background: #FFFFFF;
           box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25);
           border-radius: 7px;
           border: none;
           padding: 15px;
           position: relative;
           border: 2px solid white;
       }

       .paginate_button{
           padding: 0 !important;
       }

       .page-link{
           color: #33A849 !important;
       }

       .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
           color: white !important;
           border: none !important;
           background-color: transparent !important;
           width: fit-content;
           height: fit-content;
           padding: 0 !important;
           background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2980B9), color-stop(100%, #2980B9))!important;
           background: -webkit-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
           background: -moz-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
           background: -ms-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
           background: -o-linear-gradient(top, #2980B9 0%, #2980B9 100%)!important;
           background: linear-gradient(to bottom, #2980B9 0%, #2980B9 100%)!important;
       }

       table{
           margin: 0 auto;
           width: 100%;
           clear: both;
           border-collapse: collapse;
           table-layout: fixed;
       word-wrap:break-word;
       }

       .skill-column{
           max-width: 150px;
       }

       .filter-select{
           border: 1px solid #c0c0c0;
           border-radius: 7px;
           height: 25px;
       }

       .data-view-dropdown{
           border: 1px solid #33A849;
           border-radius: 7px;
           height: 25px;
           margin-left: 10px;
           min-width: 80px;
       }

       .active > a{
            background-color: #FFFFFF !important;
       }

       .active{
           border: #33a849;
           border-radius: 4px !important;
       }
   </style>

@endsection