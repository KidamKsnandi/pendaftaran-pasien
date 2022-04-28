@extends('layouts.app')

@section('content')
    <section id="why-us" class="why-us appointment section-bg">
        <br><br><br><br><br><br>
        <div class="container">
            <center>
                <div class="align-items-stretch">
                    <div class="icon-boxes d-flex justify-content-center">
                        <div class="d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <img src="assets/img/not.png" width="170" alt=""><br><br>
                                <h3>Maaf no token salah atau tidak ada!</h3>
                                <p>Silahkan daftar terlebih dahulu, dapat kan no token baru.</p><br>
                                <a href="/cek" class="appointment-btn scrollto">Cek kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <br><br><br><br><br><br>
    </section>
@endsection
