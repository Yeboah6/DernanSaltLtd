<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    protected $table = 'admins';

    protected $fillable = [
        'email',
        'new_email',
        'new_password',
        'confirm_password'
    ];
}
