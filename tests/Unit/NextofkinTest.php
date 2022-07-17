<?php

namespace Tests\Unit;

use App\Models\Member;
use App\Models\Nextofkin;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class NextofkinTest extends TestCase
{
    use DatabaseMigrations;
        /** @test */
    public function it_belongs_to_a_member()
    {
        $nextofking = Nextofkin::factory()->create();
        $this->assertInstanceOf(Member::class, $nextofking->member);
    }
}
