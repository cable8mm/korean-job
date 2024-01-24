<?php

use App\Enums\PostBranchEnum;
use App\Enums\TextareaType;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('branch', 20)->default(PostBranchEnum::kDefault())->comment('The reason not to use database is for more performances, expecially TPS.');
            $table->string('title');
            $table->text('content');
            $table->string('content_format', 10)->default(TextareaType::kDefault())->comment('a type of Content column. eg, html, markdown and text. refer to TextareaType enum.');
            $table->unsignedInteger('comment_count')->default(0);
            $table->unsignedBigInteger('hit')->default(0);
            $table->boolean('is_blind')->default(false)->comment('If true, this post is unvisible. Who can set this column are both post owner and admin.');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
