<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{

    protected $fillable = [
        'name',
        'school',
        'phone_number',
        'profile_photo',
        'cover_photo',
        'bio'
        
    ];

    protected $table = 'profile_infos';

    use HasFactory;


}
