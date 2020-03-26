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
              <h3 class="box-title"><?php echo $pendaftar['nm_lengkap'] ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo site_url('admin/pendaftar') ?>" class="btn btn-success"><i class="fa fa-backward"></i> Kembali </a>
              <hr>
              <table class="table table-bordered">
              <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $pendaftar['nm_lengkap'] ?></td>
              </tr>
              <tr>
                <th>Nama Panggilan</th>
                <td><?php echo $pendaftar['nm_panggilan'] ?></td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $pendaftar['tempat_lahir'] ?></td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $pendaftar['jenis_kelamin'] ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <td><?php echo $pendaftar['agama'] ?></td>
              </tr>
              <tr>
                <th>Anak Ke</th>
                <td><?php echo $pendaftar['anak_ke'] ?></td>
              </tr>
              <tr>
                <th>Jumlah Saudara Kandung</th>
                <td><?php echo $pendaftar['jml_sdr_kandung'] ?></td>
              </tr>
              <tr>
                <th>Jumlah Saudara Tiri</th>
                <td><?php echo $pendaftar['jml_sdr_tiri'] ?></td>
              </tr>
              <tr>
                <th>Asal Sekolah:</th>
                <td><?php echo $pendaftar['asal_sekolah'] ?></td>
              </tr>
              <tr>
                <th>Nama Ayah:</th>
                <td><?php echo $pendaftar['nama_ayah'] ?></td>
              </tr>
              <tr>
                <th>Pekerjaan Ayah:</th>
                <td><?php echo $pendaftar['pekerjaan_ayah'] ?></td>
              </tr>
              <tr>
                <th>Pendidikan Ayah:</th>
                <td><?php echo $pendaftar['pendidikan_ayah'] ?></td>
              </tr>
              <tr>
                <th>Nama Ibu:</th>
                <td><?php echo $pendaftar['nama_ibu'] ?></td>
              </tr>
              <tr>
                <th>Pekerjaan Ibu:</th>
                <td><?php echo $pendaftar['pekerjaan_ibu'] ?></td>
              </tr>
              <tr>
                <th>Pendidikan Ibu:</th>
                <td><?php echo $pendaftar['pendidikan_ibu'] ?></td>
              </tr>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
