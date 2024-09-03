<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
/**
 * @psalm-suppress UnusedClass
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
