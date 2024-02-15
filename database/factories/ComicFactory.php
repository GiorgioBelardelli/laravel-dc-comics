<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Title' => fake() -> sentence(),
            'Volume_number' => fake() -> randomNumber(2),
            'Author'=> fake() -> sentence(2, false),
            'Price' => fake() -> randomFloat(2, 1, 99),
        ];
    }
}
