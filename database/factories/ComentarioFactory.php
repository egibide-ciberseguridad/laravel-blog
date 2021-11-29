<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'texto' => $this->faker->text(100),
            'fecha' => $this->faker->dateTime(),
            'visible' => $this->faker->boolean(),
        ];
    }
}
