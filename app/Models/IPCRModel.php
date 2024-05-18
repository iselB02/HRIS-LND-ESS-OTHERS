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

    public function scopeSearch($query, $column, $keyword)
    {
        return $query->where($column, 'like', '%' . $keyword . '%');
    }

    use HasFactory;
}
