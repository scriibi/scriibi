@extends('layout.mainlayout')
@section('title', 'Data View')
@section('content')


<!-- the container for the table holding student data -->
<table id="overall-assessment-table" class="row-border order-column ">
    <!-- Table headers -->
    <thead class="header-style" >
        <tr class="header-style text-center">
            <th rowspan="2" id="fullName">Full Name</th>
            <th colspan="2"><p class="text-center">Levels</p></th>
            <!-- IMPORTANT!!!!!!!!! REPLACE ID WITH UNIQUE IDENTIFIER & INNERHTML WITH THE RELATED TITLE-->
            <th class="assessment-date" rowspan="2" id="progression-point">Avg</th>
        </tr>
        <tr class="header-style">
            <th id="grade"><p class="text-center"><button type="button" id="assessment-grade-filter">Grade</button></p></th>
            <th id="assessed"><p class="text-center"><button type="button" id="assessment-assessed-filter">Assessed</button></p></th>
            <th id="skill1" class="assessment-skills"><p class="text-center">Skill 1</p></th>
            <!-- Implement a foreach loop for each skill and assign it with a unique identifier
                    foreach (skills a s)
                        <th id="student-id-skill2" class="assessment-skills"><p class="text-center">Skill 2</p></th>
                    endforeach
            -->
        </tr>
    </thead>
    <tbody >
        <!-- Student data goes down here -->
        <!-- Implement a foreach loop for each student and assign headers with the unique identifier
                    foreach (student as stud)
                        <tr class="student-row">
                            <td headers="fullName">
                              <a href="#">Jacob Jacobsonmeister</a>
                            </td>
                            <td class="justify-content-center student-grade-level" headers="grade">3</td>
                            <td class="student-assessed-level" headers="assessed">5</td>
                            <td headers="progerssion-point">4.2</td>
                            <td class="student-skill-result" headers="student-id-skill2">4</td>
                        </tr>
                    endforeach
            -->
        <tr class="student-row">
            <td headers="Full Name">
              Jacob Jacobsonmeister
            </td>
            <td class="justify-content-center student-grade-level" headers="grade">3</td>
            <td class="student-assessed-level" headers="assessed">5</td>
            <td headers="progerssion-point">4.2</td>
            <td class="student-skill-result" headers="skill1">4</td>
        </tr>
        <tr class="student-row">
            <td headers="Full Name">
              >Brian Allstar
            </td>
            <td class="justify-content-center student-grade-level" headers="grade">5</td>
            <td class="student-assessed-level" headers="assessed">6</td>
            <td headers="progerssion-point">5.4</td>
            <td class="student-skill-result" headers="skill1">4.2</td>
        </tr>
    </tbody>
</table>

@endsection
