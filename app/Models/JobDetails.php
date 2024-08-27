<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    use HasFactory;

    protected $table = 'job_details';

    protected $fillable = [
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

        'post_jobs_id',

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

        'skills_certificate',
        'reason',
        'availability',

        'image',
        'cv',
        'cerificates_acquired',
        'cover_letter',
        'other_relevant_doc',

        'agreement',
        'signature',
        'date',
        'status'
    ];
    
}
