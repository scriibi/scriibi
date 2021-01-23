<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\WritingTaskService;

class AssessmentEditController extends Controller
{
    public function generateAssessmentEdit($assessment_id, WritingTaskService $writingTaskService)
    {
        try
        {
            $writingTask = $writingTaskService->getWritingTask($assessment_id)[0];
            return view('assessment-edit',
                [
                    'writingTask' => $writingTask
                ]);
        }
        catch (Exception $e)
        {
            // todo
        }
    }
}
