@extends('layouts.frontend')
@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <img src="{{ asset('frontend/img/sekolah smp.webp')}}" alt="" data-aos="fade-in" style="filter: blur(10px);">
        <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2>Selamat Datang</h2>
                    <p>I'm a professional illustrator from San Francisco</p>
                    <a href="about" class="btn-get-started">Informasi</a>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
</main>
@endsection