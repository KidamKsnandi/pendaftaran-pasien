<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="bi bi-phone"></i> +1 5589 55488 55
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">Rumah Sakit</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ Request::is('/') ? 'active' : '' }} nav-link scrollto" href="/">Home</a></li>
                <li><a class="{{ Request::is('pendaftaran') ? 'active' : '' }} nav-link scrollto"
                        href="/pendaftaran">Pendaftaran Pasien</a></li>
                <li><a class="{{ Request::is('cek') ? 'active' : '' }} nav-link scrollto" href="/cek">Cek Token
                        Pasien</a></li>
                <li><a class="{{ Request::is('data-dokter') ? 'active' : '' }} nav-link scrollto"
                        href="/data-dokter">Dokter</a></li>
                <li><a class="{{ Request::is('contact') ? 'active' : '' }} nav-link scrollto"
                        href="/contact">Contact</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        {{-- <a href="/login" class="appointment-btn scrollto">Login Admin</a> --}}

    </div>
</header><!-- End Header -->
