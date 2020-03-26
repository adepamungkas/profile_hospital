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
              <h3 class="box-title">Tambah Registrasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/registrasi') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>
              <hr>
              <?php echo $this->session->userdata('message'); ?>
              <div class="well">
                 <div class="row">
                   <div class="col-md-12">
                      <!-- tampilkan nama dokter -->
                      <h3><?php echo $get_dokter->nama_dokter ?></h3>
                   </div>
                 </div>
              </div>
              <form action="<?php echo site_url('admin/registrasi/simpan_data') ?>" method="POST"class="form-horizontal">
              <fieldset>

              <!-- Text input-->
              <div class="form-group">
                  <label class="col-md-2 control-label" for="textinput">No Antrian</label>
                  <div class="col-md-4">
                  <input id="textinput" name="no_antrian" type="text" readonly value="<?php echo $kodeunik ?>" class="form-control input-md">
                </div>
              </div>
                <!-- Text input-->
                <input id="textinput" name="id_dokter" type="hidden" placeholder="" value="<?php echo $get_dokter->id_dokter ?>" class="form-control input-md">

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-2 control-label" for="selectbasic">Nama Pasien</label>
                <div class="col-md-4">
                  <select id="selectbasic" name="id_pasien" class="form-control">
                    <option value="0">--- Pilih Pasien ---</option>
                    <?php
                    foreach ($pasien as $key) {
                    echo "<option value='$key[id_pasien]'>$key[nama_pasien]</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-2 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                  <button id="singlebutton" name="singlebutton" class="btn btn-primary">Simpan</button>
                </div>
              </div>

              </fieldset>
              </form>
            </div>

            <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.js"></script>
        		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
        		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
        		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

            <!-- /.box-body -->
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
