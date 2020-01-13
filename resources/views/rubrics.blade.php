@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')


   <div class="content">
     <div class="content-container">
       <div class="content-container_grid_3">
        Leftmost---rubrics
       </div>
       <div class="grid_middle">
         <p id="list_title">This is a master list of all your students</p>
         <p>The information below will be used to populate assessments</p>
         <p>and will appear when the data is viewed</p>
         <div class="card">
           <div class="card-body">
             <h5 class="card-title">Student List</h5>
             <form class="form-row" action="#" method="post">
               <table class="table card-body ">
                 <thead>
                   <tr class="table-head">
                     <th>First name</th>
                     <th>Last name</th>
                     <th>ID</th>
                     <th>Grade</th>
                     <th>Assessemnt Level</th>
                     <th></th>
                  </tr>
                 </thead>
                 <tbody >
                   <tr>
                     <td class="form-group "><input type="text" class="form-control form-control-sm" id="inputEmail"></td>
                     <td><input type="text" class="form-control form-control-sm" id="inputPassword4"></td>
                     <td><input type="text" class="form-control form-control-sm" id="inputPassword4"></td>
                     <td>
                       <select class="form-control form-control-sm" id="selectGrade">
                         <option>Grade 1</option>
                         <option>Grade 2</option>
                         <option>Grade 3</option>
                         <option>Grade 4</option>
                         <option>Grade 5</option>
                       </select>
                     </td>
                     <td>
                       <select class="form-control form-control-sm" id="selectAssessmentLevel">
                         <option>Grade 1</option>
                         <option>Grade 2</option>
                         <option>Grade 3</option>
                         <option>Grade 4</option>
                         <option>Grade 5</option>
                       </select>
                     </td>
                     <td><button type="submit" class="btn btn-primary btn-sm">Add</button></td>
                   </tr>
                   <td class="form-group "><input type="text" class="form-control form-control-sm" id="inputEmail"></td>
                   <td><input type="text" class="form-control form-control-sm" id="inputPassword4"></td>
                   <td><input type="text" class="form-control form-control-sm" id="inputPassword4"></td>
                   <td>
                     <select class="form-control form-control-sm" id="selectGrade">
                       <option>Grade 1</option>
                       <option>Grade 2</option>
                       <option>Grade 3</option>
                       <option>Grade 4</option>
                       <option>Grade 5</option>
                     </select>
                   </td>
                   <td>
                     <select class="form-control form-control-sm" id="selectAssessmentLevel">
                       <option>Grade 1</option>
                       <option>Grade 2</option>
                       <option>Grade 3</option>
                       <option>Grade 4</option>
                       <option>Grade 5</option>
                     </select>
                   </td>
                   <td><button type="submit" class="btn btn-primary btn-sm">Edit</button></td>


                   <tr>

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
