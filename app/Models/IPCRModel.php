<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPCRModel extends Model
{
    protected $fillable = [
        'reference_num',
        'status',
        'ipcr_type',
        'employee_name',
        'date_of_filling',
        'position',
        'start_period',
        'end_period',
        'ratee',
        'final_average_rating',
        'comments_and_reco',
        'discussed_with',
        'discussed_with_date',
        'application_form',

    ];

    protected $table = 'ipcrs';
    protected $primaryKey = 'employee_id';

    // public function scopeSearch($query, $column, $keyword)
    // {
    //     return $query->where($column, 'like', '%' . $keyword . '%');
    // }

    use HasFactory;
}
