<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            // Personnal Info
            $table -> string('first_name');
            $table -> string('middle_name') -> nullable();
            $table -> string('last_name');
            $table -> string('dob');
            $table -> string('gender');
            $table -> string('nationality');
            $table -> string('address');
            $table -> string('number');
            $table -> string('email');

            // Work Experience
            $table -> string('current_employer');
            $table -> string('position_held');
            $table -> string('duration_of_employment');
            $table -> string('responsilibities');

            $table -> string('current_employer2');
            $table -> string('position_held2');
            $table -> string('duration_of_employment2');
            $table -> string('responsilibities2');

            $table -> string('position_id');

            // Education Background
            $table -> string('highest_qualification');
            $table -> string('institution_name');
            $table -> string('certificate');
            $table -> string('year_of_graduation');

            // $table -> string('highest-qualification');
            $table -> string('school_name');
            $table -> string('secondary_certificate');
            $table -> string('year_of_completion');

            // Referee
            $table -> string('referee_name');
            $table -> string('referee_position');
            $table -> string('referee_company');
            $table -> string('referee_number');
            $table -> string('referee_email');

            $table -> string('referee_name2');
            $table -> string('referee_position2');
            $table -> string('referee_company2');
            $table -> string('referee_number2');
            $table -> string('referee_email2');

            // Other Relevant Information
            $table -> string('skills_certificate');
            $table -> string('reason'); // Why do you want to work at Dernan Salt Limited?
            $table -> string('availability');

            // Document Uploads
            $table -> string('image');
            $table -> string('cv');
            $table -> string('cerificates_acquired');
            $table -> string('cover_letter');
            $table -> string('other_relevant_doc');

            // Agreement and Declaration
            $table -> string('agreement');
            $table -> string('signature');
            $table -> string('date');

            $table -> string('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
