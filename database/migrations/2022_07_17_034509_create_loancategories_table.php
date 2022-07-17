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
        Schema::create('loancategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('grace_period');
            $table->decimal('interest');
            $table->decimal('max_principal_amount')->nullable();
            $table->decimal('min_principal_amount')->nullable();
            $table->string('interest_method'); // Flat rate / Reducing Balance / Compound Interest
            $table->string('interest_period'); // Year, Month, Week, Day, Per Loan
            $table->string('repayment_cycle'); // Day / Weekly / Biweekly / Monthly / Bimonthly / Quarterly / Every 4 Months / Yearly,
            $table->decimal('fee')->nullable(); // if any fee is needed to be paid for loan to be process. can be in percentage
            $table->decimal('interest_after_maturity')->nullable(); // percentage if loan is fully due
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
        Schema::dropIfExists('loancategories');
    }
};
