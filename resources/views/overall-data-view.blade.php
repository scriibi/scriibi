@extends('layout.mainlayout')
@section('title', 'Overall Data View')
@section('content')


<!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="row-border order-column ">
    <!-- Table headers -->
    <thead class="header-style" >
        <tr class="header-style text-center">
            <th rowspan="2" id="fullName">Full Name</th>
            <th colspan="2"><p class="text-center">Levels</p></th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE OR A UNIQUE IDENTIFIER-->
            <th class="assessment-date" rowspan="2" id="date"><a href="#">dd-mm-yy</a></th>
        </tr>
        <tr class="header-style">
            <th id="grade" class=""><p class="text-center">Grade</p></th>
            <th id="assessed" class=""><p class="text-center">Assessed</p></th>
        </tr>
    </thead>
    <tbody >
        <!-- Student data goes down here -->
        <tr>
            <td headers="Full Name">
              <!-- link this to the student-skill-view -->
              <a href="#">Jacob Jacobsonmeister</a>
            </td>
            <td headers="grade">3</td>
            <td headers="assessed">5</td>
            <td headers="date">4.2</td>
        </tr>
    </tbody>
</table>

@endsection
