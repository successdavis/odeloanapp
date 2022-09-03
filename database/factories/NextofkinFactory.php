<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nextofkin>
 */
class NextofkinFactory extends Factory
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
            'gender' => 'M',
            'mobile' => "09078056989",
            'Relationship' => "Son",
            'address' => fake()->address(),
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}
