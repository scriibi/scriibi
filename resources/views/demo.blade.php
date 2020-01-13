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
             <form class="form-row" action="#" method="post">
               <table class="table card-body">
                 <thead>
                   <tr>
                     <th>First name</th>
                     <th>Last name</th>
                     <th>ID</th>
                     <th>Grade</th>
                     <th >Assessemnt Level</th>
                     <th></th>
                 </thead>
                 <tbody class="form-group">
                   <tr>
                     <td><input type="text" class="form-control" id="inputEmail"></td>
                     <td><input type="text" class="form-control" id="inputPassword4"></td>
                     <td><input type="text" class="form-control" id="inputPassword4"></td>
                     <td>
                       <select class="form-control" id="selectGrade">
                         <option>Grade 1</option>
                         <option>Grade 2</option>
                         <option>Grade 3</option>
                         <option>Grade 4</option>
                         <option>Grade 5</option>
                       </select>
                     </td>
                     <td>
                       <select class="form-control" id="selectAssessmentLevel">
                         <option>Grade 1</option>
                         <option>Grade 2</option>
                         <option>Grade 3</option>
                         <option>Grade 4</option>
                         <option>Grade 5</option>
                       </select>
                     </td>
                     <td><button type="submit" class="btn btn-primary">Add</button></td>
                   </tr>

                 </tbody>
               </table>
             </form>
           </div>
         </div>
       </div>

       <div class="content-container_grid_3">
        Rightmost
       </div>
    </div>








  </div>
@endsection
