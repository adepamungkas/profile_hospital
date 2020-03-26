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
            <div class="box-header">
              <h3 class="box-title">Data Antrian Pasien Berdasarkan Dokter</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('kasir/main') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali </a>
              <hr>

              <div class="well">
                 <div class="row">
                   <div class="col-md-12">
                      <!-- tampilkan nama dokter -->
                      <h3><?php echo $get_dokter->nama_dokter ?></h3>
                   </div>
                 </div>
              </div>
              <?php echo $this->session->userdata('message'); ?>
              <table id="tabel" class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Antrian Ke</th>
                  <th>Nama Pasien</th>
                  <th>Alamat</th>
                  <th>No  Telepon</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($semua_antrian1 as $value) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value->no_antrian ?></td>
                    <td><?php echo $value->nama_pasien ?></td>
                    <td><?php echo $value->alamat ?></td>
                    <td><?php echo $value->no_telepon ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
