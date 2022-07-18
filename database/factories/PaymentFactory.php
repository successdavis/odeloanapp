<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount'    => 20000,
            'user_id'   => function(){
                User::factory()->create()->id;
            },
            'payment_method'    => 'Cash',
            'transaction_ref'   => '34343'
        ];
    }
}
