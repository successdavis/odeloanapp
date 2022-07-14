<?php

namespace Tests\Unit;

use App\Models\Member;
use Tests\TestCase;

class CreateMemberTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->data = Member::factory()
            ->make(['name' => null, 'date' => '1998-10-10 21:10:37'])
            ->toArray();
    }

    /** @test */
    public function it_requires_a_name()
    {
        $this->postJson('/members/register', $this->data)
            ->assertStatus(422);
    }
}
