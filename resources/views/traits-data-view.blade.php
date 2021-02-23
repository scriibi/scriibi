@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

<div class="col-10">
       <br><br>
</div>

<div class="data-view-settings">
    <div class="row">
        <div class="col-4">
            <h6 class="ml-2"><strong>Cohort</strong></h6>
            @if($privilage === 'Leader')
                <div>
                    <label for="data-view-range-school">
                        <span class="trait-view-school radio-circle {{$selection == 'school' ? 'fill-circle' : ''}}"></span>
                        <input id="data-view-range-school" type="radio" name="data-view-range-setting-school" value="school" style="display: none">&nbsp;School
                    </label>
                </div>
            @endif
            <div>
                <div>
                    <label for="data-view-range-grade">
                        <span class="trait-view-grade radio-circle {{ $selection == 'grade' ? 'fill-circle' : '' }}"></span>
                        <input id="data-view-range-grade" type="radio" name="data-view-range-setting" value="grade" style="display: none" {{ $selection == 'grade' ? 'checked' : '' }}>&nbsp;Grade
                    </label>
                </div>
                <div>
                    <select class="data-view-dropdown" name="data-view-grade-select" {{ $selection == 'grade' ? '' : 'hidden' }}>
                        <option value="none" disabled="disabled" {{ $selection == 'grade' && isset($subselection) ? '' : 'selected' }}>Select one</option>
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
                        <input id="data-view-range-class" type="radio" name="data-view-range-setting" value="class" style="display: none" {{ $selection == 'class' ? 'checked' : '' }}>&nbsp;Class
                    </label>
                </div>
                <div>
                    <select class="data-view-dropdown" name="data-view-class-select" {{ $selection == 'class' ? '' : 'hidden' }}>
                        <option value="none" disabled="disabled" {{ $selection == 'class' && isset($subselection) ? '' : 'selected' }}>Select one</option>
                        @foreach($classes as $class)
                            <option value="{{$class['id']}}" <?php if($selection == 'class' && $subselection == $class['id']){echo 'selected';} ?>>{{$class['name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-4">
            <h6 class="ml-2"><strong>Data View</strong></h6>
            <input type="hidden" name="current-view" value="{{$currentView}}" />
            <label for="data-view-range-growth">
                <span class="radio-circle {{ $currentView == 'growth' ? 'fill-circle' : '' }}"></span>
                <input id="data-view-range-growth" type="radio" name="data-view-range" value="growth" style="display: none">&nbsp;Growth
            </label>
            <label for="data-view-range-trait">
                <span class="radio-circle {{ $currentView == 'trait' ? 'fill-circle' : '' }}"></span>
                <input id="data-view-range-trait" type="radio" name="data-view-range" value="trait" style="display: none">&nbsp;Skills
            </label>
            <label for="data-view-range-assessment">
                <span class="radio-circle {{ $currentView == 'assessment' ? 'fill-circle' : '' }}"></span>
                <input id="data-view-range-assessment" type="radio" name="data-view-range" value="assessment" style="display: none">&nbsp;Assessments
            </label>
        </div>
        <div class="col-4">
            <h6 class="d-inline-block"><strong>Analyse by</strong></h6>
            <div class="moreInfo-button d-inline-block" id="myBtn-more-info" style="padding-top: 0; padding-bottom: 0">
                <i class="fas fa-info-circle"></i>
            </div>
            <label for="data-view-filter-assessed">
                <span class="radio-circle  assessed-filter-radio-circle"></span>
                <input id="data-view-filter-assessed" type="radio" name="data-view-filter-select" value="assessed" style="display: none">&nbsp;Assessed
            </label>
            <label for="data-view-filter-grade">
                <span class="radio-circle grade-filter-radio-circle"></span>
                <input id="data-view-filter-grade" type="radio" name="data-view-filter-select" value="grade" style="display: none">&nbsp;Grade
            </label>
        </div>
    </div>
</div>
    <!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="table row-border order-column cell-border hover nowrap" style="width: 100%;">
    <!-- Table headers -->
    <thead class="header-style">
        <tr class="header-style text-center">
            <th  id="fullName" class="align-middle" style="width:200px">Full Name</th>
            <th id="class" class="align-middle">Class</th>
            <th id="grade" class="align-middle text-wrap" style="width: 50px; padding: 25px !important">Grade Level</th>
            <th id="assessed" class="align-middle text-wrap" style="width: 50px; padding: 20px !important">Assessed Level</th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
            <?php $count = 1;?>
            @foreach($skills as $skill)
                <th id="skill{{$count}}" class="assessment-skills text-center text-wrap align-middle skill-column" style="width:100px">{{$skill['name']}}</th>
                <?php $count++;?>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <!-- Student data goes down here -->
        @foreach($dataset as $key => $value)
        <tr class="student-row" data-grade="{{$scriibiLevels[$value['gradeLevel']]}}" data-assessed="{{$scriibiLevels[$value['assessedLevel']]}}" >
            <td headers="fullName" class="fname" style="width:200px">
                <?php ((strlen(substr($value['name'], 0, 20))) < (strlen($value['name']))) ? $name = substr($value['name'], 0, 20) . '...' : $name = $value['name']; echo($name) ?>
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
           min-width: 400px;
           max-width: 480px;
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

    <script>
        // toggle the more info modal
        let modal1 = document.getElementById("more-info-modal");
        modal1.removeAttribute('hidden');
        let btn1 = document.getElementById("myBtn-more-info");
        let span1 = document.getElementsByClassName("close-more-info-modal")[0];
        btn1.onclick = function() {
            modal1.style.display = "block";
        }
        span1.onclick = function() {
            modal1.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>

@endsection

<div id="more-info-modal" class="more-info-modal" hidden>
    <div class="more-info-modal-content">
        <span class="close-more-info-modal">&times;</span>
        <div class="more-info-row">
            <p class="green-bold">More Information</p>
            <div class="more-info-column" style="width:100%">
                <p><strong>Your students’ data has been gathered and presented for each assessment.</strong></p>
                <p>
                <ul>
                    <li>
                        You can then further analyse the data by their <strong>Grade</strong>  or by their <strong>Assessed Level</strong>.
                    </li>
                </ul>
                </p>
                <p>
                <ul>
                    <li>
                        Your students’ performance is colour coded to show their progression and highlight areas that need improvement.
                    </li>
                </ul>
                </p>
            </div>
            <div class="more-info-column" style="width:100%">
                <p><strong>Your student’s performance is:</strong></p>
                <div>
                    <p><span class="more-info-dot" style="background:#8AEA8B"></span><sup class="more-info-sup"><strong>1+</strong> years <strong>above</strong></sup></p>
                </div>
                <div>
                    <p><span class="more-info-dot" style="background:#C3FEC3"></span><sup class="more-info-sup"><strong>0.5</strong> years <strong>above</strong></sup></p>
                </div>
                <div>
                    <p><span class="more-info-dot" style="background:#FFFFFF;border: 2px solid #c0c0c0;border-radius: 50%;"></span><sup class="more-info-sup">at the assessed level</sup></p>
                </div>
                <div>
                    <p><span class="more-info-dot" style="background:#FFD7B8"></span><sup class="more-info-sup"><strong>0.5</strong> years <strong>below</strong></sup></p>
                </div>
                <div>
                    <p><span class="more-info-dot" style="background:#FD9827"></span><sup class="more-info-sup"><strong>1+</strong> years <strong>below</strong></sup>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
