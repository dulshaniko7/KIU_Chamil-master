<?php

namespace Modules\Academic\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Slo\Entities\course;

class Slqf extends Model
{
    protected $guarded = [];

    protected $primaryKey = "slqf_id";

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
