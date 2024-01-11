<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


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
            "name"=>$this->faker->name,
            "email"=>$this->faker->email,
            "phone"=>$this->faker->phoneNumber,
            "age"=>$this->faker->numberBetween(20, 50),
            "gender"=>$this->faker->randomElement(["Male","Female","Mayo"]),
            "address"=>$this->faker->streetAddress
        ];
    }
}
