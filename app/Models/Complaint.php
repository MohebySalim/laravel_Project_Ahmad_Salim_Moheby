<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    public function ajscCases()
    {
        return $this->belongsToMany(AjscCase::class, 'complaint_case', 'complaint_id', 'case_id');
    }
}
