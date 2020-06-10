<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Spen4-Library</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/animate/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
  <link rel="icon" href="<?= base_url('assets/img/logosmp4.png') ?>">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <?php if ($index === 1) : ?>
    <header id="header">
      <div class="container-fluid">

        <div id="logo" class="pull-left">
          <h1><a href="#intro" class="scrollto">Spen4-Library</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="#intro"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('koleksi') ?>">Koleksi Buku</a></li>
            <li><a href="#about">About Library</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->
  <?php else : ?>
    <!-- Navigation -->
    <header class="nav-type-1">

      <nav class="navbar navbar-static-top">
        <!--<div class="navigation" id="sticky-nav">-->
        <div class="navigation">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> <!-- end navbar-header -->

              <div class="header-wrap">
                <div class="header-wrap-holder">

                  <!-- Search -->
                  <div class="nav-search hidden-sm hidden-xs">
                    <form method="get" name="cari" action="index.php">
                      <input type="text" name="judul" class="form-control" placeholder="Cari judul buku">
                      <button name="cari" type="submit" class="search-button">
                        <i class="icon icon_search"></i>
                      </button>
                    </form>
                  </div>

                  <!-- Logo -->
                  <div class="logo-container">
                    <div class="logo-wrap text-center">
                      <a href="indek.php">
                        <!--<img class="logo" src="img/logo_dark.png" alt="logo">-->
                        <h4 class="logo"><br><br><b>SPEN4-LIBRARY<h4>
                              <p>Perpustakaan SMP Negeri 4 Lumajang</p></b>
                      </a>
                    </div>
                  </div>

                  <!-- Cart -->
                  <div class="nav-cart-wrap hidden-sm hidden-xs">
                    &nbsp;
                  </div> <!-- end cart -->

                </div>
              </div> <!-- end header wrap -->

              <div class="nav-wrap">
                <div class="collapse navbar-collapse" id="navbar-collapse">

                  <ul class="nav navbar-nav">

                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" name="cari" action="index.php" class="mobile-search relative">
                        <input type="text" name="judul" class="form-control" placeholder="Cari...">
                        <button name="cari" type="submit" class="search-button">
                          <i class="icon icon_search"></i>
                        </button>
                      </form>
                    </li>

                    <li class="dropdown">
                      <a href="index.php">Beranda</a>
                    </li>

                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown">Kategori Buku</a>
                      <ul class="dropdown-menu megamenu">
                        <li>
                          <div class="megamenu-wrap">
                            <div class="row">
                              <div class="row">
                                <?php foreach ($kats as $kat) : ?>
                                  <div class="col-md-3 megamenu-item">
                                    <ul class="menu-list">
                                        <li><a href="<?= base_url('buku') ?>?id_kat=<?= $kat->id_kategori; ?>&halaman=1"><?= $kat->judul_kategori; ?></a></li>
                                    </ul>
                                  </div>
                                <?php endforeach ?>
                              </div>
                            </div>
                        </li>
                      </ul>
                    </li> <!-- end categories -->

                    <li class="dropdown">
                      <a href="<?= base_url('buku') ?>?halaman=1">Koleksi Buku</a>
                    </li>

                    <!--                     <li class="dropdown">
                      <a href="#">Informasi</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="<?= base_url('buku') ?>">Tentang Kami</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Bantuan</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="<?= base_url('buku') ?>">Kontak Kami</a></li>
                        <li><a href="<?= base_url('buku') ?>">F.A.Q</a></li>
                      </ul>
                    </li> -->

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header> <!-- end navigation -->
  <?php endif ?>