<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome - RS Mitra Husada</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="<?php echo base_url('assets/user') ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/user') ?>/css/landing-page.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  </head>

  <body id="page-top">
      <!-- navigasi -->
    		<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
    			<div class="container-fluid">
    				<a class="navbar-brand" href="">RS Mitra Husada</a>
            <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('web') ?>">Beranda</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
                Tentang Kami
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('web/profil') ?>">Profil </a>
                <a class="dropdown-item" href="<?php echo site_url('web/struktur_organisasi') ?>">Struktur Organisasi </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
                Fasilitas
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('web/fasilitas') ?>">Fasilitas </a>
                <a class="dropdown-item" href="<?php echo site_url('web/pendaftaran') ?>">Pendaftaran Online </a>
              </div>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
                Dokter
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('web/data_dokter') ?>">Data Dokter </a>
                <a class="dropdown-item" href="<?php echo site_url('web/jadwal_dokter') ?>">Jadwal Dokter </a>
              </div>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
                Artikel & Berita
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('web/artikel') ?>">Artikel</a>
                <a class="dropdown-item" href="<?php echo site_url('web/berita') ?>">Berita</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo site_url('web/galeri') ?>">Galeri</a>
            </li>
          </ul>
        </nav>
        <!-- tutup navigasi -->
