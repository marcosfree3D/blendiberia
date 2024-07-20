<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponent extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','cargo','imagen_perfil','curriculum',
                            'artstation','instagram','web','discord','twitter',
                            'email'];
}
