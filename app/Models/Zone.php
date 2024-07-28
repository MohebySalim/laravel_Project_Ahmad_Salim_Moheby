<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'code', 'zone_dr', 'zone_ps', 'zone_en',
    ];

    public function provinces()
    {
        return $this->hasMany(Province::class);
    }

    public function ajscCases()
    {
        return $this->hasMany(AjscCase::class, 'zone_id');
    }
}
