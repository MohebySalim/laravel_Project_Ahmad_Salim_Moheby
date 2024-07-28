<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolenceCase extends Model
{
    use HasFactory;
    protected $table = 'violence_case';

    protected $fillable = [
        'id',
        'case_id',
        'violence_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function case()
    {
        return $this->belongsTo(AjscCase::class, 'case_id');
    }

    public function violence()
    {
        return $this->belongsTo(Violence::class, 'violence_id');
    }
}
