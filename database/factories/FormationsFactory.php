<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\formations>
 */
class FormationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->name(),
            'price'=>fake()->numberBetween(10000,30000),
            'content'=>fake()->paragraph(10),
            'date'=>now(),
            'categorie_id'=>fake()->numberBetween(1,5)
        ];
    }
}
