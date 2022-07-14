<?php

namespace Tests\Feature;

use App\Models\Member;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateMemberTest extends TestCase
{
    /** @test */
    public function an_admin_can_register_a_new_member()
    {
        $member = Member::factory()->make(['dob' => '1998-10-10 21:10:37']);

        $response = $this->post('/members/register', $member->toArray())->json();

        $this->assertDatabaseHas('members', ['name' => $member->name]);
    }
}
