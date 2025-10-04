<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Importar Course
use App\Models\Course;

class RoboticsKit extends Model
{
    protected $fillable = ['name'];

    // Un kit puede tener muchos cursos
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}