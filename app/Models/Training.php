<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    const TABLE = 'training_infos';

    protected $table = self::TABLE;

    protected $fillable = [
        'module', 
        'program',
        'participants',
        'startDate',
        'endDate'
    ];
}
