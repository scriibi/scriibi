@extends('layout.mainlayout')
@section('title', 'Student List')
@section('content')


<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <div class="col-12 col-sm-10 col-md-8">
       
       <!-- Add students -->
        <h4 class="top-divider mb-3 header-text"><strong>Add Students</strong></h4>
        <div class="add-student-card p-2">
           <form method="post">
                <div class="row ml-2 mr-2">
                    <div class="col-11">
                        <div class="student-form-inputs">
                            <input type="text" class="text-input" id="firstName" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="firstName">First Name</label>
                        </div>
                        <div class="student-form-inputs">
                            <input type="text" class="text-input" id="lastName" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="lastName">Last Name</label><br />
                        </div>
                        <div class="student-form-inputs">
                            <input type="text" class="text-input" id="id" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="id">ID</label><br />
                        </div>
                        <div class="student-form-inputs">
                            <select class="select-input" id="grade" required>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="grade">Grade</label><br />
                        </div>
                        <div class="student-form-inputs">
                            <select class="select-input" id="assignmentLevel" required>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="assignmentLevel">Assignment Level</label><br />
                        </div>
                    </div>
                    <div class="col-1">
                        <input type="submit" class="scriibi-primary-btn" id="submitBtn" value="Add" />
                    </div>
               </div>
           </form>
        </div>
       <!-- /Add Students -->
       
       <!-- Student List -->
       <h5 class="mt-5 header-text"><strong>Student List</strong></h5>
        <div class="card mt-3">
            <div class="card-body">
                <form class="form-row" action="#" method="post">
                    <table class="card-body">
                        <thead class="border-bottom mb-3">
                            <tr class="table-head">
                                <th>First name</th>
                                <th>Last name</th>
                                <th>ID</th>
                                <th>Grade</th>
                                <th>Assessemnt Level</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    <!-- /Student List -->
   </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
