@extends('layouts.frontend')
@section('content')
<main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Eskul</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach($eskul as $data)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative">
                        <div>
                            <img src="{{ asset('storage/eskul/' . $data->foto) }}" alt="" width="280">
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>{{ $data->nama_eskul }}</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->
                @endforeach
            </div>

        </div>

    </section><!-- /Resume Section -->

</main>
@endsection
