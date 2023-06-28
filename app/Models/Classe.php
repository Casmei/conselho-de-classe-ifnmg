<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillabel = [
        'name',
        'course_id'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'course_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'classes_to_teacher', 'class_id');
    }
}
