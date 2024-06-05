<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpcrFunctionsModel extends Model
{

    protected $fillable = [
        'type',
        'ipcr_id',
        'output',
        'success_indicators',
        'actual_accomplishments',
        'q',
        'e',
        't',
        'a',
    ];

    protected $table = 'ipcr_functions';

    use HasFactory;

}
