<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCouncil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date'
    ];

    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'id');
    }
}
