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
            'en_header' => $this->faker->words(3, true),
            'nl_header' => $this->faker->words(3, true),
            'en_content' => $this->faker->text(1000),
            'nl_content' => $this->faker->text(1000),
        ];
    }
}
