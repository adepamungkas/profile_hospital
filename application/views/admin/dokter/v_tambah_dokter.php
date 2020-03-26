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
              <h3 class="box-title">Tambah Data Dokter</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/dokter') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>
              <hr>
              <?php echo $this->session->userdata('message'); ?>

              <form action="<?php echo site_url('admin/dokter/simpan_data') ?>" method="POST" class="form-horizontal">
              <fieldset>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Kode Dokter</label>
                <div class="col-md-4">
                <input id="textinput" name="kode_dokter" type="text" placeholder="Ketikan Kode Dokter" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Nama Dokter</label>
                <div class="col-md-4">
                <input id="textinput" name="nama_dokter" type="text" placeholder="Ketikan Nama Dokter" class="form-control input-md" required="">

                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Poli</label>
                <div class="col-md-4">
                  <select id="selectbasic" name="id_poli" class="form-control">
                    <option value="0">--- Pilih Poli ---</option>
                    <?php
                    foreach ($poli as $key) {
                    echo "<option value='$key[id_poli]'>$key[nama_poli]</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Status Dokter</label>
                <div class="col-md-4">
                  <select id="selectbasic" name="status_dokter" class="form-control">
                    <option value="0">--- Pilih Status ---</option>
                    <?php
                    foreach ($status_dokter as $key) {
                    echo "<option value='$key[status]'>$key[status]</option>";
                    }
                    ?>
                  </select>
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

            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
