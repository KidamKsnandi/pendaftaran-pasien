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
                <li class="breadcrumb-item"><a href="/administrator/">Home</a></li>
                <li class="breadcrumb-item active">Data dokter</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="{{ route('data-dokter.create') }}"
                class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white">Tambah
                Baru</a>
        </div>
    </div>

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Dokter</h4>
                    <div class="table-responsive">
                        @php
                            $no = 1;
                        @endphp
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama Dokter</th>
                                    <th>Shift</th>
                                    <th>Spesialis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokter as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                                alt="foto-dokter"></td>
                                        <td>{{ $data->nama_dokter }}</td>
                                        <td>{{ $data->shift }}</td>
                                        <td>{{ $data->spesialis->nama_spesialis }}</td>
                                        <td>
                                            <form action="{{ route('data-dokter.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah anda yakin menghapus')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
