<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';

    protected $fillable = [
        'personal_id',
        
        'institution_name',
        'certificate',
        'year_of_graduation',
        'year_began',

        'institution_name2',
        'certificate2',
        'year_of_graduation2',
        'year_began2',

        'institution_name3',
        'certificate3',
        'year_of_graduation3',
        'year_began3',

        'school_name',
        'secondary_certificate',
        'year_of_completion',
    ];
}
