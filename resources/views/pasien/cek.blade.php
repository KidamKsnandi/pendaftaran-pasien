@extends('layouts.app')

@section('content')
    <section id="appointment" class="why-us appointment section-bg">

        <br><br><br><br>
        <div class="container"">
                <div class="  align-items-stretch">
            <div class="icon-boxes d-flex justify-content-center">
                <div class="d-flex align-items-stretch col-sm-9">
                    <div class="icon-box mt-4 mt-xl-0">
                        <div class="section-title">
                            <h2>Cek Token Pasien</h2>
                        </div>
                        <form action="/token" class="" method="post" enctype="multipart/form-data">
                            @csrf
                            <h6>Masukan Nomor Token Anda Ketika Melakukan Pendaftaran</h6>
                            <div class="form-group">
                                <input type="number" placeholder="Masukan Nomor Token" name="no_token"
                                    class="form-control @error('no_token') is-invalid @enderror">
                                @error('no_token')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>
                            <div class="form-group text-center">
                                <button type="submit" style="border: 0;" class="appointment-btn scrollto">Cek Hasil
                                    Pemeriksaan</button>
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br>
    </section>
@endsection
