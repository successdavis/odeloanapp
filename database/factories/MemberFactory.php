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
            'gender' => 'male',
            'title' => 'mr',
            'mobile' => "09078056989",
            'dob' => fake()->dateTimeThisCentury($max = 'now', $timezone = null),
            'address' => fake()->address(),
            'working_status' => 'null',
        ];
    }
}
