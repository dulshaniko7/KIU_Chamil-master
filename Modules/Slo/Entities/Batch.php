<?php

namespace Modules\Slo\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Academic\Entities\Course;

class Batch extends Model
{
    protected $guarded = [];

    public function course()
    {
      return $this->belongsTo(Course::class,'course_id','course_id');
    }


}
