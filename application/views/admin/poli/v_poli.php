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
              <h3 class="box-title">Data Poli</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/poli/tambah_data') ?>" class="btn btn-success"><i class="fa fa-plus-square-o"></i> Tambah Poli </a>
              <a href="" class="btn btn-primary"><i class="fa fa-print"></i> Cetak </a>
              <hr>
              <?php echo $this->session->userdata('message'); ?>
              <table id="tabel" class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Poli</th>
                  <th>Deskripsi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                <?php foreach ($poli as $value) { ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['nama_poli'] ?></td>
                    <td><?php echo $value['deskripsi'] ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/poli/edit_data/'.$value['id_poli']) ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo site_url('admin/poli/delete_data/'.$value['id_poli']) ?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Hapus</a>
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