<div class="container">
  <div class="clearfix my-3">
    <span class="float-left"><h3>Detail Artikel</h3></span>
    <span class="float-right"><a href="<?php echo site_url('web/artikel')?>" class="btn btn-warning text-light" role="button"><i class="fa fa-arrow-left fa-fw"></i>Kembali</a></span>
  </div>
  <hr>
  <!-- Page Content -->

        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
          </div>
          <?php foreach ($detail_artikel as $value){?>
          <div class="col-md-4" align="justify">
            <h3 class="my-3"><?php echo $value->judul_artikel?></h3>
            <p><?php echo $value->isi_artikel?></p>
            <h3 class="my-3">Informasi</h3>
            <ul>
              <li>Tanggal Posting : <?php echo $value->tanggal?></li>
              <li>Diposting oleh  : <?php echo $value->diposkan?></li>
            </ul>
          </div>
          <?php } ?>
        </div>
        <!-- /.row -->
        <br>
</div>
