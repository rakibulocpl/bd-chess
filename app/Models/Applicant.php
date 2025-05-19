<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = ['id'];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function thana_rel()
    {
        return $this->belongsTo(Thana::class, 'thana');
    }

    public function district_rel()
    {
        return $this->belongsTo(District::class, 'district');
    }
}
