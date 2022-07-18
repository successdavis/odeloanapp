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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('loancategory_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->decimal('principal_amount',8,2);
            $table->integer('duration')->nullable();
            $table->decimal('loan_interest')->nullable();
            $table->integer(('grace_period'))->nullable();
            $table->integer(('status'))->default('0'); // 0 => New, 1 => Current, 2 => Completed, 3 => Rejected
            $table->date('payment_date')->nullable(); // The date from which the repayment cycle should start counting from
            $table->date('release_date')->nullable(); // The date the loan was released
            $table->date('maturity')->nullable(); // if set then the loan should be mature at this date

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
        Schema::dropIfExists('loans');
    }
};
