<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
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
                'Mathematics', 'Programming', 'Database Systems',
                'Web Development', 'Algorithms', 'Design',
                'English Language', 'Physics', 'History',
                'Frontend Development', 'Backend Development',
                'Data Structures', 'Software Engineering',
                'Network Security', 'Mobile Development',
                'UI/UX Design', 'Cloud Computing'
            ]),
        ];
    }
}
