<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',100);
            $table->string('password',255);
            $table->string('job', 250);
            $table->string('University');
            $table->enum('status', ['enabled', 'disabled','blocked'])->default('enabled');
            $table->string('image');
            $table->boolean('is_admin')->default(0);
            $table->string('access_token', 64)->nullable();
            $table->string('oauth_token', 255)->nullable();
            $table->string('profile_cover');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('phone');
            $table->string('city');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
