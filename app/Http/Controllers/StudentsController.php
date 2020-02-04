<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\teachers;
use App\students;
use App\grade_label;
use App\assessed_level_label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_first_name = $request->input('first_name');
        $student_last_name = $request->input('last_name');
        $student_gov_id = $request->input('student_gov_id');
        $student_grade = $request->input('student_grade');
        $student_assignment_level = $request->input('assessed_level');

        $school = teachers::find(Auth::user()->user_Id)->schools->first();
        $class = teachers::find(Auth::user()->user_Id)->classes->first()->class_Id;
        $grade_scriibi_level = grade_label::find($student_grade)->ScriibiLevels->scriibi_Level_Id;
        $assessed_scriibi_level = assessed_level_label::find($student_assignment_level)->ScriibiLevels->scriibi_Level_Id;

        $student_record = array('student_First_Name' => $student_first_name, 'student_Last_Name' => $student_last_name, 'Student_Gov_Id' => $student_gov_id, 'enrolled_Level_Id' => $grade_scriibi_level, 'rubrik_level' => $assessed_scriibi_level, 'schools_school_Id' => $school->school_Id, 'suggested_level' => null);

        $newStudentId = DB::table('students')->insertGetId($student_record);

        $student_classes_record = array('classes_class_Id' => $class, 'students_student_Id' => $newStudentId, 'student_grade_label_id' => $student_grade, 'student_assessed_label_id' => $student_assignment_level);

        $newStudentClass = DB::table('classes_students')->insert($student_classes_record);

        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function deleteStudent($student_id){
        try{
            DB::table('students')->where('student_Id', '=', $student_id)->delete();
            DB::table('classes_students')->where('students_student_Id', '=', $student_id)->delete();
        }
        catch(Exception $e){
            return redirect()->action('StudentInputController@ReturnStudentListPage');
        }
        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }

    /**
     * return all of the students of the currently logged in teachers class
     * note: for version 1 a teacher can have only one class
     */
    public function indexStudentsByClass(){
        $students = [];
        try{
            $class = DB::table('classes_teachers')->select('classes_teachers_classes_class_Id')->where('teachers_user_Id', '=', Auth::user()->user_Id)->first();

            $students = DB::table('classes_students')
                ->join('students', 'classes_students.students_student_Id', 'students.student_Id')
                ->join('grade_labels', 'classes_students.student_grade_label_id', 'grade_labels.grade_label_id')
                ->join('assessed_level_labels', 'classes_students.student_assessed_label_id', 'assessed_level_labels.assessed_level_label_id')
                ->select('students.*', 'grade_labels.*', 'assessed_level_labels.*')
                ->where('classes_students.classes_class_Id', '=', $class->classes_teachers_classes_class_Id)
                ->get();
        }
        catch(Exception $e){
            abort(403, 'Please log in to view this page!');
        }
        return $students;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $student_grade = $request->input('student_grade');
        $student_assignment_level = $request->input('assessed_level');

        //lookup corresponding scriibi_level ids for grade and assessed. (basically converts value to the correct scriibi_level_id)
        $grade_scriibi_level = grade_label::find($student_grade)->ScriibiLevels->scriibi_Level_Id;
        $assessed_scriibi_level = assessed_level_label::find($student_assignment_level)->ScriibiLevels->scriibi_Level_Id;

        $student_Id = $request->input('studentId');
        $student_first_name = $request->input('first_name');
        $student_last_name = $request->input('last_name');
        $student_gov_id = $request->input('student_gov_id');
        $school_Id =  $request->input('schoolId');

        DB::table('students')
            ->updateOrInsert(
                ['student_Id' => $student_Id],
                ['student_First_Name' => $student_first_name,
                'student_Last_Name' => $student_last_name,
                'Student_Gov_Id' => $student_gov_id,
                'enrolled_Level_Id' => $grade_scriibi_level,
                'rubrik_level' => $assessed_scriibi_level,
                'schools_school_Id' => $school_Id]
            );

        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }
}
