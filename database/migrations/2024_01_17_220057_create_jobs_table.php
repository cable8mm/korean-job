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
            $table->boolean('has_career_period')->default(true);  // Not-required,
            $table->unsignedSmallInteger('career_period_from')->nullable();
            $table->unsignedSmallInteger('career_period_to')->nullable();
            $table->boolean('has_salary')->default(true);
            $table->unsignedInteger('salary_from')->nullable();
            $table->unsignedInteger('salary_to')->nullable();
            $table->string('education', 100)->nullable();    // Bachelor of Science in Computer Engineering
            $table->string('working_area')->nullable();    // Auckland CBD, New Zealand
            $table->string('job_type', 20)->default('Full-time');   // Full-time, Part-time, Contract and Temporary
            $table->string('job_type_description')->nullable();
            $table->string('description_type', 10)->default('markdown'); // html, markdown, text
            $table->string('description');
            $table->string('apply_type')->default('Frequent');   // Periodic and Frequent
            $table->dateTime('opened_at')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->string('how_to_apply', 20)->default('email');   // email, website and this
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
