<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelOrderModel extends Model
{

    protected $fillable = [
        'officedepartment',
        'last_name',
        'first_name',
        'middle_name' ,
        'position',
        'destination',
        'start_date',
        'end_date',
        'reason',
    ];

    protected $table = 'travelorder_infos';
    use HasFactory;
}
