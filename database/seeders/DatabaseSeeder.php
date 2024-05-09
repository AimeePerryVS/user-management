<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        Role::create(['name' => 'admin']);

        $user = User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);

        $user->assignRole('admin');

        User::factory()->create([
            'name' => 'Test Non Admin',
            'email' => 'test2@example.com',
        ]);

        User::factory()->create([
            'name' => 'Non Verified User',
            'email' => 'test3@example.com',
            'email_verified_at' => null
        ]);
    }
}
