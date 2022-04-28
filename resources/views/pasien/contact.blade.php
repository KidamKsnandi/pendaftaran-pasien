@extends('layouts.app')

<!-- ======= Contact Section ======= -->
<br><br><br><br>
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <h4>Temukan Kami Di</h4>
      </div>
    </div>

    <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-6.918099963422153!3d40.107.61980781669041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
        <br><br><br>
        <h3 class="text-center">Tinggalkan Pesan</h2>
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{ route('contact.store') }}" method="post" role="form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="number" class="form-control" name="no_kontak" id="subject" placeholder="Nomor Kontak" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan Atau Pernyataan Anda" required></textarea>
            </div><br>
            <div class="text-center"><button type="submit" style="border: 0;" class="appointment-btn scrollto">Kirim Pesan</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
