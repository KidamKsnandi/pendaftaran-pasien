@extends('layouts.admin')

@section('loading')
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Data Dokter</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Dokter</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Data dokter</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"
                data-bs-toggle="modal" data-bs-target="#modal">Tambah Baru</a>
        </div>
    </div>

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Data Dokter</h4>
                    <form role="form" action="{{ route('data-dokter.store') }}" method="post"
                        enctype="multipart/form-data"><br>
                        @csrf
                        <div class="form-group">
                            <label>Nama Dokter</label>
                            <input type="text" name="nama_dokter"
                                class="form-control @error('nama_dokter') is-invalid @enderror" placeholder="Nama Dokter">
                            @error('nama_dokter')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Masukkan Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Masukkan Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Spesialis</label>
                            <select name="id_spesialis" class="form-select">

                                @foreach ($spesialis as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_spesialis }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Shift</label>
                            <select name="shift" class="form-control @error('shift') is-invalid @enderror"
                                placeholder="Shift">
                                <option value="">Shift</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                            </select>
                            @error('shift')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Foto/Gambar Dokter</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info text-white" type="submit">Simpan</button>
                            <button class="btn btn-secondary" type="reset">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
