@foreach ($pasien as $data)
<form action="/dokter/pasien/update" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $data->id }}">
            No Token anda {{ $data->no_token }}
            <div class="form-group">
                <label for="">Detail Perawatan</label>
                <textarea name="detail_perawatan"cols="30" rows="10"></textarea>
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

