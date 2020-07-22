<?php

namespace Modules\Slo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Modules\Slo\Entities\batch;
use Illuminate\Support\Facades\Validator;
use Modules\Slo\Entities\BaseModel;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $batchs = batch::query();
        $batchs = $batchs->paginate(10);
        return view("slo::batch.index", compact('batchs'));
        // return view('slo::index');
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

        $model = new batch();

        $postData = Validator::make($request->all(), [
            "course_id" => "required",
            "batch_name" => "required"
        ]);

        if ($postData->fails()) {
            return BaseModel::handleValidationErrors($postData->errors());
        } else {
            $data = $postData->validated();
        }

        foreach ($data as $key => $value) {
            $model->$key = $value;
        }

        // $model::create($data);
        $dataResponse = BaseModel::saveModel($model);

        return BaseModel::handleSuccessResponse($dataResponse);

        // $batch = new Batch();
        // $postData = Validator::make($request->all(), [
        //     "course_id" => "required",
        //     "batch_name" => "required"
        // ]);

        // $batch::create($postData);

        // dd(request('course'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('slo::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('slo::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
