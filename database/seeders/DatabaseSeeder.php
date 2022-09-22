<?php

namespace Database\Seeders;

use App\Models\Loancategory;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Success David',
            'email' => 'admin@gmail.com',
            'account_number' => '1000001001',
            'admin' => 1
        ]);
        \App\Models\User::factory(3)->create();


        $this->call([
//            MemberSeeder::class,
            LoancategorySeeder::class,
        ]);
    }
}
