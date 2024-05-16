<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvertimeModel extends Model
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
    ];

    protected $table = 'overtime_infos';

    use HasFactory;
}
