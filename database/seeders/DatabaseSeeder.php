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
        if (User::whereUsername('test')->first()?->count() === 0) {
            User::factory()->withPersonalTeam()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'username' => 'test',
                'password' => bcrypt('password'),
            ]);
        }
        if (User::whereUsername('admin')->first()?->count() === 0) {
            User::factory()->withPersonalTeam()->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => bcrypt('password'),
            ]);
        }

    }
}
