<?php

namespace App\Http\Controllers;

use DB;
use Mixpanel;
use Exception;
use App\WritingTask;
use App\writing_tasks;
use Illuminate\Http\Request;

class MixpanelController extends Controller
{   
    /**
     * fields passed into mixpanel
     */
    private $userId = null;
    private $userName = null;
    private $userEmail = null;
    private $userCreated = null;
    private $teacherSchoolId = null;
    private $teacherSchoolName = null;
    private $studentsInClass = null;
    private $schoolCurriculumId = null;
    private $schoolCurriculumDescription = null;
    private $schoolTypeId = null;
    private $schoolTypeDescription = null;
    private $teacherScriibiLevel = null;
    private $teacherGradeLabel = null;
    private $teacherPositionId = [];
    private $teacherPositionName = [];

    /**
     * fields used to store intermediate data to be passed between methods
     */
    private $teacherDetails = null;
    private $schoolTeacher = null;
    private $classId = null;
    private $classesStudents = null;
    private $schoolDetails = null;
    private $classDetails = null;
    private $schoolCurriculumDetails = null;
    private $schoolTypeDetails = null;
    private $teacherScriibiDetails = null;
    private $scriibiDetails = null;
    private $teacherScriibiId = null;
    private $teacherPositionDetails = null;
    private $positionDetails = null;
    private $gradeLabelSchoolTypeDetails = null;
    private $gradeLabelDetails = null;

    public function UpdateMixpanelUserDetails(){
        $mp = Mixpanel::getInstance("916bc248c70bef14305273a1d9142fa5");
        // retrieve all table data required
        $teachers = DB::table('teachers')->get();
        $school_teachers = DB::table('school_teachers')->get();
        $schools = DB::table('schools')->get();
        $classes_teachers = DB::table('classes_teachers')->get();
        $classes_students = DB::table('classes_students')->get();
        $curriculum = DB::table('curriculum')->get();
        $school_type_identifiers = DB::table('school_type_identifiers')->get();
        $teachers_scriibi_level = DB::table('teachers_scriibi_levels')->get();
        $scriibi_levels = DB::table('scriibi_levels')->get();
        $teachers_positions = DB::table('teachers_positions')->get();
        $positions = DB::table('positions')->get();
        $school_types = DB::table('school_types')->get();
        $grade_labels = DB::table('grade_labels')->get();

        foreach($teachers as $teacher){
            try{
                $this->userId = $teacher->user_Id;
                $this->userName = $teacher->name;
                $this->userEmail = $teacher->teacher_Email;
                $this->userCreated = $teacher->created_at;
                $this->teacherDetails = $teacher;
                /**
                 * retrieving school data
                */
                $this->schoolTeacher = array_filter(reset($school_teachers), array($this, "filterSchoolTeachers"));
                $this->teacherSchoolId = reset($this->schoolTeacher)->schools_school_Id;
                $this->schoolDetails = array_filter(reset($schools), array($this, "filterSchool"));
                $this->teacherSchoolName = reset($this->schoolDetails)->name;
                $this->classDetails = array_filter(reset($classes_teachers), array($this, "filterClassesTeachers"));
                $this->classId = reset($this->classDetails)->classes_teachers_classes_class_Id;
                $this->classesStudents = array_filter(reset($classes_students), array($this, "filterClassesStudents"));
                $this->studentsInClass = count($this->classesStudents);
                $this->schoolCurriculumDetails = array_filter(reset($curriculum), array($this, "filterCurriculum"));
                $this->schoolCurriculumId = reset($this->schoolCurriculumDetails)->curriculum_Id;
                $this->schoolCurriculumDescription = reset($this->schoolCurriculumDetails)->description;
                $this->schoolTypeDetails = array_filter(reset($school_type_identifiers), array($this, "filterSchoolTypeIdentifiers"));
                $this->schoolTypeId = reset($this->schoolTypeDetails)->school_type_identifier_id;
                $this->schoolTypeDescription = reset($this->schoolTypeDetails)->school_type_identifier_description;
                $this->teacherScriibiDetails = array_filter(reset($teachers_scriibi_level), array($this, "filterTeachersScriibiLevels"));
                $this->scriibiDetails = array_filter(reset($scriibi_levels), array($this, "filterScriibiLevels"));
                $this->teacherScriibiLevel = reset($this->scriibiDetails)->scriibi_Level;
                $this->teacherScriibiId = reset($this->scriibiDetails)->scriibi_Level_Id;
                $this->teacherPositionDetails = array_filter(reset($teachers_positions), array($this, "filterTeachersPositions"));
                $this->positionDetails = array_filter(reset($positions), array($this, "filterPositions"));
                foreach($this->positionDetails as $pd){
                    $this->teacherPositionId = [];
                    $this->teacherPositionName = [];
                    array_push($this->teacherPositionId, $pd->position_Id);
                    array_push($this->teacherPositionName, $pd->position_Name);
                }
                $this->gradeLabelSchoolTypeDetails = array_filter(reset($school_types), array($this, "filterSchoolTypes"));
                $this->gradeLabelDetails = array_filter(reset($grade_labels), array($this, "filterGradeLabel"));
                $this->teacherGradeLabel = reset($this->gradeLabelDetails)->grade_label;

                $mp->identify($this->userId);

                //User Properties
                $mp->people->set($this->userId, array(
                    '$distinct_id'                      => $this->userId,
                    '$first_name'                       => $this->userName,
                    '$email'                            => $this->userEmail,
                    'User Scriibi Level'                => $this->teacherScriibiLevel,
                    'User Grade'                        => $this->teacherGradeLabel,
                    'User Position Id'                  => $this->teacherPositionId,
                    'User Position Description'         => $this->teacherPositionName,
                    'User Created Date'                 => $this->userCreated,
                    'User School Id'                    => $this->teacherSchoolId,
                    'User School Name'                  => $this->teacherSchoolName,
                    'User School Curriculum Id'         => $this->schoolCurriculumId,
                    'User School Curriculum Description'=> $this->schoolCurriculumDescription,
                    'User School Type Id'               => $this->schoolTypeId,
                    'User School Type Description'      => $this->schoolTypeDescription,
                    'No. of Students in Class'          => $this->studentsInClass
                ), $ip = 0, $ignore_time = true);
            }catch(Exception $ex){
                //todo
            } 
        }
        return redirect('home');
    }

