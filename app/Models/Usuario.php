<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $fillable = [
        'nome', 'email', 'password', 'tipo', 'cpf', 'materia'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }

    public function isUsuario()
    {
        return $this->tipo === 'usuario';
    }

    public function isProfessor()
    {
        return $this->tipo === 'professor';
    }
}
