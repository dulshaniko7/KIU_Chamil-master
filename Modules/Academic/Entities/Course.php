<?php

namespace Modules\Academic\Entities;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function slqf()
    {
        $this->belongsTo(Slqf::class);
    }

}
