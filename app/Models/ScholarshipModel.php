<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipModel extends Model
{
    protected $fillable = [
        'officedepartment',
        'last_name',
        'first_name',
        'middle_name' ,
        'type',
        'address',
        'postal_code',
        'civil_status',        
        'position',
        'course',
        'start_date',
        'end_date',
        'school_name',
        'school_address',
        'remarks',
        'status'

    ];

    protected $table = 'scholarship_infos';

    use HasFactory;
}
