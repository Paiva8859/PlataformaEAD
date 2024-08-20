<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Recupera todos os cursos com busca opcional
        $cursos = Curso::with('professor')
            ->when($search, function ($query, $search) {
                return $query->where('titulo', 'like', "%{$search}%")
                             ->orWhere('descricao', 'like', "%{$search}%")
                             ->orWhere('localizacao', 'like', "%{$search}%");
            })
            ->get();

        // Recupera os cursos em que o usuário autenticado está inscrito
        $cursosInscritos = Auth::user()->inscricoes->pluck('curso');

        // Passa as variáveis para a view
        return view('usuarios.dashboard', compact('cursos', 'cursosInscritos'));
    }
}
