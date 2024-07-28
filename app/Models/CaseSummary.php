<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseSummary extends Model
{
    use HasFactory;


    public function ajscCase()
    {
        return $this->belongsTo(AjscCase::class, 'case_id');
    }
}
