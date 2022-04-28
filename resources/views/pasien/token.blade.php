@extends('layouts.app')

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us appointment section-bg">
    <br><br><br><br><br><br>
    <div class="container">
        <center>
            <div class="row">
                <div class="align-items-stretch">
                    <div class="icon-boxes d-flex justify-content-center">
                        <div class="d-flex align-items-stretch">
                            <div class="content" style="width: 800px; height: 300px;">
                                <p>No token berhasil di cek</p>
                                @if (!$token)
                                    <script>
                                        window.location = "/gagal";
                                    </script>
                                @else
                                    <h4>No token anda {{ $token->no_token }} </h4><br>
                                    @if ($token->status == 'sudah di proses')
                                        <style>
                                            .berhasil {
                                                background-color: rgb(0, 180, 0);
                                                padding: 10px;
                                                width: 400px;
                                                color: white;
                                                border-radius: 100px;
                                            }

                                        </style>
                                        <div class="berhasil">No token anda sudah di proses</div><br>
                                        <div class="text-center">
                                            <a href="#" class="more-btn" data-bs-toggle="modal"
                                                data-bs-target="#modal">Lihat Hasil<i
                                                    class="bx bx-chevron-right"></i></a>
                                        </div>
                                    @else
                                        <style>
                                            .gagal {
                                                background-color: rgb(189, 0, 0);
                                                padding: 10px;
                                                width: 400px;
                                                color: white;
                                                border-radius: 100px;
                                            }

                                        </style>
                                        <div class="gagal">Mohon maaf token ada belum di proses</div>
                                        <br><br>
                                        <div class="text-center">
                                            <a href="#" class="more-btn" data-bs-toggle="modal"
                                                data-bs-target="#gagal">Pelajari lebih lanjut<i
                                                    class="bx bx-chevron-right"></i></a>
                                        </div>
                                    @endif
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="gagal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pelajari lebih lanjut</h5>
                </div>
                <div class="modal-body">
                    Anda harus menunggu Dokter untuk melihat hasilnya!!
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hasil Dari Dokter</h5>
                </div>
                <div class="modal-body">
                    {{ $token->detail_perawatan }}
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
</section><!-- End Why Us Section -->
