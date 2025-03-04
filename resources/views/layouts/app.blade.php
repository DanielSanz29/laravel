<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Porción de Utebo</title>
    <!-- Incluir Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluir FontAwesome para íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Incluir estilos personalizados -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Enlace al logo o título -->
        <a class="navbar-brand" href="{{ route('home') }}">La Porción de Utebo</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Menú público -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pizzas') }}">{{ __('messages.menu') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('messages.contact') }}</a>
                </li>

                <!-- Autenticación -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('messages.register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('messages.logout') }}
                            </a>
                        </div>
                    </li>
                @endguest

                <!-- Cambiador de idiomas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(App::getLocale()) }} <!-- Muestra el idioma actual -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="{{ route('lang.change', 'es') }}">Español</a></li>
                        <li><a class="dropdown-item" href="{{ route('lang.change', 'en') }}">English</a></li>
                        <li><a class="dropdown-item" href="{{ route('lang.change', 'fr') }}">Français</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<main class="py-4">
    <div class="container">
        @yield('content')
    </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2023 La Porción de Utebo. Todos los derechos reservados.</p>
        <div class="social-icons d-flex justify-content-center">
            <a href="#" class="text-white me-3" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-white me-3" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#" class="text-white" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
