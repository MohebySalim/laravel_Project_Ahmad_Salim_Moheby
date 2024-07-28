<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpetrator extends Model
{
    use HasFactory;

    public function ajscCases()
    {
        return $this->belongsToMany(AjscCase::class, 'perpetrator_case', 'case_id', 'perpetrator_id');
    }

    public function case()
    {
        return $this->hasMany(PerpetratorCase::class, 'perpetrator_id');
    }
}
