<?php

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\RoboticsKit;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        // Obtenemos los kits existentes
        $starterKit = RoboticsKit::where('name', 'StarterKit')->first();
        $eduKit = RoboticsKit::where('name', 'Educational Robotics Kit')->first();
        $kit5 = RoboticsKit::where('name', 'Kit5')->first();

        $courses = [
            ['course_key' => 'Rob101', 'title' => 'Introduction to Robotics', 'robotics_kit_id' => $starterKit->id],
            ['course_key' => 'Rob102', 'title' => 'Introduction to Automation', 'robotics_kit_id' => $starterKit->id],
            ['course_key' => 'Rob103', 'title' => 'Programming for Robotics', 'robotics_kit_id' => $eduKit->id],
            ['course_key' => 'Rob104', 'title' => 'Characteristics of a Robot', 'robotics_kit_id' => $kit5->id],
        ];

        foreach($courses as $course) {
            Course::create($course);
        }
    }
}