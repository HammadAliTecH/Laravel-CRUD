<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stu_record>
 */
class Stu_recordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail(),
            "class" => $this->faker->randomElement(['09TH','10TH','11TH','12TH']),
            "age"  => $this->faker->numberBetween(18,30)
        ];
    }
}
