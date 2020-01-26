<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Rubric;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricListController extends Controller
{   
    private $rubrics_list = array();
    
    /**
     * creates rubric objects for all rubrics of the currently logged in user
     */
    public function GenerateUserRubrics(){
        $rubrics = DB::table('rubrics_teachers')
            ->join('rubrics', 'rubrics_teachers.rubrics_rubric_Id', 'rubrics.rubric_Id')
            ->select('rubrics.*')
            ->where('rubrics_teachers.teachers_user_Id', '=', Auth::user()->user_Id)->get();

        foreach($rubrics as $r){
            array_push($this->rubrics_list, new Rubric($r->rubric_Id, $r->rubric_Name, $r->created_at));
        }

        foreach($this->rubrics_list as $rl){
            $rl->populateTraits();
            $rl->getSkillsByRubric();
        }

        return view('rubric-list', ['rubrics' => $this->rubrics_list]);
    }
}
