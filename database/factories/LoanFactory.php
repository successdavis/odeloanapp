<?php

namespace Database\Factories;

use App\Models\Loancategory;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'loancategory_id' => function() {
                return Loancategory::factory()->create()->id;
            },
            'user_id' => function() {
                return User::factory()->create()->id;
            },
            'principal_amount'  => 100000.00,
            'loan_interest' => 10,
            'grace_period' => 5
        ];
    }
}
