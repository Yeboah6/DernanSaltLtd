<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $table = 'personal_infos';

    protected $fillable = [
        'user_id',
        
        'applicant_id',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'gender',
        'nationality',
        'address',
        'number',
        'email',
    ];
}
