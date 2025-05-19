@extends('layouts.frontend')
@section('content')
<main class="main">

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Karyawan</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach($karyawan as $data)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div>
                            <img src="{{ asset('storage/karyawan/' . $data->foto) }}" alt="" width="250">
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>{{ $data->nama_karyawan }}</h3>
                        </a>
                        <p>
                            <h4>{{ $data->jabatan }}</h4>
                        </p>
                        <p>
                            <h7>{{ $data->tugas }}</h7>
                        </p>
                    </div>
                </div><!-- End Service Item -->
                @endforeach
            </div>

        </div>

    </section><!-- /Services Section -->

</main>
@endsection
