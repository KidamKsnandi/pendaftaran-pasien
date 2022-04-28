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
            <h3 class="text-themecolor">Pasien</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Daftar pasien</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="https://www.wrappixel.com/templates/adminwrap/"
                class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Upgrade to
                Pro</a>
        </div>
    </div>

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pasien</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No Token</th>
                                    <th>Nama Pasien</th>
                                    <th>Detail Perawatan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $data)
                                    <tr>
                                        <td><a class="btn btn-secondary btn-block {{ $data->status == 'sudah di proses' ? 'disabled' : '' }}"
                                                style="width: 70%;"
                                                href="/dokter/pasien/edit/{{ $data->id }}">{{ $data->no_token }}</a>
                                        </td>
                                        <td>{{ $data->nama_pasien }}</td>
                                        <td>{{ $data->detail_perawatan }}</td>
                                        <td>
                                            @if ($data->status == 'sudah di proses')
                                                <p class="btn btn-success btn-sm">{{ $data->status }}</p>
                                            @else
                                                <p class="btn btn-danger btn-sm">{{ $data->status }}</p>
                                            @endif
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
