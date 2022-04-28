@extends('layouts.admin')

@section('loading')
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Data Pasien</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Data Pasien</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Data Pasien</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hubungi Kami</h4>
                    <div class="table-responsive">
                        @php
                            $no = 1;
                        @endphp
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Token</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->no_token }}</td>
                                        <td>{{ $data->nama_pasien }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->umur }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>
                                            <form action="{{ route('pasien.destroy', $data->id) }}" method="post">
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
