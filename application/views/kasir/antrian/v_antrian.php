<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo humanize($this->router->fetch_class()) ?>
      <small><?php echo CI_VERSION ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('kasir/'.$this->router->fetch_class('')) ?>"><i class="fa fa-users"></i> <?php echo humanize($this->router->fetch_class()) ?></a></li>
      <li class="active"><?php echo humanize($this->router->fetch_method()) ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Antrian Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="height:427px">
              <!-- <a href="" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a> -->
              <a href="" class="btn btn-primary" name='btn_mulai'><i class="fa fa-check"></i> Mulai </a>
              <a href="" class="btn btn-success" name='btn_lanjut'><i class="fa fa-arrow-right"></i> Lanjut</a>
              <a href="" class="btn btn-warning" name='btn_lompati'><i class="fa fa-arrow-up"></i> Lompati</a>
              <a href="" class="btn btn-danger" name='btn_hapus'><i class="fa fa-remove"></i> Hapus</a>
              <hr>
              <?php echo $this->session->userdata('message'); ?>
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                  <div class="info-box-content">
                    <?php foreach ($admin2 as $v){ ?>
                    <span class="info-box-text"><?php echo $v->nama_dokter; ?></span>
                    <span class="info-box-number"><?php echo $v->no_antrian; ?></span>
                    <?php }?>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
