<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $table = 'work_experiences';

    protected $fillable = [
        'personal_id',

        'current_employer',
        'company_name',
        'company_address',
        'position_held',
        'duration_of_employment_from',
        'duration_of_employment_to',
        'responsilibities',

        'current_employer2',
        'company_name2',
        'company_address2',
        'position_held2',
        'duration_of_employment_from2',
        'duration_of_employment_to2',
        'responsilibities2',

        'position_id',
    ];
}
