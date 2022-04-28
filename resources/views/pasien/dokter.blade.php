@extends('layouts.app')

@section('content')
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">
            <br><br><br><br>
            <div class="section-title">
                <h2>Dokter</h2>
            </div>

            <div class="row">
                @foreach ($dokter as $data)
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ $data->image() }}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>{{ $data->nama_dokter }}</h4>
                                <span>Spesialis {{ $data->spesialis->nama_spesialis }}</span>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section><!-- End Doctors Section -->
@endsection
