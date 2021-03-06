<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mixpanel;
use Exception;
use App\schools;
use App\teachers;
use App\students;
use App\grade_label;
use App\ScriibiLevels;
use App\assessed_level_label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\StudentListingService;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\ClassRepositoryInterface;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use App\Repositories\Interfaces\GradeLabelRepositoryInterface;
use App\Repositories\Interfaces\AssessedLabelRepositoryInterface;

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
         $validatedData = $request->validate([
             'first_name' => 'required|min:2',
             'last_name' => 'required|min:2',
         ]);
        try{
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

            $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");
            $mp->identify(Auth::user()->user_Id);
            $mp->track("Student Added", array(
                "Grade of student"              => grade_label::find($student_grade)->grade_label,
                "Assessed Level of student"     => assessed_level_label::find($student_assignment_level)->assessed_level_label,
                "Scriibi Level of Student"      => assessed_level_label::find($student_assignment_level)->ScriibiLevels->scriibi_Level
              )
            );
        }catch(Exception $e){
            //throw $e;
        }
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
            $studentDetails = students::find($student_id);
            $schoolDetails = schools::find($studentDetails->schools_school_Id);
            $schoolTypeDetails = DB::table('school_types')->where('fk_curriculum_id', $schoolDetails->curriculum_details_curriculum_details_Id)->where('fk_school_type_identifier_id', $schoolDetails->school_type_identifier_id)->get();
            $gradeLabelDetails = DB::table('grade_labels')->where('fk_school_type_id', $schoolTypeDetails[0]->school_type_id)->where('fk_scriibi_level_id', $studentDetails->enrolled_Level_Id)->get();
            $assessedLabelDetails = DB::table('assessed_level_labels')->where('school_type_id_fk', $schoolTypeDetails[0]->school_type_id)->where('school_scriibi_level_id', $studentDetails->rubrik_level)->get();

            DB::table('students')->where('student_Id', $student_id)->update(['enrolled_Level_Id' => null]);
            DB::table('classes_students')->where('students_student_Id', '=', $student_id)->delete();

            $mp = Mixpanel::getInstance("11fbca7288f25d9fb9288447fd51a424");
            $mp->identify(Auth::user()->user_Id);
            $mp->track("Student Deleted", array(
                "Grade of student"              => $gradeLabelDetails[0]->grade_label,
                "Assessed Level of student"     => $assessedLabelDetails[0]->assessed_level_label,
                "Scriibi Level of Student"      => ScriibiLevels::find($assessedLabelDetails[0]->school_scriibi_level_id)->scriibi_Level
              )
            );
        }
        catch(Exception $e){
            return redirect()->action('StudentInputController@ReturnStudentListPage');
        }
        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }

    /**
     * return all of the students of the currently logged in teachers class
     * note: for version 1 a teacher can have only one class
     * @param ClassRepositoryInterface $classRepository
     * @param StudentRepositoryInterface $studentRepository
     * @param UserRepositoryInterface $userRepository
     * @param GradeLabelRepositoryInterface $gradeLabelRepository
     * @param AssessedLabelRepositoryInterface $assessedLabelRepository
     * @return array
     */
    public function indexStudentsByClass(ClassRepositoryInterface $classRepository, StudentRepositoryInterface $studentRepository, UserRepositoryInterface $userRepository, GradeLabelRepositoryInterface $gradeLabelRepository, AssessedLabelRepositoryInterface $assessedLabelRepository)
    {
        try
        {
            $school =$userRepository->getTeacherSchool(Auth::user()->id)[0];
            $gradeLabels = $this->formatLabels($gradeLabelRepository->getGradeLabels($school['curriculum_school_type_id']));
            $assessedLabels = $this->formatLabels($assessedLabelRepository->getAssessedLabels($school['curriculum_school_type_id']));
            $classes = $classRepository->getClassIdsOfTeacher(Auth::user()->id, $school['id']);
            $students = $studentRepository->getStudentsOfClasses($classes);
            return
                [
                    'students' => $students,
                    'gradeLabels' => $gradeLabels,
                    'assessedLabels' => $assessedLabels
                ];
        }
        catch(Exception $e)
        {
            abort(403, 'Please log in to view this page!');
        }
    }

    protected function formatLabels($labels): array
    {
        try
        {
            $result = [];
            $length = count($labels);
            for($i = 0; $i < $length; $i++)
            {
                $result[$labels[$i]['scriibi_level_id']] = $labels[$i]['label'];
            }
            return $result;
        }
        catch (Exception $e)
        {
            return [];
        }
    }

    public function indexStudentsByWritingTask($writingTask){
        $students = [];
        try{
            $students = DB::table('classes_students')
                ->join('students', 'classes_students.students_student_Id', 'students.student_Id')
                ->join('grade_labels', 'classes_students.student_grade_label_id', 'grade_labels.grade_label_id')
                ->join('assessed_level_labels', 'classes_students.student_assessed_label_id', 'assessed_level_labels.assessed_level_label_id')
                ->join('writting_task_students', 'students.student_Id', 'writting_task_students.fk_student_id')
                ->select('students.*', 'grade_labels.*', 'assessed_level_labels.*')
                ->where('writting_task_students.fk_writting_task_id', '=', $writingTask)
                ->get()
                ->toArray();
        }catch(Exception $e){
            abort(403, 'Please log in to view this page!');
        }
        return $students;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\students  $students
     */
    public function update(Request $request)
    {
        try{
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
            DB::table('classes_students')
                ->where('students_student_Id', $student_Id)
                ->update(['student_grade_label_id' => $student_grade, 'student_assessed_label_id' => $student_assignment_level]);
        }
        catch(Exception $e){
            throw $e;
        }

        return redirect()->action('StudentInputController@ReturnStudentListPage');
    }

    public function getStudentsOfMyTeam($taskId, StudentListingService $studentListingService)
    {
        try
        {
            return $studentListingService->getStudentsOfTeam(Auth::user()->id, $taskId);
        }
        catch (Exception $e)
        {
            // todo
        }
    }
}
