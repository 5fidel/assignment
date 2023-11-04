<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->firstName(),
            'birthdate' => $this->faker->dateTimeBetween('1970-01-01', '2012-12-31'),
            'nationality' => $this->faker->country(),
            'building_id' => 1,
        ];
    }
}
