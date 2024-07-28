<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerpetratorCase extends Model
{
    use HasFactory;
    protected $table = 'perpetrator_case';

    protected $fillable = [
        'id',
        'case_id',
        'perpetrator_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function case()
    {
        return $this->belongsTo(AjscCase::class, 'case_id');
    }

    public function perpetrator()
    {
        return $this->belongsTo(Perpetrator::class, 'perpetrator_id');
    }
}
