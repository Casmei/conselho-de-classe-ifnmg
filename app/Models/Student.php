<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo_url',
        'registration',
        'contract',
        'class_id'
    ];

    public function classes()
    {
        return $this->hasMany(Classe::class, 'class_id');
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'id');
    }
}
