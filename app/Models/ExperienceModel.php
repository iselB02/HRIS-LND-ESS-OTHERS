<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceModel extends Model
{

    use HasFactory;

    protected $fillable = [
        'profile_id',
        'title',
        'organization',
        'start_date',
        'end_date',
        'location',
    ];
    protected $table = 'trainings_info';

    use HasFactory;


}
