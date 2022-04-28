@extends('layouts.login')


@section('content')
<style>
    .login {
  min-height: 100vh;
}

.bg-image {
  background-image: url('assets/img/login.jpg');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

</style>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Login</h3>
              <p>Admin atau Dokter</p>

              <!-- Sign In Form -->
              <form action="{{ __('login') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Masukan email" id="floatingInput">
                  <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Masukan Password" id="floatingPassword">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

{{-- <div class="form-group row">
            <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div> --}}