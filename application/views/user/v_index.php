<!-- Icons Grid -->
<section class="features-icons bg-secondary text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-white">
          <div class="features-icons-icon d-flex">
            <i class="icon-screen-desktop m-auto text-warning"></i>
          </div>
          <h3>Sistem Akurat</h3>
          <p class="lead mb-0">Sistem Komputerisasi dalam Pengelolaan Data!</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 text-white">
          <div class="features-icons-icon d-flex">
            <i class="icon-layers m-auto text-warning"></i>
          </div>
          <h3>Keamanan Data</h3>
          <p class="lead mb-0">Penyimpanan Data dengan Terenkripsi Terbaik!</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="features-icons-item mx-auto mb-0 mb-lg-3 text-white">
          <div class="features-icons-icon d-flex">
            <i class="icon-check m-auto text-warning"></i>
          </div>
          <h3>Respon Cepat</h3>
          <p class="lead mb-0">Penanganan Pasien Secara Tepat, Cepat dan Akurat!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
  <div class="container">
    <h3 class="mb-2 text-warning">Dokter Kami</h3>
    <hr>
    <div class="row">
      <!-- data dokter -->
      <?php foreach ($dokter as $key => $value){ ?>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/user/img/profile.jpg" alt="">
            <h5><?php echo $value->nama_dokter ?></h5>
            <p class="font-weight-light mb-0"><?php echo $value->nama_poli ?></p>
          </div>
        </div>
      <?php } ?>
      <br>
      <!-- tutup dokter -->
    </div>
  </div>
</section>
