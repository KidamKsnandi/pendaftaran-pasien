@foreach ($pasien as $data)
    <a href="/dokter/pasien/edit/{{ $data->id }}">{{ $data->no_token }}</a>
    {{ $data->nama_pasien }} | {{ $data->status }} | {{ $data->detail_perawatan }} <br>
@endforeach
