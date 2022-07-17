<?php

namespace Tests\Unit;

use App\Models\Loan;
use App\Models\Loancategory;
use Tests\TestCase;

class LoanCategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
     public function it_belongs_to_a_loan()
    {
    }

    /** @test */
    public function it_has_child_model_as_loan()
    {
        $loancategory = Loancategory::factory()->create();


        $loan = Loan::factory()->create([
            'loancategory_id' => $loancategory->id,
        ]);

        $this->assertCount(1, $loancategory->loans()->get());
    }
}
