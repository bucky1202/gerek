<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'user_id' => User::factory(), // Assuming a User factory exists
                'fullname' => $this->faker->name,
                'date_of_birth' => $this->faker->date,
                'address' => $this->faker->address,
                'avatar' => $this->faker->imageUrl,
                'job_title' => $this->faker->jobTitle,
            ];
    }
}
