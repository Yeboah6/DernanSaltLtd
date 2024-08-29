<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLogins extends Model
{
    use HasFactory;

    protected $table = 'applicant_logins';

    protected $fillable = [
        'user_name',
        'email',
        'password',
        'verified_at'
    ];
}
