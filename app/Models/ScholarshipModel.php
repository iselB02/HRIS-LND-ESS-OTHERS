<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipModel extends Model
{
    protected $fillable = [
        'employee_id',
        'college_department',
        'employee_name',
        'type',
        'address',
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
   	protected $primaryKey = 'employee_id';

    use HasFactory;
}
