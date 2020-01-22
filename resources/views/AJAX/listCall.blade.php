<!-- Student detail card -->
       @foreach ($students as $s)
        <div class="universal-card mt-2">        
                <div class="student-details row ml-2 mr-2 pt-2">
                    <div class="col-10">
                        <div class="student-form-inputs fname-input">
                            <p>{{$s->student_First_Name}}</p>
                        </div>
                        <div class="student-form-inputs lname-input">
                            <p>{{$s->student_Last_Name}}</p>
                        </div>
                        <div class="student-form-inputs id-input">
                            <p>{{$s->Student_Gov_Id}}</p>
                        </div>
                        <div class="student-form-inputs grade-input">
                            <p>{{$s->grade_label}}</p>
                        </div>
                        <div class="student-form-inputs grade-input">
                            <p>{{$s->assessed_level_label}}</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="student-icon-group">
                            <button class="icon-btn edit-student-button" type="button">✏</button>
                            <button onclick="location.href='{{ url('/studentDelete/' . $s->student_Id) }}'" class="icon-btn" type="button">🗑</button>
                        </div>
                    </div>
                </div>        
            <!-- /student details -->

            <!-- Edit student form -->
            <form class="edit-form d-none" method="post">
            @csrf
                <div class="row ml-2 mr-2">
                    <div class="col-10">
                        <div class="student-form-inputs fname-input">
                            <input type="text" class="text-input" id="{{$s->student_First_Name}}{{$s->Student_Gov_Id}}" value="{{$s->student_First_Name}}" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="{{$s->student_First_Name}}{{$s->Student_Gov_Id}}"></label>
                        </div>
                        <div class="student-form-inputs lname-input">
                            <input type="text" class="text-input" id="{{$s->student_Last_Name}}{{$s->Student_Gov_Id}}" value="{{$s->student_Last_Name}}" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="{{$s->student_Last_Name}}{{$s->Student_Gov_Id}}"></label>
                        </div>
                        <div class="student-form-inputs id-input">
                            <input type="text" class="text-input" id="{{$s->Student_Gov_Id}}" value="{{$s->Student_Gov_Id}}" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="{{$s->Student_Gov_Id}}"></label><br />
                        </div>
                        <div class="student-form-inputs grade-input">
                            <select class="select-input" id="grade{{$s->Student_Gov_Id}}" value="{{$s->grade_label}}" required>
                                @foreach ($grade as $g)
                                    <option value={{$g->grade_label_id}}>{{$g->grade_label}}</option>
                                @endforeach
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="grade{{$s->Student_Gov_Id}}"></label><br />
                        </div>
                        <div class="student-form-inputs grade-input">
                            <select class="select-input" id="assessedLevel{{$s->Student_Gov_Id}}" value="{{$s->assessed_level_label}}" required>
                                @foreach ($assessed as $a)
                                    <option value={{$a->assessed_level_label_id}}>{{$a->assessed_level_label}}</option>
                                @endforeach
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="assignmentLevel{{$s->Student_Gov_Id}}"></label><br />
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="student-icon-group pt-2">
                            <input type="submit" class="icon-btn" value="✔" />
                            <input type="button" class="icon-btn close-edit-button" value="❌" />
                        </div>
                    </div>
               </div>
           </form>
            <!-- /Edit student form -->
        </div>
        @endforeach
       <!-- /Student detail card -->