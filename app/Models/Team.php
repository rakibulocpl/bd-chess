<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id'];

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function thana()
    {
        return $this->belongsTo(Thana::class, 'thana_id');
    }

    public function captain()
    {
        return $this->belongsTo(Applicant::class, 'captain_id');
    }
}
