<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Persona extends Authenticatable
{
    use Notifiable;

    protected $table = 'persona';

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'usuario',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
