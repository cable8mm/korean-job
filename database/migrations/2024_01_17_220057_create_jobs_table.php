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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id');
            $table->string('title');
            $table->string('job_type', 20);   // Full-time, Part-time, Contract and Temporary
            $table->string('job_position'); // Restaurant Manager
            $table->string('job_requirement_certification')->nullable();    // Bachelor of Science in Computer Engineering
            $table->unsignedSmallInteger('job_experience_period')->default(0);
            $table->string('work_hours');   // 8am to 5pm, Monday to Friday
            $table->string('working_area');    // Auckland CBD, New Zealand
            $table->string('wages_and_benefits');   // We offer a competitive salary and a comprehensive benefits package.
            $table->string('application_process');   // Please send a resume and completed employment application to the HR manager at abc@abc.com
            $table->boolean('has_salary')->default(true);
            $table->unsignedInteger('salary_from')->nullable();
            $table->unsignedInteger('salary_to')->nullable();
            $table->string('job_required');   // Demonstrated compoter skills in MS Office, including Word, Excel and Outlook are a plus.
            $table->string('job_preferred');   // CAs or CPAs is, preferred, but not required.
            $table->unsignedSmallInteger('number_of_potisions');   // 0
            $table->string('description_type', 10)->default('markdown'); // html, markdown, text
            $table->string('description');
            $table->string('contact');
            $table->dateTime('opened_at')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->unsignedBigInteger('hit')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
