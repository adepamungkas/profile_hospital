<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo humanize($this->router->fetch_class()) ?>
      <small><?php echo CI_VERSION ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('admin/'.$this->router->fetch_class('')) ?>"><i class="fa fa-users"></i> <?php echo humanize($this->router->fetch_class()) ?></a></li>
      <li class="active"><?php echo humanize($this->router->fetch_method()) ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ubah Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/pasien') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>
              <hr>
              <?php echo $this->session->userdata('message'); ?>
              <?php foreach ($pasien as $value){?>
              <form action="<?php echo site_url('admin/pasien/update_data')?>" method="POST" class="form-horizontal">
              <fieldset>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nama Pasien</label>
                <div class="col-md-4">
                <input id="textinput" name="id_pasien" type="hidden" value="<?php echo $value->id_pasien?>" class="form-control input-md" required="">
                <input id="textinput" name="nama_pasien" type="text" value="<?php echo $value->nama_pasien?>" class="form-control input-md" required="">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Alamat</label>
                <div class="col-md-4">
                <input id="textinput" name="alamat" type="text" value="<?php echo $value->alamat?>" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">No Telepon</label>
                <div class="col-md-4">
                <input id="textinput" name="no_telepon" type="text" value="<?php echo $value->no_telepon?>" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Simpan</button>
                </div>
              </div>

              </fieldset>
              </form>
              <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
