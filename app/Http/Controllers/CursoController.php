<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarioId = Auth::id();
        $nomeProfessor = Auth::user()->nome;

        // Filtra os cursos com base no nome do professor
        $cursos = Curso::whereHas('professor', function($query) use ($nomeProfessor) {
            $query->where('nome', $nomeProfessor);
        })->get();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'localizacao' => 'required',
        ]);

        Curso::create([
            'titulo' => $dados['titulo'],
            'descricao' => $dados['descricao'],
            'localizacao' => $dados['localizacao'],
            'usuario_id' => Auth::id(), // Associa o curso ao usuário logado
        ]);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso criado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        $dados = $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'localizacao' => 'required',
        ]);

        $curso->update($dados);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')
            ->with('success', 'Curso deletado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    // Método para exibir todos os cursos
    public function exibirTodos()
    {
        // Buscar todos os cursos
        $cursos = Curso::all();

        // Retornar a view com os cursos
        return view('cursos.exibir-tudo', compact('cursos'));
    }
}
