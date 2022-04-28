@extends('layouts.app')


<section id="appointment" class="appointment section-bg">
    <div class="container">
        <br><br><br><br>
        <div class="section-title">
            <h2>Form Pendaftaran Pasien</h2>
            <p>Silahkan isi formulir berikut untuk melakukan pendaftaran pemeriksaan pasien setelah
                anda mendaftarkan diri, Anda akan mendapatkan nomor token yang dapat di gunakan untuk
                melihat rekam medis pemeriksaan oleh dokter dimanapun anda berada.
            </p>
        </div>
        <form action="{{ route('pasien.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="nama_pasien" placeholder="Nama Pasien"
                        class="form-control @error('nama_pasien') is-invalid @enderror">
                    @error('nama_pasien')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" name="alamat" placeholder="Alamat Anda"
                        class="form-control @error('alamat') is-invalid @enderror">
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" name="email" placeholder="Alamat Email"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                        <option value=""> Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group mt-3">
                    <input type="number" name="umur" placeholder="Umur"
                        class="form-control @error('umur') is-invalid @enderror">
                    @error('umur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="id_spesialis" class="form-select @error('id_spesialis') is-invalid @enderror">
                        <option value="">Spesialis</option>
                        @foreach ($spesialis as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_spesialis }}</option>
                        @endforeach
                    </select>
                    @error('id_spesialis')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea name="penyakit" placeholder="Penyakit Keluhan Anda" class="form-control" rows="5"
                    @error('penyakit') is-invalid @enderror"></textarea>
                @error('penyakit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><br>
            <div class="text-center">
                <button type="submit" style="border: 0;" class="appointment-btn scrollto">Kirim Formulir Anda</button>
            </div>
        </form>
    </div>
</section>
