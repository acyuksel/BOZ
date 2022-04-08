<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FrontEndSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'header' => $this->faker->words(3, true),
            'content' => $this->faker->text(1000),
            'language' => 'nl'
        ];
    }
}
