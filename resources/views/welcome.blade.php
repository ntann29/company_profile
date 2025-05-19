@extends('layouts.frontend')
@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <img src="{{ asset('frontend/img/sekolah smp.webp')}}" alt="" data-aos="fade-in" style="filter: blur(5px);">
        <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 style="color: white; text-shadow: 2px 2px 2px black">Selamat Datang</h2>
                    <p style="color: white; text-shadow: 2px 2px 2px black; ">Temukan informasi seputar kegiatan sekolah, prestasi siswa, program akademik.</p>
                    <a href="informasi" class="btn-get-started">Informasi</a>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
</main>
@endsection