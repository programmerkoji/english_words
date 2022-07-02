<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'word_en' => $this->faker->unique->word,
            'word_ja' => $this->faker->word,
            'part_of_speech' => $this->faker->numberBetween(1, 5),
            'memory' => $this->faker->numberBetween(1, 3),
            'memo' => $this->faker->text,
        ];
    }
}