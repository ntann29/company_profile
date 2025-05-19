@extends('layouts.frontend')
@section('content')
<main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Informasi</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="{{ asset('frontend/img/upacara.webp')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 content">
                    <h2>Visi dan Misi SMP MARHAS</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>VISI</strong> </li>
                                <li> <span>Menjadi Lembaga Pendidikan yang Prima, terdepan dan terpercaya dalam menyiapkan generasi muda yang cerdas, kreatif, dan berakhlak.</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>MISI</strong> </li>
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
    <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Sekolah</h2>
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
