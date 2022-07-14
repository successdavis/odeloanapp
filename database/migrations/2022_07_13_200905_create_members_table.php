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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('state');
            $table->string('lga');
            $table->string('gender');
            $table->string('title')->nullable();
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('business_name')->nullable();
            $table->dateTime('dob');
            $table->string('serial_no')->nullable();
            $table->string('address');
            $table->string('working_status');
            $table->string('passport')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('members');
    }
};
