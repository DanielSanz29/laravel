@extends('layouts.app')

@section('content')
    <!-- Sección de cabecera -->
    <section class="hero-section d-flex align-items-center text-white" style="background-image: url('https://via.placeholder.com/1920x600?text=La+Porci%C3%B3n+de+Utebo'); background-size: cover; background-position: center; min-height: 100vh;">
        <div class="container text-center">
            <h1 class="display-3 fw-bold">La Porción de Utebo</h1>
            <p class="lead">La mejor pizza artesanal de la ciudad. Ven y disfruta de nuestra deliciosa comida.</p>
            <a href="{{ route('pizzas') }}" class="btn btn-lg btn-outline-light mt-4">Ver Menú</a>
        </div>
    </section>

    <!-- Acerca de nosotros -->
    <section class="about-section bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="https://via.placeholder.com/500x400?text=Nuestra+Historia" class="img-fluid rounded" alt="Nosotros">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="mb-4">Sobre Nosotros</h2>
                    <p>En La Porción de Utebo, nos dedicamos a preparar pizzas artesanales con ingredientes frescos y de calidad. Nuestro equipo de chefs trabaja con pasión para ofrecerte una experiencia culinaria única.</p>
                    <p>Ven a visitarnos y descubre por qué somos la elección favorita de muchos en Utebo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Redes sociales -->
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
@endsection
