@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Todos os Cursos</h2>
    <div class="row">
        @foreach ($cursos as $curso)
            <div class="col-md-4 mb-4">
                @if (Auth::check())
                    <a href="{{ route('cursos.show', $curso->id) }}" class="text-decoration-none">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $curso->titulo }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $curso->professor->nome }}</h6>
                                <p class="card-text">{{ Str::limit($curso->descricao, 100) }}</p>
                            </div>
                        </div>
                    </a>
                @else
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $curso->titulo }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $curso->professor->nome }}</h6>
                            <p class="card-text">{{ Str::limit($curso->descricao, 100) }}</p>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
