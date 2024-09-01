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

        Schema::create('applicant_logins', function (Blueprint $table) {
            $table->id();
            $table -> string('applicant_id');
            $table -> string('first_name');
            $table -> string('last_name');
            $table -> string('email');
            $table -> string('password') -> nullable();

            $table -> bigInteger('position')->unsigned()->index()->nullable();
            $table -> foreign('position') -> references('id') -> on('post_jobs') ->onDelete('cascade');

            $table -> timestamp('verified_at') -> nullable();
            $table -> timestamps();
        });

        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            
            // Personnal Info
            $table -> string('first_name') -> nullable();
            $table -> string('middle_name') -> nullable();
            $table -> string('last_name') -> nullable();
            $table -> string('dob') -> nullable();
            $table -> string('gender') -> nullable();
            $table -> string('nationality') -> nullable();
            $table -> string('address') -> nullable();
            $table -> string('number') -> nullable();
            $table -> string('email') -> nullable();

            // Work Experience
            $table -> string('current_employer') -> nullable();
            $table -> string('company_name') -> nullable();
            $table -> string('company_address') -> nullable();
            $table -> string('position_held') -> nullable();
            $table -> string('duration_of_employment_from') -> nullable();
            $table -> string('duration_of_employment_to') -> nullable();
            $table -> text('responsilibities') -> nullable();

            $table -> string('current_employer2') -> nullable();
            $table -> string('company_name2') -> nullable();
            $table -> string('company_address2') -> nullable();
            $table -> string('position_held2') -> nullable();
            $table -> string('duration_of_employment_from2') -> nullable();
            $table -> string('duration_of_employment_to2') -> nullable();
            $table -> text('responsilibities2') -> nullable();

            $table -> bigInteger('position')->unsigned()->index()->nullable();
            $table -> foreign('position') -> references('id') -> on('applicant_logins') ->onDelete('cascade');

            // Education Background
            $table -> string('institution_name') -> nullable();
            $table -> string('certificate') -> nullable();
            $table -> string('year_of_graduation') -> nullable();
            $table -> string('year_began') -> nullable();

            $table -> string('institution_name2') -> nullable();
            $table -> string('certificate2') -> nullable();
            $table -> string('year_of_graduation2') -> nullable();
            $table -> string('year_began2') -> nullable();

            $table -> string('institution_name3') -> nullable();
            $table -> string('certificate3') -> nullable();
            $table -> string('year_of_graduation3') -> nullable();
            $table -> string('year_began3') -> nullable();

            $table -> string('school_name') -> nullable();
            $table -> string('secondary_certificate') -> nullable();
            $table -> string('year_of_completion') -> nullable();

            // Referee
            $table -> string('referee_name') -> nullable();
            $table -> string('referee_position') -> nullable();
            $table -> string('referee_company') -> nullable();
            $table -> string('referee_number') -> nullable();
            $table -> string('referee_email') -> nullable();

            $table -> string('referee_name2') -> nullable();
            $table -> string('referee_position2') -> nullable();
            $table -> string('referee_company2') -> nullable();
            $table -> string('referee_number2') -> nullable();
            $table -> string('referee_email2') -> nullable();

            // Other Relevant Information
            $table -> string('skills_certificate') -> nullable();
            $table -> text('reason') -> nullable(); // Why do you want to work at Dernan Salt Limited?
            $table -> string('availability') -> nullable();

            // Document Uploads
            $table -> string('image') -> nullable();
            $table -> string('cv') -> nullable();
            $table -> string('cerificates_acquired') -> nullable();
            $table -> string('cover_letter') -> nullable();
            $table -> string('other_relevant_doc') -> nullable();

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
        Schema::dropIfExists('applicant_logins');
        Schema::dropIfExists('job_details');
        Schema::dropIfExists('referee_testimonies');
    }
};
