<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseHistory extends Model
{
    use HasFactory;


    public function ajscCase()
    {
        return $this->hasOne(AjscCase::class, 'case_id');
    }
}
