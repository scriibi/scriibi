<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class DataViewController extends Controller
{
    public function overview(){
        $overView = new App\DataViewOverview();
        $overView->generateDataTable();
        $dataTable = $overView->getDataTable();
        $writingTasks = $overView->getWritingTasks();
        return view('overall-data-view', ['dataTable' => $dataTable, 'writingTasks' => $writingTasks]);
    }

    // public function studentView($student){
    //     //
    // }

    public function assessmentView($assessmentId){
        $assessmentView = new App\DataViewWrittingTask($assessmentId);
        $assessmentView->generateDataTable();
        $dataTable = $assessmentView->getDataTable();
        $skills = $assessmentView->getSkills();
        $writingTask = $assessmentView->getWritingTasks();
        return view('assessment-data-view', ['dataTable' => $dataTable, 'skills' => $skills, 'writingTask' => $writingTask]);
    }
}
