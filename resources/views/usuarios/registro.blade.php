@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Registrar-se</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('usuarios.registro') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group mb-4">
            <label for="password_confirmation" class="form-label">Confirme a Senha</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar-se</button>
    </form>
</div>
@endsection
