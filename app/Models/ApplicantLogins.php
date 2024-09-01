<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLogins extends Model
{
    use HasFactory;

    protected $table = 'applicant_logins';

    protected $fillable = [
        'applicant_id',
        'first_name',
        'last_name',
        'email',
        'password',
        'position',
        'verified_at'
    ];
}
