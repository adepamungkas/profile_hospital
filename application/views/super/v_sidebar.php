<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/backend2') ?>/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?php echo $this->session->userdata('nama') ?></h5>
            <li class="mt">
                <a class="active" href="#halaman utama">
                    <i class="fa fa-dashboard"></i>
                    <span>Halaman Utama</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
              <i class="fa fa-edit"></i>
                  <span>Artikel</span>
              </a>
              <ul class="sub">
                <li><a  href="#">Semua Artikel</a></li>
                <li><a  href="#">Artikel Baru</a></li>
              </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-camera"></i>
                    <span>Galeri Foto</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">Tampilkan Galeri</a></li>
                    <li><a  href="#">Buat Galeri</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-file-text"></i>
                    <span>Page</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">Semua Page</a></li>
                    <li><a  href="#">Buat Page</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-image"></i>
                    <span>Media</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">Semua Media</a></li>
                    <li><a  href="#">Buat Media</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
