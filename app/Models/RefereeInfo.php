<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefereeInfo extends Model
{
    use HasFactory;

    protected $table = 'referee_infos';

    protected $fillable = [
        'personal_id',

        'referee_name',
        'referee_position',
        'referee_company',
        'referee_number',
        'referee_email',

        'referee_name2',
        'referee_position2',
        'referee_company2',
        'referee_number2',
        'referee_email2',
    ];
}
