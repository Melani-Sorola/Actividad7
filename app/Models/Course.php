<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Importar los modelos relacionados
use App\Models\RoboticsKit;
use App\Models\Group;

class Course extends Model
{
    protected $fillable = ['course_key', 'title', 'cover', 'content', 'robotics_kit_id'];

    // Un curso pertenece a un kit de robótica
    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    // Un curso pertenece a muchos grupos
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_course');
    }
}
