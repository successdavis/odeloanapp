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
                        $table->string('name');
            $table->string('state');
            $table->string('lga');
            $table->string('gender');
            $table->string('title')->nullable();
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('business_name')->nullable();
            $table->string('dob');
            $table->string('address');
            $table->string('working_status');
            $table->string('passport')->nullable();
            $table->string('description')->nullable();
        ];
    }
}
