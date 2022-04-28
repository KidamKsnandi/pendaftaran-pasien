@extends('layouts.admin')

@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Perawatan Pasien</h4>
                    @foreach ($pasien as $data)
                        <form action="/dokter/pasien/update" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $data->id }}"><br>
                            <h4>
                                {{ $data->nama_pasien }}
                            </h4>
                            <h2>
                                No Token {{ $data->no_token }}
                            </h2>
                            <h3>Keluhan : {{ $data->penyakit }}</h3>
                            <div class="form-group">
                                <label>Detail Perawatan</label>
                                <textarea name="detail_perawatan" class="form-control" rows="5"></textarea>
                                @error('detail_perawatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-danger text-white">Reset</button>
                                <button type="submit" class="btn btn-info text-white">Simpan</button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
