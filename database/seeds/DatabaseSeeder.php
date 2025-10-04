<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GroupsTableSeeder::class,
            RoboticsKitsTableSeeder::class,
            CoursesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}