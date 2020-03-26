<p>
<div class="container" align="justify">
<section>
  <div class="card">
    <div class="card-header bg-basic text-dark">
      <h5><?php echo "Halaman Semua Antrian"; ?></h5>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <div class="row">
        <?php foreach ($dokter as $key => $value): ?>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><?php echo $value->nama_dokter ?></span>
              <span class="info-box-number"><?php echo $value->nama_poli ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <?php endforeach; ?>
        <!-- /.col -->

        <footer class="blockquote-footer">Sumber Data <cite title="Source Title"> RS Mitra Husada </cite></footer>
      </blockquote>
    </div>
  </div>
</section>
</div>
<p>
