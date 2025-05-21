@extends('layouts.frontend')
@section('content')
<main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
            <p>Kami menyediakan fasilitas modern untuk mendukung kegiatan belajar mengajar yang nyaman dan efektif.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach($fasilitas as $data)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-item item-cyan position-relative"><br>
                        <div>
                            <img src="{{ asset('storage/fasilitas/' . $data->foto) }}" alt="" width="280" class="mx-auto d-block">
                        </div>
                        <p>
                            <h3 class="text-center">{{ $data->nama_fasilitas }}</h3>
                        </p>
                    </div>
                </div><!-- End Service Item -->
                @endforeach
            </div>

        </div>

    </section><!-- /Portfolio Section -->

</main>
@endsection