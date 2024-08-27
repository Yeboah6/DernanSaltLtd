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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table -> string('position');
            $table -> string('status');
            $table->timestamps();
        });

        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table -> string('job_id');
            $table -> string('job_title');
            $table -> string('job_type');
            $table -> bigInteger('position_id')->unsigned()->index()->nullable();
            $table -> text('job_description');
            $table -> text('education');
            $table -> text('experience');
            $table -> text('personal_attributes');
            $table -> text('skills_competencies');
            $table -> string('deadline');
            $table -> string('status');
            $table->timestamps();

            $table -> foreign('position_id') -> references('id') -> on('positions') ->onDelete('cascade');
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
            $table -> string('company_name');
            $table -> string('company_address');
            $table -> string('position_held');
            $table -> string('duration_of_employment_from');
            $table -> string('duration_of_employment_to');
            $table -> text('responsilibities');

            $table -> string('current_employer2');
            $table -> string('company_name2');
            $table -> string('company_address2');
            $table -> string('position_held2');
            $table -> string('duration_of_employment_from2');
            $table -> string('duration_of_employment_to2');
            $table -> text('responsilibities2');

            $table -> bigInteger('post_jobs_id')->unsigned()->index()->nullable();
            $table -> foreign('post_jobs_id') -> references('id') -> on('post_jobs') ->onDelete('cascade');

            // Education Background
            $table -> string('institution_name');
            $table -> string('certificate');
            $table -> string('year_of_graduation');
            $table -> string('year_began');

            $table -> string('institution_name2');
            $table -> string('certificate2');
            $table -> string('year_of_graduation2');
            $table -> string('year_began2');

            $table -> string('institution_name3');
            $table -> string('certificate3');
            $table -> string('year_of_graduation3');
            $table -> string('year_began3');

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
            $table -> string('document');
            $table -> bigInteger('job_details_id')->unsigned()->index()->nullable();
            $table -> foreign('job_details_id') -> references('id') -> on('job_details') ->onDelete('cascade');
            $table -> text('testimony');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
        Schema::dropIfExists('post_jobs');
        Schema::dropIfExists('job_details');
        Schema::dropIfExists('referee_testimonies');
    }
};
