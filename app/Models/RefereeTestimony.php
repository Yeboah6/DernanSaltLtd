<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefereeTestimony extends Model
{
    use HasFactory;

    protected $table = 'referee_testimonies'; 
    protected $guarded = [
        'testimony',
        'document'
    ];
}
