<?php

namespace App\Http\Controllers;

use Exception;
use App\Utils\Sanitize;
use Illuminate\Http\Request;
use App\Services\WritingTaskService;

class AssessmentEditController extends Controller
{
    public function generateAssessmentEdit(Request $request, WritingTaskService $writingTaskService)
    {
        try
        {
            $writingTaskId = Sanitize::sanitizeInteger($request->query('task'));
            $writingTask = $writingTaskService->getWritingTask($writingTaskId)[0];
            return view('assessment-edit', [
                    'writingTask' => $writingTask
                ]);
        }
        catch (Exception $e)
        {
            return redirect()
                ->back()
                ->withErrors('Oops! Something went wrong');
        }
    }
}
