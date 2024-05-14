<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficialBusinessModel extends Model
{
    protected $fillable = [
        'officedepartment',
        'last_name',
        'first_name',
        'middle_name' ,
        'position',
        'destination',
        'date',
        'from_time',
        'to_time',
        'reason',
    ];

    protected $table = 'officialBusiness_infos';

    use HasFactory;
}
