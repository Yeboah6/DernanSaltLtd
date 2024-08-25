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
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table -> string('job_id');
            $table -> string('job_title');
            $table -> string('job_type');
            $table -> text('job_description');
            $table -> text('education');
            $table -> string('position');
            $table -> text('experience');
            $table -> text('personal_attributes');
            $table -> text('skills_competencies');
            $table -> string('deadline');
            $table -> string('status');
            $table->timestamps();
        });

        Schema::create('job_details', function (Blueprint $table) {
            $table->id();

            $table -> string('applicant_id');
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
            $table -> text('responsilibities');

            $table -> string('current_employer2');
            $table -> string('position_held2');
            $table -> string('duration_of_employment2');
            $table -> text('responsilibities2');

            $table -> unsignedBigInteger('position_id');
            $table -> foreign('position_id') -> references('id') -> on('post_job') -> onDelete('cascade');

            // Education Background
            $table -> string('highest_qualification');
            $table -> string('institution_name');
            $table -> string('certificate');
            $table -> string('year_of_graduation');

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
            $table -> text('reason'); // Why do you want to work at Dernan Salt Limited?
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

        Schema::create('referee_testimonies', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('applicant_id');
            $table -> foreign('applicant_id') -> references('id') -> on('job_details') -> onDelete('cascade');
            $table -> text('testimony');
            $table -> string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_jobs');
        Schema::dropIfExists('job_details');
        Schema::dropIfExists('referee_testimonies');
    }
};
