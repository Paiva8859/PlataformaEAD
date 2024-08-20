@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Criar Curso</h1>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('cursos.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm border border-secondary">
        @csrf

        <div class="form-group mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" name="titulo" class="form-control border-secondary" placeholder="Título" required>
        </div>

        <div class="form-group mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea name="descricao" class="form-control border-secondary" placeholder="Descrição" rows="5" required></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="localizacao" class="form-label">Localização:</label>
            <input type="text" name="localizacao" class="form-control border-secondary" placeholder="Localização" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
</div>
@endsection
