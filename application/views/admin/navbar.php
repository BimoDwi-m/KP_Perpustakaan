<header class="simple-normal">
  <div class="top-bar">
    <div class="logo">
      <a href="index.php" title=""><i class="fa fa-bullseye fa-spin"></i>S-Library</a>
    </div>
    <div class="ml-auto menu-options"><span class="menu-action"><i></i></span></div>
  </div><!-- Top Bar -->
  <div class="side-menu-sec" id="header-scroll">
    <div class="side-menus">
      <span class="mt-4"><strong>MENU UTAMA</strong></span>
      <nav>
        <ul class="parent-menu">

          <li class="<?= $breadcrumb[0] === 'Dashboard' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/') ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Anggota' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/anggota/') ?>"><i class="fa fa-users"></i>Data Anggota</a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Buku' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/buku/') ?>"><i class="fa fa-book"></i>Data Buku</a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Kategori' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/kategori/') ?>"><i class="fa fa-tag"></i>Kategori Buku</a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Peminjaman' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/peminjaman/') ?>"><i class="fa fa-arrow-up"></i>Peminjaman Buku</a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Pengembalian' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/pengembalian/') ?>"><i class="fa fa-arrow-down"></i>Pengembalian Buku</a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Comment' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/comment/') ?>"><i class="fa fa-comment"></i>Kelola Komentar</a>
          </li>

          <li class="<?= $breadcrumb[0] === 'Profile' ? 'active' : '' ?>">
            <a href="<?= base_url('admin/profile/') ?>"><i class="fa fa-user"></i>Profil</a>
          </li>

          <li>
            <a href="<?= base_url('logout') ?>"><i class="fa fa-logout"></i>Keluar</a>
          </li>

        </ul>
      </nav>
      <span class="footer-line"><strong>&copy; 2020</strong> Perpustakaan SMP Negeri 4 Lumajang</span>
    </div>
  </div>
</header>