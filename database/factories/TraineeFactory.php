<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_nm' => $this->faker->firstName(),
            'last_nm' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'trainee_ID' => Str::random(10),
            'course' => "Amber Group",
            'DOB' => $this->faker->date(),
            'telephone' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(["Male", "Female"]),
            'room' => $this->faker->randomElement(["A1", "A2", "A3", "A4", "A5",
                "A6", "A7", "A8", "A10", "A11", "A12",
                "B14", "B15", "B16", "B17", "B18", "B19", "B20", "B21", "B22", "B23",
                "B24", "C27", "C28", "C29", "C30"
            ])

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        //
    }
}
