@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Carrossel de Cursos -->
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            @foreach ($cursos as $index => $curso)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <a href="{{ route('cursos.show', $curso->id) }}" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $curso->titulo }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $curso->professor->nome }}</h6>
                                <p class="card-text">{{ Str::limit($curso->descricao, 100) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a href="/exibir-tudo" class="btn btn-lg btn-custom mt-4">Ver todos os cursos</a>

    @if (Auth::check())
        @if (Auth::user()->isUsuario())
            <h2 class="my-4">Cursos Inscritos</h2>
            @if ($cursosInscritos->isEmpty())
                <p>Você não está inscrito em nenhum curso.</p>
            @else
                <div class="row">
                    @foreach ($cursosInscritos as $curso)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $curso->titulo }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $curso->professor->nome }}</h6>
                                    <p class="card-text">{{ Str::limit($curso->descricao, 100) }}</p>
                                    <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-primary">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
    @endif
</div>
@endsection
