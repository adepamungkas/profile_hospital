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
        <a href="<?php echo site_url('admin/main') ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-address-book"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/poli') ?>"><i class="fa fa-calendar"></i>Master Poli</a></li>
            <li><a href="<?php echo site_url('admin/dokter') ?>"><i class="fa fa-address-card"></i>Master Dokter</a></li>
            <li><a href="<?php echo site_url('admin/pasien') ?>"><i class="fa fa-users"></i>Master Pasien</a></li>
          </ul>
        </li>
      <li>
        <a href="<?php echo site_url('admin/registrasi') ?>">
          <i class="fa fa-edit"></i> <span>Registrasi Pasien</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('login/logout') ?>">
          <i class="fa fa-sign-out"></i> <span> Keluar</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
