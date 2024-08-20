<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::take(3)->get();
        return view('home', compact('cursos'));
    }
}
