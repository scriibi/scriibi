@extends('layout.mainlayout')
@section('title', 'Data View')
@section('content')
​
​
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

    <div class="generate-goal-sheets">
        <div class="desc">
            <h5>Click on each cell to create individual goals for the student</h5>
        </div>
​
        <div class="generate-buttons">
            <div class="moreInfo-button" id="myBtn-goal-sheets">
                <strong><span>How to Generate Goal Sheets</span></strong>
                <i class="fas fa-info-circle"></i>
            </div>
           <div class="generate-button assessment-btn-styling p-2">
                <input type="submit" form="student-marks-form" target="_blank" value= "Generate All Goal Sheets" class="generate-button1 assessment-btn">
                <img class="generate-image">
            </div>
        </div>
    </div>

    <div class="view-by-container">
    <div class="d-inline-block">
    <strong><span>Analyse student data by:</span></strong>
        <div class="filter-buttons">
            <div class="assessed-button-filter">
                <label class="filter-btn" for="assessment-assessed-filter">
                    <span class="radio-circle"></span>
                    <input type="radio" name="data-filter" id="assessment-assessed-filter" />
                    <p class="pl-1 pt-1">Assessed</p>
                </label>
            </div>
            <div class="grade-button-filter">
                <label class="filter-btn" for="assessment-grade-filter">
                    <span class="radio-circle"></span>
                    <input type="radio" name="data-filter" class="assess-input" id="assessment-grade-filter" />
                    <p class="pl-1 pt-1">Grade</p>
                </label>
            </div>
            <div class="moreInfo-button" id="myBtn-more-info">
                <strong><span>More Info</span></strong>
                <i class="fas fa-info-circle"></i>
            </div>
        </div>
    </div>
</div>
​
    <!-- <p><button type="button" id="assessment-assessed-filter">Assessed</button></p>
    <p><button type="button" id="assessment-grade-filter">Grade</button></p> -->
<form method="get" action="/goal-sheets" id="student-marks-form" target="_blank">
@csrf
    <table id="overall-assessment-table" class="data-view-table row-border order-column cell-border hover position_table" style="margin-left:0px;border-bottom:1px solid #111">
        <!-- Table headers -->
        <thead class="header-style" >
            <tr class="header-style text-center">
                <th name="name" id="fullName" style="width:250px" >Full Name</th>
                <th id="grade" class="text-center">Grade</th>
                <th id="assessed" class="text-center">Assessed</th>
                <th class="assessment-date text-center" id="average" >Average</th>
                <?php $count = 1;?>
                @foreach($skills as $s)
                    <th id="skill{{$count}}" class="assessment-skills text-center" style="width:100px">{{$s->skill_Name}}</th>
                    <?php $count++;?>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($dataTable as $dt)
                <tr class="student-row" data-grade={{$dt[3]}} data-assessed={{$dt[5]}}  >
                    <td headers="fullName" class="fname" style="width:200px">
                        <a href="#" class="fullname order-row text-truncate" style="width:200px"><?php ((strlen(substr($dt[1], 0, 20))) < (strlen($dt[1]))) ? $name = substr($dt[1], 0, 20) . '...' : $name = $dt[1]; echo($name) ?></a>
                        <button class="testSheet" value="{{$dt[1]}}"></button>
                        <!-- <input type="radio" class="testSheet" value="{{$dt[1]}}"> -->
                    </td>
                    <td class="justify-content-center student-grade-level" headers="grade" style="width:100px">{{$dt[2]}}</td>
                    <td class="student-assessed-level" headers="assessed" style="width:100px">{{$dt[4]}}</td>
                    <td headers="progerssion-point"  style="width:100px">{{$dt[6]}}</td>
                    <?php $count = 1;?>
                    @foreach($dt[7] as $key => $value)
                        <td class="student-skill-result text-center" headers="skill{{$count}}" data-skillId="{{$key}}" data-mark="{{$value}}  " style="width:100px;">{{$value}}
                        @if(strval($value) != "")
                            <input class="student-goal-sheet-info" type="checkbox" value= '{{$key . "?" . $value . "?" . $dt[1] }}' name="checkbox[]" hidden>
                        @endif                                                          // skill id   // actual mark   //student name
                        </td>
                        <?php $count++;?>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <input type="text" class="hiddenArea" name="individual-student" hidden/>
</form>


<div id="generate-goal-sheets-modal" class="generate-gs-modal">
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

<div id="more-info-modal" class="more-info-modal">
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

<!--js script for handling the modal-->
<script>
// Get the modal
var modal1 = document.getElementById("more-info-modal");
// Get the button that opens the modal
var btn1 = document.getElementById("myBtn-more-info");
// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close-more-info-modal")[0];
// When the user clicks the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}


// Get the modal
var modal = document.getElementById("generate-goal-sheets-modal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn-goal-sheets");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-goal-sheet-modal")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    console.log('marshmello');
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
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
