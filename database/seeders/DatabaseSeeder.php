<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Candidate A',
            'email' => 'ca@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Candidate B',
            'email' => 'cb@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Candidate C',
            'email' => 'cc@gmail.com',
        ]);
        
        User::factory(5)->create();
        // $this->call([
        //     VoteSeeder::class,
        // ]);
    }
}