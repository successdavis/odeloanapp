<?php

namespace Tests\Unit;

use Tests\TestCase;

class MemberTest extends TestCase
{
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
}
