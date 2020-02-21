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

    // public function assessmentView(){
    //     $overView = new App\DataViewWrittingTask(1);        // this value is hardcoded for testing and development, change it later
    // }
}
