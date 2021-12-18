@if(Auth::user()->hasRole('admin'))
     <script>window.location = "/admin/";</script>
@elseif(Auth::user()->hasRole('dokter'))
     <script>window.location = "/dokter/";</script>
@endif
