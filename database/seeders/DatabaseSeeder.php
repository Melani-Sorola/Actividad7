<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RoboticsKitsTableSeeder::class,
            CoursesTableSeeder::class,
            GroupsTableSeeder::class, // aquí debe coincidir exactamente con el nombre de la clase
        ]);
    }
}