@extends('layout.mainlayout')
@section('title', 'Demo')
@section('content')


   <div class="content">
     <div class="content-container">
       <div class="content-container_grid_3">
        Leftmost
       </div>

       <div class="grid_middle">
         <p id="list_title">This is a master list of all your students</p>
         <p>The information below will be used to populate assessments</p>
         <p>and will appear when the data is viewed</p>
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Add students to your list</h5>
             <form>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="inputEmail">First name</label>
                    <input type="text" class="form-control" id="inputEmail">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Last name</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">ID</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Grade</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Assessemnt Level</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4"></label>
                    <input type="button" class="form-control" id="inputPassword4">
                  </div>
                  
                </div>

           </div>

         </div>

       </div>

       <div class="content-container_grid_3">
        Rightmost
       </div>
    </div>








  </div>
@endsection
