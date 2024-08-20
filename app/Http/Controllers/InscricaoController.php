<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InscricaoController extends Controller
{
    public function add(Request $request, Curso $curso)
    {
        $inscricao = Inscricao::create([
            'usuario_id' => Auth::id(),
            'curso_id' => $curso->id
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Inscrição adicionada ao curso.');
    }

    public function cancel(Curso $curso)
    {
        $inscricao = Inscricao::where('usuario_id', Auth::id())
                               ->where('curso_id', $curso->id)
                               ->first();

        if ($inscricao) {
            $inscricao->delete();
            return redirect()->route('dashboard')
                ->with('success', 'Inscrição cancelada com sucesso.');
        }

        return redirect()->route('dashboard')
            ->with('error', 'Inscrição não encontrada.');
    }
}
