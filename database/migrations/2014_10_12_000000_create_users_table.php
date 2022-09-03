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
            $table->string('name');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar_path')->nullable();
            $table->string('state');
            $table->string('lga');
            $table->string('gender');
            $table->string('title')->nullable();
            $table->string('mobile');
            $table->string('email')->nullable()->unique();
            $table->string('business_name')->nullable();
            $table->dateTime('dob');
            $table->string('serial_no')->nullable();
            $table->string('r_address');
            $table->string('p_address');
            $table->string('working_status');
            $table->string('passport')->nullable();
            $table->string('description')->nullable();
            $table->string('sponsorid')->nullable();
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
