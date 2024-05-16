<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPCRModel extends Model
{
    protected $fillable = [
        'officedepartment',
        'average',
        'name',
        'application_form',
        
    ];

    protected $table = 'ipcr_infos';

    use HasFactory;
}
