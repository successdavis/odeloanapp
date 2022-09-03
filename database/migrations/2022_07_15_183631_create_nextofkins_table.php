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
        Schema::create('nextofkins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Relationship');
            $table->string('address');
            $table->string('mobile');
            $table->string('gender');
            $table->foreignId('user_id')
              ->constrained()
              ->onUpdate('cascade')
              ->onDelete('cascade');
            $table->string('email')->nullable();
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
        Schema::dropIfExists('nextofkins');
    }
};
