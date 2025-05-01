<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-danger px-4">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-danger" href="{{ route('home') }}">Vistas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('list') ? 'active' : '' }}"
                        href="{{ route('list') }}">Listado de películas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>