    public function UpdateMixpanelUserAssessmentDetails(){
        try{
            $mp = Mixpanel::getInstance("916bc248c70bef14305273a1d9142fa5");
            $teachers = DB::table('teachers')->get();
            foreach($teachers as $t){
                $writingTasks = DB::table('writing_tasks')->where('created_By_Teacher_User_Id', '=', $t->user_Id)->get();
                foreach($writingTasks as $wt){
                    $newWritingTask = new WritingTask($wt->writing_task_Id, $wt->task_name, $wt->writing_Task_Description, $wt->created_at, $wt->created_Date, $wt->created_By_Teacher_User_Id, $wt->teaching_period_Id, $wt->fk_rubric_id);
                    $newWritingTask->populateStudents();
                    $skillCount = DB::table('rubrics_skills')->where('rubrics_rubric_Id', '=', $wt->fk_rubric_id)->count();
                    $markingCompletedAmount = DB::table('writting_task_students')->where('fk_writting_task_id', '=', $wt->writing_task_Id)->where('status', '=', 'completed')->count();
                    $mp->identify($t->user_Id);
                    $mp->track("Assessment Viewed", array(
                        "Assessment Id"                  => $wt->writing_task_Id,
                        "Assessment Name"                => $wt->task_name,
                        "No. of Current Students"        => count($newWritingTask->getStudents()),
                        "Assessment Marks Completed"     => $markingCompletedAmount,
                        "No. of Rubric Skills"           => $skillCount,
                        "Rubric Id"                      => $wt->fk_rubric_id,
                        "Historical Event Flag"          => 1,
                    )
                    );
                }
            }
        }catch(Exception $e){
            throw $e;
        }
        return redirect('home');
    }

    private function filterSchoolTeachers($school_teacher){
        if($school_teacher->teachers_user_Id == $this->userId){
            return true;
        }else{
            return false;
        }
    }

    private function filterSchool($school){
        if($school->school_Id == $this->teacherSchoolId){
            return true;
        }else{
            return false;  
        }
    }

    private function filterClassesTeachers($class_teacher){
        if($class_teacher->teachers_user_Id == $this->userId){
            return true;
        }else{
            return false;
        }
    }

    private function filterClassesStudents($class_student){
        if($class_student->classes_class_Id == $this->classId){
            return true;
        }else{
            return false;
        }
    }

    private function filterCurriculum($curriculum){
        if($curriculum->curriculum_Id == reset($this->schoolDetails)->curriculum_details_curriculum_details_Id){
            return true;
        }else{
            return false;
        }
    }

    private function filterSchoolTypeIdentifiers($school_type_identifier){
        if($school_type_identifier->school_type_identifier_id == reset($this->schoolDetails)->school_type_identifier_id){
            return true;
        }else{
            return false;
        }
    }

    private function filterTeachersScriibiLevels($teacher_sciibi_level){
        if($teacher_sciibi_level->teachers_user_Id == $this->teacherDetails->user_Id){
            return true;
        }else{
            return false;
        }
    }

    private function filterScriibiLevels($scriibi_level){
        if($scriibi_level->scriibi_Level_Id == reset($this->teacherScriibiDetails)->scriibi_levels_scriibi_Level_Id){
            return true;
        }else{
            return false;
        }
    }

    private function filterTeachersPositions($teacher_position){
        if($teacher_position->teachers_user_Id == $this->teacherDetails->user_Id){
            return true;
        }else{
            return false;
        }
    }

    private function filterPositions($position){
        foreach($this->teacherPositionDetails as $tpd){
            if($position->position_Id == $tpd->positions_position_Id){
                return true;
            }
        }
    }

    private function filterSchoolTypes($school_type){
        if($school_type->fk_curriculum_id == $this->schoolCurriculumId && $school_type->fk_school_type_identifier_id == $this->schoolTypeId){
            return true;
        }else{
            return false;
        }
    }

    private function filterGradeLabel($grade_label){
        if($grade_label->fk_school_type_id ==reset($this->gradeLabelSchoolTypeDetails)->school_type_id && $grade_label->fk_scriibi_level_id == $this->teacherScriibiId){
            return true;
        }else{
            return false;
        }
    }
}
