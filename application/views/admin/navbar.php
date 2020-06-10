<header class="simple-normal">
  <div class="top-bar">
    <div class="logo">
      <a href="index.php" title=""><i class="fa fa-bullseye fa-spin"></i>S-Library</a>
    </div>
    <div class="menu-options"><span class="menu-action"><i></i></span></div>
    <div class="top-bar-quick-sec">
      <a title="Keluar" href="#" data-toggle="modal" data-target=".logout"><span class="full-screen-btn"><i class="fa fa-sign-out"></i></span></a>
      <span title="Fullscreen" id="toolFullScreen" class="full-screen-btn"><i class="fa fa-arrows-alt fa-spin"></i></span>
    </div>
  </div><!-- Top Bar -->
  <div class="side-menu-sec" id="header-scroll">
    <br>
    <div class="side-menus">
      <span><strong>MENU UTAMA</strong></span>
      <nav>
        <ul class="parent-menu">
          <li class="">
            <!--badge red <i class="badge red-bg">HOT</i>-->
            <a title="Halaman Utama" href="index.php"><i class="ti-desktop"></i><span>Dashboard</span></a>
          </li>

          <li class="menu-item-has-children">
            <a title="Area administrasi buku"><i class="fa fa-users"></i><span>Anggota</span></a>
            <ul>
              <li><a href="<?= base_url('admin/anggota') ?>">
                  Data Anggota <i class="badge red-bg"><?= ($anggota); ?></i>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item-has-children">
            <a title="Area administrasi buku"><i class="ti-book"></i><span>Buku</span></a>
            <ul>
              <li><a href="<?= base_url('admin/data') ?>">Data Buku <i class="badge red-bg"><?= ($buku); ?></i></a></li>
              <li><a href="<?= base_url('admin/kategori') ?>">Kategori Buku <i class="badge blue-bg"><?= ($kategori); ?></i></a></li>
            </ul>
          </li>

          <li class="menu-item-has-children">
            <a title="Area administrasi buku"><i class="fa fa-exchange"></i><span>Transaksi
                Buku</span></a>
            <ul>
              <li><a href="<?= base_url('admin/Peminjaman') ?>">
                  Peminjaman Buku <i class="badge red-bg"><?= ($Peminjaman); ?></i>
                </a></li>
              <li><a href="<?= base_url('admin/pengembalian') ?>">Pengembalian Buku <i class="badge blue-bg"><?= ($pengembalian); ?></i></a></li>
            </ul>
          </li>

          <li class="">
            <a title="Setting Slide pada WEB" href="<?= base_url('admin/slider') ?>"><i class="ti-layout-slider"></i><span>Setting Slider Web</span></a>
          </li>
          <li class="">
            <a title="Pantau Komentar" href="<?= base_url('admin/comment') ?>"><i class="ti-comments"></i><span>Comments Monitor</span></a>
          </li>
          <li class="">
            <a title="Ganti Password" href="?p=#"><i class="fa fa-lock"></i><span>Ganti
                Password</span></a>
          </li>
          <li class="">
            <a title="Keluar dari Halaman Admin" href="#logout" data-toggle="modal" data-target=".logout"><i class="ti-export"></i><span>Log Out</span></a>
          </li>
        </ul>
      </nav>
      <span class="footer-line"><strong>&copy; 2020</strong> Perpustakaan SMP Negeri 4 Lumajang</span>
    </div>
  </div>
</header>