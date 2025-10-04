<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\RoboticsKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'course_key' => 'C' . $this->faker->unique()->numberBetween(1000, 9999),
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(640, 480, 'education'),
            'content' => $this->faker->paragraph(5),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
        ];
    }
}