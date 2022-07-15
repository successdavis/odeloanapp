<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'state' => 'benue',
            'lga' => fake()->word,
            'gender' => 'M',
            'title' => 'Mr',
            'mobile' => "09078056989",
            'dob' => '1998-10-10 21:10:37',
            'r_address' => fake()->address(),
            'p_address' => fake()->address(),
            'working_status' => 'null',
        ];
    }
}
