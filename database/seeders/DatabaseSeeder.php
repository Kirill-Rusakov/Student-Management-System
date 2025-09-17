<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Group;
use App\Models\Lesson;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Group::factory(15) -> create();
        $lessons = Lesson::factory(30) -> create();
        $students = Student::factory(100) -> create();

        foreach($students as $student)
        {
            $lessonsIds = $lessons -> random(5) -> pluck('id');
            $student -> lessons() -> attach($lessonsIds);
        }
    }
}
