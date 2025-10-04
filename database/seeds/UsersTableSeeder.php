<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Group;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Obtenemos grupos
        $beginner = Group::where('name', 'Beginner')->first();
        $intermediate = Group::where('name', 'Intermediate')->first();
        $advanced = Group::where('name', 'Advanced')->first();

        // Estudiantes
        User::create([
            'name' => 'Juan Perez',
            'email' => 'juan@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
            'group_id' => $beginner->id,
        ]);

        User::create([
            'name' => 'Ana López',
            'email' => 'ana@example.com',
            'password' => Hash::make('password123'),
            'role' => 'student',
            'group_id' => $intermediate->id,
        ]);

        // Profesor
        User::create([
            'name' => 'Profesor Robótica',
            'email' => 'profesor@example.com',
            'password' => Hash::make('password123'),
            'role' => 'teacher',
        ]);

        // Administrador
        User::create([
            'name' => 'Admin Escuela',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);
    }
}