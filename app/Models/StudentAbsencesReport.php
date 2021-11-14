<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAbsencesReport extends Model
{
    use HasFactory;
    // protected $fillable = [];
    protected $guarded =  [];



    public function studentAbsences()
    {
        return $this->hasMany(StudentAbsence::class,"absence_report_id");
        // note: we can also include comment model like: 'App\Models\Comment'
    }
}
