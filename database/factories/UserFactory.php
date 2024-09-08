<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    // Static properties to store used numbers
    private static $usedNumbers = [];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone_number' => $this->generateUniquePhoneNumber(),
            'password' =>  Hash::make('password'),
            'role_id' => $this->faker->numberBetween(1, 2),
            'status'=> $this->faker->randomElement(['active','inactive','banned']),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }


    /**
     * Generate a unique phone number within the specified ranges.
     *
     * @return string
     */
    private function generateUniquePhoneNumber()
    {
        do {
            $number = $this->generateRandomPhoneNumber();
        }
        while (in_array($number, self::$usedNumbers));

        // Add the number to the list of used numbers
        self::$usedNumbers[] = $number;

        return (string) $number;
    }

    /**
     * Generate a random phone number within the specified ranges.
     *
     * @return int
     */
    private function generateRandomPhoneNumber()
    {
        $range = mt_rand(0, 1) === 0
            ? [61000001, 65999999]
            : [71000001, 71999999];

        return mt_rand($range[0], $range[1]);
    }
}
