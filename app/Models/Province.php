<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;


    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
    public function provinces()
    {
        return $this->hasMany(Province::class);
    }

    public function ajscCases()
    {
        return $this->hasMany(AjscCase::class, 'province_id');
    }
}
