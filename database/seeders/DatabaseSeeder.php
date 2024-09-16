<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Profile;
use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Role::factory()->create(['name' => 'admin']);
        Role::factory()->create(['name' => 'user']);

        User::factory(100)->create()->each(function ($user) {
            Profile::factory()->create([
                'user_id' => $user->id,
            ]);
        });

        Vacancy::factory(100)->create();
    }
}
