<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * interest period deterimes if the interest is calculated daily or monthly etc
     * repayment cycle determines how often the user needs to pay off. even if interest is monthly we can still accepts payment on a weekly basis.
     * duration tells how long the loan will last
     * duration period determines if the value in duration field is for days, months or years
     * if the loan duration period is set to Month, then the repayment cycle and interest period cannot exceed monthly
     * @return void
     */
    public function up()
    {
        Schema::create('loancategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('grace_duration');
            $table->decimal('interest');
            $table->decimal('max_principal_amount')->nullable();
            $table->decimal('min_principal_amount')->nullable();
            $table->string('interest_method'); // Flat rate / Reducing Balance / Compound Interest
            $table->string('interest_period'); // Year, Month, Week, Day, Per Loan e.g.
            $table->integer('repayment_cycle'); // Day = 30 / Weekly = 4 / Biweekly = 2 / Monthly 1 / Bimonthly  / Quarterly / Every 4 Months / Yearly,
            $table->decimal('fee')->nullable(); // if any fee is needed to be paid for loan to be process. can be in percentage
            $table->decimal('fine')->nullable(); // Interest if member fails to pay
            $table->decimal('interest_after_maturity')->nullable(); // percentage if loan is fully due
            $table->decimal('flat_fee')->nullable(); // flat fee payment after completing the first four sitting payment
            $table->integer('duration')->nullable(); // default loan duration. This can be overide from the loan settings
            $table->string('duration_period')->nullable(); // Year, Month, Week, Day, Per Loan e.g. (is interest daily or monthly etc)
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
