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
        Schema::create('social_identities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('provider', 20)->unique()->comment('Provider names. eg, facebook, google, twitter.');
            $table->string('provider_id')->comment('The provider_id of laravel/socialite. eg, Socialite::driver(\'github\')->user()->id');
            $table->string('token')->comment('Provider\'s token. eg, Socialite::driver(\'github\')->user()->token');
            $table->string('refresh_token')->nullable()->comment('Provider\'s refresh_token. eg, Socialite::driver(\'github\')->user()->refresh_token');
            $table->string('expires_in')->nullable()->comment('Provider\'s expires_in. eg, Socialite::driver(\'github\')->user()->expires_in');
            $table->string('token_secret')->nullable()->comment('Provider\'s token_secret. eg, Socialite::driver(\'github\')->user()->token_secret');
            $table->json('extra_information')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_identities');
    }
};
