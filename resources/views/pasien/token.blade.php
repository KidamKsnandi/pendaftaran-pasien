<h1>didie jieun tampilanna bar nu ges di cek tokenna </h1>
@if (!$token)
   <script> alert('No Token Salah Atau Tidak Ada!'); window.location = "/cek";</script>
@else
   No token anda {{ $token->no_token }} <br>
   @if ($token->status == 'sudah di proses')
   Sudah di proses
   @else
   Belum di proses
   @endif
@endif
