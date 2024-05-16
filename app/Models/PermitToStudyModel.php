<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitToStudyModel extends Model
{

    protected $fillable = [
        'CoverMemo',
        'RequestLetter',
        'PermitToStudy',
        'TeachingAssignment',
        'SummaryOfSchedule',
        'CertificationOfGrades',
        'StudyPlan',
        'FacultyEvaluation',
        'RatedIPCR',
    ];

    protected $table = 'Permit_To_Study_Table';

    use HasFactory;
}
