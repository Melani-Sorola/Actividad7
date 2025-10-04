<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitsTableSeeder extends Seeder
{
    public function run()
    {
        $kits = ['StarterKit', 'Educational Robotics Kit', 'Kit5'];

        foreach ($kits as $kit) {
            RoboticsKit::create(['name' => $kit]);
        }
    }
}