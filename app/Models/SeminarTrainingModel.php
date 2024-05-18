<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarTrainingModel extends Model
{

    protected $fillable = [
    'title',
    'type',
    'location',
    'start_time',
    'end_time',
    'start_date',
    'end_date',
    'description',
    'participants',
    'pre_training',
    'post_training',
    ];

    protected $table = 'seminarTraining_infos';

    use HasFactory;
}
