<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies'; // Asegurar el nombre correcto de la tabla

    protected $fillable = ['title', 'synopsis', 'year', 'cover'];
}
