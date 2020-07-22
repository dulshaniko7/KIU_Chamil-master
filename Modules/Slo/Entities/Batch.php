<?php

namespace Modules\Slo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class batch extends Model
{
    use SoftDeletes;
    protected $fillable = ["course_id", "batch_name"];
    // protected $fillable = ["course_id", "batch_name", "bStdView", "batch_code", "portfolio", "max_student", "batch_start_date", "batch_end_date"];
    // protected $guarded = [];
    // protected $primaryKey = "id";
}
