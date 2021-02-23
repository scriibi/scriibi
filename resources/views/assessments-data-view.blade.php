@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')

    <div class="col-10">
        <br><br>
    </div>
    <div>
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
                        <span class="radio-circle assessed-filter-radio-circle"></span>
                        <input id="data-view-filter-assessed" type="radio" name="data-view-filter-select" value="assessed" style="display: none">&nbsp;Assessed
                    </label>
                    <label for="data-view-filter-grade">
                        <span class="radio-circle grade-filter-radio-circle"></span>
                        <input id="data-view-filter-grade" type="radio" name="data-view-filter-select" value="grade" style="display: none">&nbsp;Grade
                    </label>
                </div>
            </div>
        </div>
        @if($assessmentList !== null)
        <div class="data-view-assessment-settings">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-7">
                            <h6>Assessment Name</h6>
                            <select id="assessment-data-view-assessment-select" class="filter-select" style="width: 150px">
                                <?php
                                    $assessmentDetails = null;
                                    foreach($assessmentList as $assessment)
                                    {
                                            if($assessment['id'] == $currentAssessment)
                                            {
                                                $assessmentDetails = $assessment;
                                            }
                                            $selected = $assessment['id'] == $currentAssessment ? "selected" : "";
                                            $id = $assessment['id'];
                                            $name = $assessment['name'];
                                            $string = '<option value="' . $id . '"' . $selected . '>' . $name . '</option>';
                                        echo $string;
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-5">
                            <h6>Date</h6>
                            <p>{{$assessmentDetails['assessed_date']}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="assessment-list-card px-0 mt-2 ml-2" style="max-width: 200px">
                            <?php
                                $counter = 0;
                                $set = [];
                            foreach($skills as $skill){
                                $counter++;
                                if(!array_key_exists($skill['traits'][0]['color'], $set)){
                                    $set[$skill['traits'][0]['color']] = true;
                                }
                            }
                            ?>
                            <div class="assessment-list-skill-colors">
                                <span class="text-left-skills-colors"> <?php echo $counter;?> Skills </span>
                                <div class="aligh-dots-assessment-list">
                                    @foreach($set as $key => $value)
                                        <span class="color-span-assessment-list colored-dot-dimensions colored-dot-color-<?php echo htmlentities($key); ?>"></span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pl-5">
                    <a href="/single-assessment/{{$assessmentDetails['id']}}" class="d-block"><button type="button" name="button" class="btn mt-2 pt-1 pb-1 assignment-action-button" >View Assessment</button></a>
                    <div>
                        <button type="button" name="button" class="btn mt-2 pt-1 pb-1 mr-0 d-inline-block assignment-action-button assessment-goals-gen-btn">Generate All Goal Sheets
                            <input type="submit" form="student-marks-form" target="_blank" value="Generate All Goal Sheets" class="goals-gen-submit-input" style="display: none">
                        </button>
                        <div class="d-inline-block" id="myBtn-goal-sheets" style="position: relative; top: 5px; cursor: pointer">
                            <i class="fas fa-info-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    <!-- the container for the table holding student data -->
    @if($dataset !== null)
        <form method="get" action="/goal-sheets" id="student-marks-form" target="_blank">
        @csrf
            <table id="overall-assessment-table" class="table row-border order-column cell-border hover nowrap" style="width: 100%; border-bottom: 1px solid #D2D2D2">
                <!-- Table headers -->
                <thead class="header-style">
                <tr class="header-style text-center">
                    <th  id="fullName" class="text-wrap align-middle" style="width:200px">Full Name</th>
                    <th id="class" class="text-wrap align-middle">Class</th>
                    <th id="grade" class="text-wrap align-middle" style="width: 50px; padding: 25px !important">Grade Level</th>
                    <th id="assessed" class="text-wrap align-middle" style="width: 50px; padding: 20px !important">Assessed Level</th>
                    <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
                    <?php $count = 1;?>
                    @foreach($skills as $skill)
                        <th id="skill{{$count}}" class="assessment-skills text-center skill-column text-wrap align-middle" style="width:100px">{{$skill['name']}}</th>
                        <?php $count++;?>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                <!-- Student data goes down here -->
                @foreach($dataset as $key => $value)
                    <tr class="student-row" data-grade="{{$scriibiLevels[$value['gradeLevel']]}}" data-assessed="{{$scriibiLevels[$value['assessedLevel']]}}" >
                        <td headers="fullName" class="fname" style="width:200px">
                            <button class="testSheet float-right" value="{{$value['name']}}"></button>
                            <?php ((strlen(substr($value['name'], 0, 20))) < (strlen($value['name']))) ? $name = substr($value['name'], 0, 20) . '...' : $name = $value['name']; echo($name) ?>
                        </td>
                        <td class="justify-content-center student-grade-level" headers="class" style="width:100px">{{$value['class']}}</td>
                        <td class="justify-content-center student-grade-level" headers="grade" style="width:100px" >{{$scriibiLevels[$value['gradeLevel']]}}</td>
                        <td class="student-assessed-level" headers="assessed" style="width:100px">{{$scriibiLevels[$value['assessedLevel']]}}</td>
                        <?php $count = 1;?>
                        @foreach($value['skills'] as $k => $v)
                            <td class="student-skill-result trait-skill-result text-center skill-column" headers="skill{{$count}}" data-skillId="{{$k}}" data-mark="{{array_key_exists($v, $scriibiLevels) ? $scriibiLevels[$v] : ' '}}" style="width:100px;">{{ array_key_exists($v, $scriibiLevels) ? $scriibiLevels[$v] : ''}}
                                @if(strval($v) != "")
                                    <input class="student-goal-sheet-info" type="checkbox" value= '{{$k . "?" . $scriibiLevels[$v] . "?" . $value['name'] }}' name="checkbox[]" hidden>
                                @endif
                            </td>
                            <?php $count++;?>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
            <input type="text" class="hiddenArea" name="individual-student" hidden/>
        </form>
    @else
        <div class="no-assessments-notice">There Are No Assessments Available</div>
    @endif
    <style>
        .data-view-settings{
            display: inline-block;
            min-width: 400px;
            max-width: 480px;
            margin-bottom: 10px;
            background: #FFFFFF;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25);
            border-radius: 7px;
            border: none;
            padding: 15px;
            position: relative;
            border: 2px solid white;
        }

        .data-view-assessment-settings{
            display: inline-block;
            margin-left: 50px;
            max-width: 700px;
            min-width: 450px;
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

        .no-assessments-notice{
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
            font-weight: bold;
            color: #4e555b;
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

        // toggle the generate goal sheets modal
        var modal = document.getElementById("generate-goal-sheets-modal");
        modal.removeAttribute('hidden');
        var btn = document.getElementById("myBtn-goal-sheets");
        var span = document.getElementsByClassName("close-goal-sheet-modal")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var text = document.getElementsByClassName("mytext");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                text[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            text[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
@endsection

<div class="modal fade bd-example-modal-lg no-strategies-warning" id="no-strategies-warning-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="rubric-edit-warning-image-content">
                                <img src="/images/info.png" alt="more information" class="info-image">
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <div>
                                <p>There are no strategies for this skill because:</p>
                                <p>1.  The <strong>minimum</strong> requirement for this skill is at a higher level, <strong>or</strong></p>
                                <p>2.  The <strong>maximum</strong> level of accomplishment for this skill has been achieved.</p>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <button class="assessment-delete-button delete-button-green" data-dismiss="modal" style="text-align:center;margin:0">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<div id="generate-goal-sheets-modal" class="generate-gs-modal" hidden>
    <div class="generate-gs-modal-content">
        <span class="close-goal-sheet-modal">&times;</span>
        <div class="slideshow-container" style="width:85%">
            <p class="green-bold">How to generate Goal Sheets</p>
            <div id="imgdiv">
                <div class="mySlides modal-fade-image">
                    <img src="https://media.giphy.com/media/Y3AbrXYYwtHHChK00a/giphy.gif" style="width: 320px" class="modal-image">
                </div>
                <div class="mySlides modal-fade-image">
                    <img src="https://media.giphy.com/media/SXaQdkJxPHGGwXNEeY/giphy.gif" style="width:241px" class="modal-image">
                </div>
                <div class="mySlides modal-fade-image">
                    <img src="https://media.giphy.com/media/WmiuaNK5ARbSIld4Y0/giphy.gif" style="width:285px" class="modal-image">
                </div>
                <div class="mySlides modal-fade-image">
                    <img src="https://media.giphy.com/media/SVaJz9DQfv0xLXPSHm/giphy.gif" style="width:310px" class="modal-image">
                </div>
            </div>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            <div class="mytext">
                <p><span>Step 1:</span> Analyse Students’ Data</p>
                <p>Select ‘Assessed Level’ to view data based on your students’ current level.</p>
                <p>To see where your students sit in relation to their grade, select ‘Grade’.</p>
            </div>
            <div class="mytext">
                <p><span>Step 2:</span> Select Individual Cells for Goal Sheets</p>
                <p>Select the skills you want your students to develop by clicking on the individual cells.  Skills highlighted in light or dark orange indicate students are working below their assessed level for these skills.  These are ‘growth opportunities’, so you may want to generate goals sheets for these particular skills. </p>
            </div>
            <div class="mytext">
                <p><span>Step 3:</span> Generate all Goal Sheets</p>
                <p>To generate all the student goal sheets as one PDF document, click on ‘Generate all Goal Sheets'. </p>
            </div>
            <div class="mytext">
                <p><span>Step 4:</span> (Optional) Generate Individual Goal Sheets</p>
                <p>To generate individual student goal sheets, click on the download button next to the student’s name. This will enable you to print or email goal sheets for individual students. </p>
            </div>
        </div>
    </div>
</div>
