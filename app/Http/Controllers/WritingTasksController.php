<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Exception;
use App\writing_tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WritingTasksController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $assessment_title = $request->input('assessment_name');
            $assessment_date = $request->input('assessment_date');
            $assessment_description = $request->input('assessment_description');
            $assessment_setting = $request->input('assess');
            $assessment_rubric = $request->input('rubric');

            
        }catch(Exception $e){
            // todo
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function show(writing_tasks $writing_tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(writing_tasks $writing_tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, writing_tasks $writing_tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\writing_tasks  $writing_tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(writing_tasks $writing_tasks)
    {
        //
    }
}
