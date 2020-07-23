<?php

namespace Modules\Slo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BaseModel extends Model
{
    public static function saveModel($model)
    {
        $save = $model->save();

        if ($save) {
            $notify = array();
            $notify["status"] = "success";
            $notify["notify"][] = "Successfully saved the details.";

            $dataResponse["record"] = $model;
            $dataResponse["notify"] = $notify;
        } else {
            $notify = array();
            $notify["status"] = "failed";
            $notify["notify"][] = "Details saving was failed";

            $dataResponse["notify"] = $notify;
        }

        return $dataResponse;
    }

    public static function handleValidationErrors($errors)
    {
        $errors = json_decode(json_encode($errors), true);

        $response = array();
        $response["status"] = "failed";
        $response["notify"] = [];

        foreach ($errors as $error) {
            $response["notify"][] = $error;
        }

        if (request()->expectsJson()) {
            $dataResponse["notify"] = $response;
            return response()->json($dataResponse, 201);
        } else {
            request()->session()->flash("notify", $response);
            return redirect()->back();
        }
    }

    public static function handleSuccessResponse($dataResponse)
    {
        if (request()->expectsJson()) {
            return response()->json($dataResponse, 201);
        } else {
            request()->session()->flash("notify", $dataResponse["notify"]);
            return redirect()->back();
        }
    }
}
