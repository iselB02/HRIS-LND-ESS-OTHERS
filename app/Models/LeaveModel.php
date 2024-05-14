<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveModel extends Model
{
    protected $fillable = [
        'officedepartment',
        'last_name',
        'first_name',
        'middle_name' ,
        'position',
        'start_date',
        'end_date',
        'reason',
        'filing_date',
        'salary',
        'leave_type',
        'details_leave',
        'location',
        'num_leaves',
        'commutation',
        'signature',
    ];

    protected $table = 'leave_infos';
    use HasFactory;
}
