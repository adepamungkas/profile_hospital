<div class="container">
  <br>
  <h3>Data Dokter</h3>
  <hr>
  <!-- <div class="container"> -->
    <?php foreach ($dokter as $value){ ?>
    <div id="accordion">
      <!-- collapse data dokter -->
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#<?php echo $value->id_dokter ?>">
            <!--tampilkan nama dokter -->
            <?php echo $value->nama_dokter ?>
          </a>
        </div>
        <div id="<?php echo $value->id_dokter ?>" class="collapse" data-parent="#accordion">
          <div class="card-body">
            <?php echo $value->nama_poli ?> <br>
          </div>
        </div>
      </div>
      </div>
    <?php } ?>
    <br>

</div>
