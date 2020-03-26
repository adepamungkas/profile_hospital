<div class="container">
  <br>
  <h3>Semua Berita</h3>
  <hr>

  <!-- Project One -->
  <?php foreach ($berita as $value){ ?>
  <div class="row">
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
      </a>
    </div>
    <div class="col-md-5" align="justify">
      <h3><?php echo $value->judul_berita; ?>, <small><?php echo $value->tanggal; ?></small></h3>
      <p><?php $show=$value->isi_berita;$show=character_limiter($show,150);?></p>
      <p><?php echo $show;?></p>
      <a class="btn btn-success" href="<?php echo site_url('web/detail_berita/'.$value->id_berita)?>">Selengkapnya</a>
    </div>
  </div>
  <!-- /.row -->

  <hr>
  <?php } ?>

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

</div>
