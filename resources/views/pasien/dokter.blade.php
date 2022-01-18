<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <h1>isi didie bar frontend dokter = foto, nama dokter jeung spesialis saruakeun siga nu d video susunannya</h1>
      @foreach ($dokter as $data)
        {{$data->nama_dokter}} {{ $data->spesialis->nama_spesialis }}<br>
      @endforeach
   </body>
</html>
