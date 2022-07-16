<?php

namespace Tests\Unit;

use App\Models\Member;
use App\Models\Nextofkin;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MemberTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function ad_admin_can_view_all_member()
    {
        $this->get('/members')
            ->assertStatus(200);
    }

    /** @test */
    public function it_has_an_endpoint_to_view_a_single_member()
    {
        $this->get('/members/1')
            ->assertStatus(200);
    }

    /** @test */
    public function it_has_a_sponsor()
    {
        $member = Member::factory()->create();
        $nextofkin = Nextofkin::factory()->create(['member_id' => $member->id]);

        $this->assertInstanceOf(Nextofkin::class, $member->nextOfKin);
    }
    
    /** @test */
    public function it_can_add_a_next_of_king()
    {
        
    }
}
