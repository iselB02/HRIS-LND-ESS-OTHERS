<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPCRModel extends Model
{
    protected $fillable = [
        'reference_num',
        'status',
        'opcr_type',
        'employee_name',
        'date_of_filling',
        'position',
        'start_period',
        'end_period',
        'ratee',
        'final_average_rating',
        'comments_and_reco',
        'discussed_with',
        'discussed_with_date',
        'application_form',

    ];

    protected $table = 'opcrs';
    use HasFactory;
}
