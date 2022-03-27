<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    protected $fillable = ['nombre','apellido','foto','titulo','cursoAsociado'];
    use HasFactory;
}
