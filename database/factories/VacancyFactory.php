<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Associate with a User model
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'company' => $this->faker->company,
            'image' => $this->faker->imageUrl(640, 480, 'business'),
            'salary' => $this->faker->numberBetween(30000, 100000),
            'type' => $this->faker->randomElement(['remote', 'part-time', 'full-time','contract','internship']),
            'place' => $this->faker->city,
            'status' => $this->faker->randomElement(['open','frozen', 'closed']),
            'opening_time' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'closing_time' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
