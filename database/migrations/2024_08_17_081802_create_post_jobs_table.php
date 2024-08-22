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
            $table -> string('job_title');
            $table -> string('job_type');
            $table -> text('job_description');
            $table -> text('key_responsibilities');
            $table -> text('education');
            $table -> text('position');
            $table -> text('experience');
            $table -> text('personal_attributes');
            $table -> text('skills_competencies');
            $table -> string('deadline');
            $table -> string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_jobs');
    }
};
