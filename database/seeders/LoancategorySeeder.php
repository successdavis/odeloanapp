<?php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\Loancategory;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoancategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Loancategory::factory()->create([
            'name'               => 'Long Term Loan',
            'grace_duration'       => 5,
            'interest'          => 10,
            'interest_method'   => 'Flat rate',
            'repayment_cycle'   => 12,
            'fine'              => 10,
            'flat_fee'          => 2000,
            'duration'          => '12',
            'duration_period'          => 'Months',
        ]);
        $loan = Loan::factory()->create([
           'loancategory_id' => $category->id,
           'member_id' => 1,
            'maturity'  => new Carbon('2022-12-21'),
        ]);

        $payment = Payment::factory(3)->make([
                'billable_id' => null,
                'billable_type' => null
            ]
        );

        foreach($payment as $pay) {
            $loan->addPayment($pay->toArray());
        }

        Loancategory::factory()->create();
    }
}
