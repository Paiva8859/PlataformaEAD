<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descricao', 'localizacao', 'usuario_id'
    ];  

    // Relacionamento com o usuário que é o professor
    public function professor()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id')->where('tipo', 'professor');
    }
}
