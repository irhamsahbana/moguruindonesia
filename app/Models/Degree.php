<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'tutor_degrees', 'degree_id', 'user_id');
    }
}
