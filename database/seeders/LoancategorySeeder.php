<?php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\Loancategory;
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
        Loan::factory()->create([
           'loancategory_id' => $category->id,
           'member_id' => 1,
        ]);
        Loancategory::factory(2)->create();
    }
}
