<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- search form -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Navigasi Utama</li>
      <li>
        <a href="<?php echo site_url('kasir/main') ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Data Antrian By Dokter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php foreach ($show_dokter as $key => $value): ?>
            <li><a href=<?php echo site_url('kasir/main/antrian_dokter/'.$value->id_dokter) ?>><i class="fa fa-circle-o"></i><?php echo $value->nama_dokter; ?></a></li>
            <?php endforeach; ?>
          </ul>
      </li> -->
      <li>
        <a href=<?php echo site_url('kasir/main/antrian/')?>>
          <i class="fa fa-edit"></i><span>Antrian Otomatis</span>
        </a>
      </li>
      <li>
        <a href=<?php echo site_url('login2/logout') ?>>
          <i class="fa fa-sign-out"></i> <span> Keluar</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
