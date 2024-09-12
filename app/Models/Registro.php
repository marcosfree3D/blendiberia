<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','email','comentarios','personas',
    'politica','blendiberia','talleres','aeub'];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
