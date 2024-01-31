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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('tags')->nullable();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('content')->nullable();
            $table->string('color_theme')->default('blue');
            $table->string('link_url')->nullable();
            $table->string('link_type', 20)->nullable();
            $table->datetime('opened_at');
            $table->datetime('closed_at');
            $table->boolean('is_active', true);
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
