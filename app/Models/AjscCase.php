<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjscCase extends Model
{
    use HasFactory;
    protected $table = 'cases';

    protected $fillable = [
        'id'
    ];


    public function relatedCase()
    {
        return $this->belongsTo(self::class, 'case_id');
    }
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    // many to many
    public function violenceCase()
    {
        return $this->hasMany(ViolenceCase::class, 'case_id');
    }
    public function perpetratorCase()
    {
        return $this->hasMany(PerpetratorCase::class, 'case_id');
    }
    public function violences()
    {
        return $this->belongsToMany(Violence::class, 'violence_case', 'case_id', 'violence_id');
    }
    public function perpetrators()
    {
        return $this->belongsToMany(Perpetrator::class, 'perpetrator_case', 'case_id',  'perpetrator_id');
    }
    public function occupations()
    {
        return $this->belongsToMany(Occupation::class, 'occupation_case', 'case_id', 'occupation_id');
    }
    public function medias()
    {
        return $this->belongsToMany(Media::class, 'media_case', 'case_id', 'media_id');
    }
    public function complaints()
    {
        return $this->belongsToMany(Complaint::class, 'complaint_case', 'case_id', 'complaint_id');
    }
    //    public function caseHistory()
    //    {
    //        return $this->belongsTo(CaseHistory::class, 'case_id');
    //    }
    public function casesummary()
    {
        return $this->hasMany(CaseSummary::class, 'case_id');
    }
}
