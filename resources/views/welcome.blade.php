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
                    <p style="color: white; text-shadow: 2px 2px 2px black; ">Temukan informasi seputar kegiatan sekolah, prestasi siswa, program akademik dan non akademik.</p>
                    <a href="#tentang" class="btn-get-started">Tentang</a>
                    <a href="#informasi" class="btn-get-started">Informasi</a>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="tentang" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Sekolah</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="{{ asset('frontend/img/upacara.webp')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 content">
                    <h2>Profile SMP MARHAS</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <ul>
                                <li>
                                    <span>
                                        SMP Marhas adalah sekolah menengah pertama yang berkomitmen mencetak generasi yang cerdas, berakhlak mulia, dan siap bersaing di era global.
                                        Dengan mengusung pendidikan berbasis karakter dan nilai-nilai keislaman, SMP Marhas menghadirkan suasana belajar yang kondusif, inklusif, dan penuh semangat.
                                        <br>
                                        Didukung oleh tenaga pendidik profesional, kurikulum nasional yang diperkuat dengan pengayaan agama, teknologi, dan keterampilan hidup,
                                        SMP Marhas terus berinovasi dalam membentuk peserta didik yang berprestasi di bidang akademik maupun non-akademik.
                                    </span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-circle"></i> <strong>VISI</strong> </li>
                                <li> <span>Menjadi Lembaga Pendidikan yang Prima, terdepan dan terpercaya dalam menyiapkan generasi muda yang cerdas, kreatif, dan berakhlak.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-circle"></i> <strong>MISI</strong> </li>
                                <li> <span>
                                        1. Menyiapkan sumber daya manusia yang handal. <br>
                                        2. Meningkatkan mutu kualitas pendidikan pengelolaan secara berkelanjutan dan berkeseimbangan. <br>
                                        3. Mengembangkan bakat minat generasi muda agar kreatif, imajinatif, dan membekali ilmu agar menjadi manusia yang produktif.
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="informasi" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Informasi</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                @foreach($informasi as $data)
                <div class="col-lg-4">
                    <img src="{{ asset('storage/informasi/' . $data->foto) }}" class="img-fluid" alt="" width="270">
                </div>
                <div class="col-lg-8 content">
                    <h2>{{ $data->judul }}</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <h4>{{ $data->deskripsi }}</h4>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section><!-- /Skills Section -->
</main>
@endsection
