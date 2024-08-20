@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">{{ $curso->titulo }}</h2>
                </div>
                <div class="card-body">
                    <h3 class="text-muted mb-3">{{ $curso->professor->nome }}</h3> <!-- Atualizado para exibir o nome do professor -->
                    <p class="mb-4">{{ $curso->descricao }}</p>
                    <p class="mb-4">Localização: <strong>{{ $curso->localizacao }}</strong></p>

                    @if (Auth::user()->isUsuario()) <!-- Exibe o botão de inscrição apenas para usuários -->
                        @php
                            $inscricao = Auth::user()->inscricoes->where('curso_id', $curso->id)->first();
                        @endphp

                        @if ($inscricao)
                            <!-- Se o usuário já estiver inscrito, exibe o botão para cancelar -->
                            <form method="POST" action="{{ route('inscricao.cancel', $curso->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancelar Inscrição</button>
                            </form>
                        @else
                            <!-- Se o usuário não estiver inscrito, exibe o botão para se inscrever -->
                            <form method="POST" action="{{ route('inscricao.add', $curso->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Fazer Inscrição</button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
