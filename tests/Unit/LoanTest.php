<?php

namespace Tests\Unit;

use App\Models\Loan;
use App\Models\Loancategory;
use App\Models\Member;
use App\Models\Payment;
use Database\Factories\LoanFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LoanTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_belongs_to_a_loancategory()
    {
        $loancategory = Loancategory::factory()->create();

        $loan = Loan::factory()->create([
            'loancategory_id' => $loancategory->id,
        ]);

        $this->assertInstanceOf(Loancategory::class, $loan->category);
    }

    /** @test */
    public function it_belongs_to_a_member()
    {
        $loan = Loan::factory()->create();

        $this->assertInstanceOf(Member::class, $loan->owner);
    }

    /** @test */
    public function it_has_many_payments()
    {
        $payment = Payment::factory()->make([
                'billable_id' => null,
                'billable_type' => null
            ]
        );

        $loan = Loan::factory()->create();
        $loan->addPayment($payment);

        $this->assertCount(1, $loan->payments()->get());

    }
}
