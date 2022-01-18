@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DamZ
                </div>
                <div class="card-body">
                    Didie jieun tampilan bar = Beranda, pendaftaran pasien, cek token, data dokter, hubungi kami, login
                </div>
                <div class="card-body">
                    <a href="{{ route('pasien.create') }}">Pendaftaran Pasien</a> |
                    <a href="/cek">Cek Token</a> |
                    <a href="/data-dokter">Data Dokter</a> |
                    <a href="/pesan">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
@endsection
