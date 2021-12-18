<h1>Jieun bar didie tampilan jeung cek tokenna</h1>
    <form action="/token" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Nomor Token </label>
            <input type="number" name="no_token" class="form-control @error('no_token') is-invalid @enderror">
                @error('no_token')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info text-white">Cek</button>
        </div>
    </form>
