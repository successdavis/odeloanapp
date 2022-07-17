<?php

namespace Tests\Unit;

use App\Models\Loan;
use App\Models\Loancategory;
use Tests\TestCase;

class LoanTest extends TestCase
{
    /** @test */
    public function it_belongs_to_a_loancategory()
    {
        $loancategory = Loancategory::factory()->create();

        $loan = Loan::factory()->create([
            'loancategory_id' => $loancategory->id,
        ]);

        $this->assertInstanceOf(Loancategory::class, $loan->category);
    }
}
