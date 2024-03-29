<?php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\Loancategory;
use App\Models\Payment;
use App\Models\User;
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
            'name'               => 'Short Term Loan (Fire Matching)',
            'grace_duration'       => 0,
            'interest'          => 10,
            'interest_method'   => 'Flat rate',
            'repayment_cycle'   => 14,
            'fine'              => 10,
            'flat_fee'          => 0,
            'duration'          => '2',
            'duration_period'          => 'Weeks',
        ]);
        $loan = Loan::factory()->create([
           'loancategory_id' => $category->id,
           'user_id' => 1,
            'maturity'  => new Carbon('2022-12-21'),
        ]);

        $payment = Payment::factory(3)->make([
                'billable_id' => null,
                'billable_type' => null,
                'user_id' => function() {
                    return User::factory()->create()->id;
                }
            ]
        );

        foreach($payment as $pay) {
            $loan->addPayment($pay->toArray());
        }

        Loancategory::factory()->create();
    }
}
