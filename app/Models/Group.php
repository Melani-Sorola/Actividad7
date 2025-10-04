<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Importar los modelos relacionados
use App\User;
use App\Models\Course;

class Group extends Model
{
    // use HasFactory;

    protected $fillable = ['name'];

    // Un grupo tiene muchos usuarios
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Un grupo puede tener muchos cursos (muchos a muchos)
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'group_course');
    }
}
