<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipModel extends Model
{
    protected $fillable = [
        'employee_id',
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
        'term',
        'units',
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
