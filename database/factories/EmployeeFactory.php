<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "gender" => $this->faker->randomElement(['Pria', 'Wanita']),
            "age" => $this->faker->numberBetween(20, 35),
            "phone" => $this->faker->phoneNumber(),
            'photo' => $this->faker->imageUrl(),
            'team_id' => $this->faker->numberBetween(1, 5),
            'role_id' => $this->faker->numberBetween(1, 15),
            "is_verified" => $this->faker->boolean(),
            "verified_at" => $this->faker->dateTime(),

        ];
    }
}
