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
              <h3 class="box-title">Data Dokter</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/dokter/tambah_data') ?>" class="btn btn-success"><i class="fa fa-plus-square-o"></i> Tambah Dokter </a>
              <a href="" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </a>
              <hr>
              <?php echo $this->session->userdata('message'); ?>
              <table id="tabel" class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Dokter</th>
                  <th>Nama Dokter</th>
                  <th>Nama Poli</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                <?php foreach ($dokter2 as $value) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value->kode_dokter ?></td>
                    <td><?php echo $value->nama_dokter ?></td>
                    <td><?php echo $value->nama_poli?></td>
                    <td><?php echo $value->status_dokter?></td>
                    <td>
                        <a href="<?php echo site_url('admin/dokter/edit_data/'.$value->id_dokter) ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo site_url('admin/dokter/delete_data/'.$value->id_dokter) ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Hapus</a>
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
