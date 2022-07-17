<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loancategory>
 */
class LoanCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'some loan title',
            'grace_duration' => 5,
            'interest'  => 10,
            'interest_method' => 'Flat rate',
            'interest_period'  => 'Month',
            'repayment_cycle'   => 12,
        ];
    }
}
