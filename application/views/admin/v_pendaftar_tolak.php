<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo humanize($this->router->fetch_class()) ?> <?php echo humanize($this->router->fetch_method()) ?>
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
              <h3 class="box-title">Data Pendaftar Ditolak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/pendaftar/cetak_ditolak') ?>" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan Siswa Tidak Lulus </a>
              <hr>
              <table id="tabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama lengkap</th>
                  <th>Panggilan</th>
                  <th>Agama</th>
                  <th>Kelamin</th>
                  <th>Asal Sekolah</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pendaftar as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['nm_lengkap'] ?></td>
                    <td><?php echo $value['nm_panggilan'] ?></td>
                    <td><?php echo $value['agama'] ?></td>
                    <td><?php echo $value['jenis_kelamin'] ?></td>
                    <td><?php echo $value['asal_sekolah'] ?></td>
                    <td>
                      <a href="<?php echo site_url('admin/pendaftar/lihat'.$value['id']) ?>" class="btn btn-xs btn-primary"><i class="fa fa-laptop"></i> Lihat data</a>
                    </td>
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
