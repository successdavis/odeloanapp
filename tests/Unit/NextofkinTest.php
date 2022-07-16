<?php

namespace Tests\Unit;

use App\Models\Member;
use App\Models\Nextofkin;
use Tests\TestCase;

class NextofkinTest extends TestCase
{
        /** @test */
    public function it_belongs_to_a_member()
    {
        $nextofking = Nextofkin::factory()->make();
        $this->assertInstanceOf(Member::class, $nextofking->member);
    }
}
