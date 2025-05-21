@extends('layouts.frontend')
@section('content')
<main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Prestasi</h2>
            <p>Sekolah kami bangga atas berbagai pencapaian luar biasa dari siswa dan guru di bidang akademik dan non akademik. Setiap prestasi adalah bukti nyata semangat dan kerja keras yang terus kami dukung.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                @foreach($prestasi as $data)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow rounded-4 h-100">
                    <br>
                        <div>
                            <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="" width="280" class="mx-auto d-block">
                        </div>
                        <p>
                            <h3 class="text-center">{{ $data->nama_prestasi }}</h3>
                        </p>
                        <p class="text-center">
                            {{ $data->tingkat }}
                        </p>
                        <p class="text-center">
                            {{ $data->deskripsi }}
                        </p>
                        <p class="text-center">
                            {{ $data->tanggal_prestasi }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section><!-- /Contact Section -->

</main>
@endsection
