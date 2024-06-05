<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcrFunctionsModel extends Model
{
    protected $fillable = [
        'type',
        'opcr_id',
        'output',
        'success_indicators',
        'actual_accomplishments',
        'q',
        'e',
        't',
        'a',
    ];

    protected $table = 'opcr_functions';
    use HasFactory;
}
