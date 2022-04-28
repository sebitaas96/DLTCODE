<nav class="navbar navbar-expand-lg navbar-light">
    <div class="justify-content-between container">

        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ asset('img/logo/horizontal-primary.webp') }}">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#nuestros-servicios') }}">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#nuestros-asesores') }}">NUESTROS ASESORES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#protection') }}">PROTECCIÓN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#equipo') }}">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="text-primary btn-light nav-link" href="{{ url('/herramientas') }}">HERRAMIENTAS</a>
                </li>

                @if(Auth::user())
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-muted btn-sm dropdown-toggle p-2" type="button" id="userMenu"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                title="{{ "Bienvenid@ ". Auth::user()->name  }}"
                        >
                            <img width="20" src="{{ asset('img/icon/user.png') }}"/> {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="userMenu">
                            <div class="dropdown-item-text text-muted">
                                <small>Bienvenid@</small> <br> <strong>{{ Auth::user()->name  }}</strong>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
