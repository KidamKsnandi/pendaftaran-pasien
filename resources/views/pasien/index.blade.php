<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Project Pendaftaran Pasien</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="sweetalert.css">
    <script src="sweetalert.js"></script>
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v4.7.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <style>
        .button {
            background-color: rgb(8, 88, 235);
            border-radius: 23px;
            text-align: center;
            color: white;
            padding: 10px 60px;
            font-size: 17px;
            border: 0;
            cursor: pointer;
        }

        .button:hover {
            color: white;
            background-color: rgb(0, 69, 197);
            transition: 0.4s;
        }

    </style>
    @include('sweetalert::alert')


    <section id="why-us" class="why-us appointment section-bg">
        <br><br>
        <div class="container">
            <center>
                <div class="align-items-stretch">
                    <div class="icon-boxes d-flex justify-content-center">
                        <div class="d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0" style="padding: 50px;">
                                <img src="assets/img/success.png" width="130" alt=""><br><br>
                                <h3>No Token Anda : <b>{{ $pasien->no_token }}</b></h3>
                                <p>Simpan no token anda di atas untuk mengecek token anda.</p>
                            </div>
                        </div>
                    </div><br>
                    <a href="/cek" style="width: 250px;" class="appointment-btn scrollto">CEK SEKARANG</a>
                </div>
            </center>
        </div>
        <br><br><br>
    </section>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
