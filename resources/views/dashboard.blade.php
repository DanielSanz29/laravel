@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Si quieres saber mas de nosotros echale un vistazo a esto</h1>

        <!-- Otras secciones del dashboard -->
        <!-- Otras secciones del dashboard -->
        <section class="about-section bg-light py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="https://via.placeholder.com/500x400?text=Nuestra+Historia" class="img-fluid rounded" alt="Nosotros">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <h2 class="mb-4">Sobre Nosotros</h2>
                        <p>En La Porción de Utebo, nos dedicamos a preparar pizzas artesanales con ingredientes frescos y de calidad. Nuestro equipo de chefs trabaja con pasión para ofrecerte una experiencia culinaria única.</p>
                        <p>Ven a visitarnos y descubre por qué somos la elección favorita de muchos en Utebo. ¡Te esperamos!</p>
                        <a href="#promociones" class="btn btn-primary">Descubre nuestras promociones</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de redes sociales -->
        <section class="social-section bg-light py-5">
            <div class="container text-center">
                <h2 class="mb-4">Síguenos en nuestras redes sociales</h2>
                <div class="social-icons d-flex justify-content-center">
                    <!-- Enlace a Facebook -->
                    <a href="https://www.facebook.com/tupaginadefacebook" class="text-dark me-3" target="_blank">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>

                    <!-- Enlace a Instagram -->
                    <a href="https://www.instagram.com/tupaginaeninstagram" class="text-dark me-3" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>

                    <!-- Enlace a Twitter -->
                    <a href="https://www.twitter.com/tupaginaentwitter" class="text-dark me-3" target="_blank">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>

                    <!-- Enlace a TikTok (opcional) -->
                    <a href="https://www.tiktok.com/@tupaginaentiktok" class="text-dark me-3" target="_blank">
                        <i class="fab fa-tiktok fa-2x"></i>
                    </a>

                    <!-- Enlace a YouTube (opcional) -->
                    <a href="https://www.youtube.com/c/tupaginaenyoutube" class="text-dark" target="_blank">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
