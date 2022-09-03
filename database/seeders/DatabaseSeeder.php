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
         \App\Models\User::factory(3)->create();

         \App\Models\User::factory()->create([
             'name' => 'Success David',
            'email' => 'admin@gmail.com'
         ]);

         $this->call([
//            MemberSeeder::class,
            LoancategorySeeder::class,
        ]);
    }
}
