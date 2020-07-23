<?php

namespace Modules\Slo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Academic\Entities\Course;
use Modules\Slo\Entities\batch;


class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $batches = Batch::all();
        $courses = Course::all();
        //return response()->json(['batches' => $batches]);
        return view('slo::batch.index')->with('courses', $courses)->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('slo::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //  $postData = Validator::make($request->all(),
        $validator = Validator::make($request->all(),
            ['batch_name' => 'required',
                'course_id' => 'required',
                'max_student' => 'required|int',
                'batch_start_date' => 'required',
                'batch_end_date' => 'required'
            ]);
        if ($validator->fails()) {
            return view('slo::error');
        }

        $batch = new Batch();
        $batch->batch_name = $request->batch_name;
        $batch->max_student = $request->max_student;
        $batch->batch_start_date = $request->batch_start_date;
        $batch->batch_end_date = $request->batch_end_date;

       // $course = Course::findOrFail($request->course_id);


          $batch->course_id = $request->course_id;

//
         if ($batch->save()) {
             return redirect()->route('batches.index');
        }

        // if ($course->batches()->save($batch)) {
        //   return redirect()->route('batches.show', $batch->id);
        //} else {
        //  return view('slo::error');
        //}
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public
    function show($id)
    {
        return view('slo::show')->with($id);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public
    function edit($id)
    {
        return view('slo::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public
    function destroy($id)
    {
        //
    }
}
