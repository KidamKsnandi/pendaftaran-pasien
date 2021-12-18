<h1>didie bar jieun tampilan daftar pasien</h1>
    <form action="{{ route('pasien.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control @error('nama_pasien') is-invalid @enderror">
                @error('nama_pasien')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                <option value="">--- Jenis Kelamin ---</option>
                <option value="Laki-Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror">
                @error('umur')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Spesialis </label>
            <select name="id_spesialis" class="form-control @error('id_spesialis') is-invalid @enderror" >
                @foreach($spesialis as $data)
                    <option value="{{$data->id}}">{{$data->nama_spesialis}}</option>
                @endforeach
            </select>
            @error('id_spesialis')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Penyakit</label>
            <textarea name="penyakit"\cols="30" rows="10" @error('nama_pasien') is-invalid @enderror"></textarea>
                @error('nama_pasien')
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
