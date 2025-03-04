@extends('layouts.app')
@section('content')
    <!-- Sección de cabecera -->
    <section class="hero-section d-flex align-items-center text-white"
             style="background-image: url('https://www.laporcion.es/laporcion.jpg'); background-size: cover; background-position: center;">
        <div class="container text-center">
        <div class="container text-center">
            <h1 class="display-3 fw-bold">Bienvenido a La Porción de Utebo</h1>
            <p class="lead">La mejor pizza artesanal de la ciudad. Sabores únicos que harán tu paladar vibrar.</p>
            <a href="{{ route('pizzas') }}" class="btn btn-lg btn-outline-light mt-4">Ver Menú</a>
        </div>
    </section>
    <!-- Sección Promociones -->
    <section id="promociones" class="promotions-section bg-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Promoción Especial: ¡Oferta del Miércoles!</h2>
            <div class="row justify-content-center">
                <!-- Tarjeta de promoción especial -->
                <div class="col-md-8">
                    <div class="card shadow-lg border-0">
                        <div class="card-body text-center p-5">
                            <h3 class="card-title text-success">¡3 Pizzas por solo 30€!</h3>
                            <p class="card-text lead">Disfruta de nuestra oferta exclusiva los miércoles. Compra las 3 pizzas más populares por solo 30€ cuando haces tu pedido desde nuestra web.</p>
                            <p class="card-text font-weight-bold text-danger">¡Solo disponible los miércoles!</p>
                            <p class="card-text">Incluye:</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success"></i> Pizza Margarita</li>
                                <li><i class="fas fa-check text-success"></i> Pizza Pepperoni</li>
                                <li><i class="fas fa-check text-success"></i> Pizza Cuatro Quesos</li>
                            </ul>
                            <a href="{{ route('pizzas') }}" class="btn btn-lg btn-success">Haz tu pedido ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección Testimonios -->
    <section class="testimonials-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
            <div class="row">
                <!-- Testimonio 1 -->
                <div class="col-md-4 text-center">
                    <blockquote class="blockquote">
                        <p>"La mejor pizza que he probado en mi vida. ¡Absolutamente deliciosa!"</p>
                        <footer class="blockquote-footer">Juan Pérez</footer>
                    </blockquote>
                </div>

                <!-- Testimonio 2 -->
                <div class="col-md-4 text-center">
                    <blockquote class="blockquote">
                        <p>"El servicio es excelente y las pizzas son increíbles. ¡Volveré pronto!"</p>
                        <footer class="blockquote-footer">María López</footer>
                    </blockquote>
                </div>

                <!-- Testimonio 3 -->
                <div class="col-md-4 text-center">
                    <blockquote class="blockquote">
                        <p>"Recomiendo esta pizzería a todos mis amigos. La calidad es insuperable."</p>
                        <footer class="blockquote-footer">Carlos Ramírez</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Llamado a la acción -->
    <section class="cta-section bg-dark text-white py-5">
        <div class="container text-center">
            <h2 class="mb-3">¿Listo para disfrutar de nuestra deliciosa comida?</h2>
            <p class="lead">No esperes más. Descubre nuestro menú y sorprende a tus invitados con sabores inolvidables.</p>
            <a href="{{ route('pizzas') }}" class="btn btn-lg btn-warning">Ver Menú</a>
        </div>
    </section>

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
@endsection
