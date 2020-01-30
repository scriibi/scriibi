
@extends('layout.mainlayout')
@section('title', 'Data View')
@section('content')

<div class="row mt-4 mx-2 col-12 col-sm-10 col-md-12">


  <!-- the container for the table holding student data -->
  <table id="overall-assessment-table" class="overall-assessment-table row-border order-column ">
      <!-- Table headers -->
      <thead class="header-style" >
          <tr class="header-style text-center">
              <th rowspan="2" id="fullName">Full Name</th>
              <th colspan="2"><p class="text-center">Levels</p></th>
              <!-- IMPORTANT!!!!!!!!! REPLACE ID & INNERHTML WITH THE ASSESSMENT DATE-->
              <th rowspan="2" id="date">dd-mm-yy</th>
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
          <tr class="header-style">
              <th id="grade" class=""><p class="text-center">Grade</p></th>
              <th id="assessed" class=""><p class="text-center">Assessed</p></th>
          </tr>
      </thead>
      <tbody >
          <!-- Student data goes down here -->
          <tr>
              <td headers="Full Name" class="clickable-cell-text_style">
                  <p>Jacob</p>

              </td>
              <td headers="grade" class="clickable-cell-text_style">3</td>
              <td headers="assessed" class="clickable-cell-text_style">5</td>
              <td headers="date" class="clickable-cell-text_style">4.2</td>
              <td headers="date2" class="clickable-cell-text_style">4.2</td>
              <td headers="date3" class="clickable-cell-text_style">4.2</td>
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

@endsection
