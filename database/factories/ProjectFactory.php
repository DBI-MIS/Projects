<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->company();

        $category = fake()->randomElement([ 
            'Malls',
            'Power Plants',
                                'Office Buildings',
                                'Hotel and Resorts',
                                'Pharmaceutical Plants',
                                'Schools and Universities',
                                'Government Building',
                                'Supermarket',
                                'Mixed Development',
                                'Healthcare',
                                'Green Building',
                                'Airports',
                                'Manufacturing Plant',
                                'Hospitals and Medical Center',

        ]);

        return [
            'name' => $title,
            'img' => fake()->imageUrl(),
            'address' => fake()->address(),
            'description' => fake()->paragraph(),
            'category' => $category,
            'tag' => fake()->word(1),
            'published_at' => now(),
            'slug' =>Str($title, '-'),
            'status' => 1,
            'featured' => 0,
        ];
    }
}
