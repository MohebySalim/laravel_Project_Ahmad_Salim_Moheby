<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violence extends Model
{
    use HasFactory;

    public function ajscCases()
    {
        return $this->belongsToMany(AjscCase::class, 'violence_case', 'violence_id', 'case_id');
    }

    public function cases()
    {
        return $this->hasMany(ViolenceCase::class, 'violence_id');
    }
}
