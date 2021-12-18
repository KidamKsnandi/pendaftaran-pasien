<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <h1>isi didie bar dashboard dokter = data dokter, daftar pasien siga nu video tampilan daftar pasien</h1>
      <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                <i class="fa fa-sign-out-alt"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
   </body>
</html>
