<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $table = 'files';

    protected $fillable = [
        'personal_id',
        
        'image',
        'cv',
        'cerificates_acquired',
        'cover_letter',
        'other_relevant_doc',
    ];
}
