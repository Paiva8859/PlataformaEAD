<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ Auth::check() ? route('dashboard') : '/' }}">PlatEAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if (Auth::check())
                    @if (Auth::user()->isProfessor())
                        <li class="nav-item">
                            <a class="nav-link" href="/cursos">Dashboard de Cursos</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <span class="navbar-text">Olá, {{ Auth::user()->nome }}</span>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-light ms-3">Sair</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registro">Registre-se</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
