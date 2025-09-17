<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Group 101', 'Group 102', 'Group 201', 
                'Group 202', 'Group 301', 'IT-101', 
                'CS-202', 'Web Development', 'Design Group',
                'Group A', 'Group B', 'Group C',
                'Beginner Group', 'Advanced Group', 'Professional Group'
            ]),
        ];
    }
}
