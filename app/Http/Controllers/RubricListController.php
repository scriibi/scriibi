<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Rubric;
use App\RubricList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RubricListController extends Controller
{       
    /**
     * creates rubric objects for all rubrics of the currently logged in user
     */
    public function GenerateUserRubrics(){
        
        $rubricList = new RubricList();
        $returnList = $rubricList->GenerateTeacherSpecificRubricList();
        return view('rubric-list', ['rubrics' => $returnList]);
    }
}
