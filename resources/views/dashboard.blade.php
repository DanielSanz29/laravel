@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Si quieres saber mas de nosotros echale un vistazo a esto</h1>

        <!-- Otras secciones del dashboard -->

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
