<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(10),
            'description' => fake()->text(30),
            'category' => fake()->randomElement(['Strength', 'Warm Up', 'Cardio', 'Flexibility', 'Mobility', 'Core']),
            'video_url' => 'videourl',
            'image_url' => 'imageurl',
            'muscle_group' => fake()->randomElement(['Chest', 'Back', 'Legs', 'Shoulders', 'Core']),
            'difficulty' => fake()->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'requires_equipment' => fake()->boolean()
        ];
    }
}
