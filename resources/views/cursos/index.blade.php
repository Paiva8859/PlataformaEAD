@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Seus Cursos</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class="btn btn-success" href="{{ route('cursos.create') }}">
                <i class="bi bi-plus-circle"></i> Criar Novo Curso
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Localização</th>
                        <th scope="col">Professor</th>
                        <th scope="col" width="280px">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $curso->titulo }}</td>
                        <td>{{ $curso->descricao }}</td>
                        <td>{{ $curso->localizacao }}</td>
                        <td>{{ $curso->professor->nome ?? 'N/A' }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Ações">
                                <a class="btn btn-primary btn-sm" href="{{ route('cursos.edit', $curso->id) }}">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este curso?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i> Deletar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
