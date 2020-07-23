<?php

namespace Modules\Academic\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Slo\Entities\Batch;

class Course extends Model
{
    protected $guarded = [];

    public function slqf()
    {
        $this->belongsTo(Slqf::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    protected $primaryKey = 'course_id';
}
