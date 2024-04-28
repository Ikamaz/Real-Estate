<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Database\ListingFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Test user',
            'email' => 'test@example.com'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test user2',
            'email' => 'test2@example.com'
        ]);

        \App\Models\Listing::factory(20)->create([
            'by_user_id' => 1
        ]);
    }
}
