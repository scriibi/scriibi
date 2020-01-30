@extends('layout.mainlayout')
@section('title', 'Data View')
@section('content')

<div class="row">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <div class="col-12 col-sm-10 col-md-8">
        <!-- the container for the table holding student data -->
        <table id="overall-assessment-table" class="overall-assessment-table order-column">
            <!-- Table headers -->
            <thead>
                <tr>
                    <th rowspan="2" id="fullName">Full Name</th>
                    <th colspan="2" class="text-center">Levels</th>
                    <!-- replace ID with studentId+date to keep it unique -->
                    <th class="text-center" rowspan="2" id="date">dd-mm-yy</th>
                    <th rowspan="2" id="date2">dd-mm-yy</th>
                    <th rowspan="2" id="date3">dd-mm-yy</th>
                    <th rowspan="2" id="date4">dd-mm-yy</th>
                    <th rowspan="2" id="date5">dd-mm-yy</th>
                    <th rowspan="2" id="date6">dd-mm-yy</th>
                    <th rowspan="2" id="date7">dd-mm-yy</th>
                    <th rowspan="2" id="date8">dd-mm-yy</th>
                    <th rowspan="2" id="date9">dd-mm-yy</th>
                    <th rowspan="2" id="date10">dd-mm-yy</th>
                </tr>
                <tr>
                    <th id="grade">Grade</th>
                    <th id="assessed">Assessed</th>
                </tr>
            </thead>
            <tbody>
                <!-- Student data goes down here -->
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <!-- replace ID with studentId+date to keep it unique -->
                    <td class="assignment-result" headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <td headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <td headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <td headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <td headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <td headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
                <tr>
                    <td headers="Full Name">
                        <p>Jacob</p>
                        <a href="#">Skill Data</a>
                    </td>
                    <td headers="grade">3</td>
                    <td headers="assessed">5</td>
                    <td headers="date">4.2</td>
                    <td headers="date2">4.2</td>
                    <td headers="date3">4.2</td>
                    <td headers="date4">4.2</td>
                    <td headers="date5">4.2</td>
                    <td headers="date6">4.2</td>
                    <td headers="date7">4.2</td>
                    <td headers="date8">4.2</td>
                    <td headers="date9">4.2</td>
                    <td headers="date10">4.2</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
</div>

@endsection