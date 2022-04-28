@extends('layouts.admin')

@section('loading')
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Spesialis</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Spesialis</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Data spesialis</li>
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
                    <h4 class="card-title">Data Spesialis</h4>
                    <div class="table-responsive">
                        @php
                            $no = 1;
                        @endphp
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Spesialis</th>
                                    <th>Akomodasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($spesialis as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_spesialis }}</td>
                                        <td>{{ $data->akomodasi }}</td>
                                        <td>
                                            <form action="{{ route('spesialis.destroy', $data->id) }}" method="post">
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
    @include('admin.spesialis.create')
@endsection
