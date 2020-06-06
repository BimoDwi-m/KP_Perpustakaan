<!-- Our Website Content Goes Here -->
<?php 
      $buku=mysqli_query($konek, "SELECT id_buku FROM tb_buku");
      $anggota=mysqli_query($konek, "SELECT id_anggota FROM tbl_anggota");
      $pengembalian=mysqli_query($konek, "SELECT id_pengembalian FROM tbl_pengembalian");
      $Peminjaman=mysqli_query($konek, "SELECT id_peminjaman FROM tbl_peminjaman where status = 'belum kembali'");
      $kategori=mysqli_query($konek, "SELECT id_kategori FROM tb_kategori");
      $lokasi=mysqli_query($konek, "SELECT id_lokasi FROM tb_lokasi");
?>
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
                         <li class="<?php if(!isset($_GET['p'])) echo 'active'; ?>">
                              <!--badge red <i class="badge red-bg">HOT</i>-->
                              <a title="Halaman Utama" href="index.php"><i class="ti-desktop"></i><span>Dashboard</span></a>
                         </li>

                         <li class="menu-item-has-children <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='anggota') echo 'active'; ?>">
                              <a title="Area administrasi buku"><i class="fa fa-users"></i><span>Anggota</span></a>
                              <ul <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') { ?> style="display: block;" <?php } ?>>
                                   <li><a href="?p=anggota">Data Anggota <i class="badge red-bg"><?php echo mysqli_num_rows($anggota); ?></i></a></li>
<!--                                    <li><a href="?p=kategori">Kategori Anggota <i class="badge blue-bg"><?php echo mysqli_num_rows($kategori); ?></i></a></li> -->
                              </ul>
                        </li>

                         <li class="menu-item-has-children <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') echo 'active'; ?>">
                              <a title="Area administrasi buku"><i class="ti-book"></i><span>Buku</span></a>
                              <ul <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') { ?> style="display: block;" <?php } ?>>
                                   <li><a href="?p=data">Data Buku <i class="badge red-bg"><?php echo mysqli_num_rows($buku); ?></i></a></li>
                                   <li><a href="?p=kategori">Kategori Buku <i class="badge blue-bg"><?php echo mysqli_num_rows($kategori); ?></i></a></li>
                              </ul>
                        </li>

                         <li class="menu-item-has-children <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') echo 'active'; ?>">
                              <a title="Area administrasi buku"><i class="fa fa-exchange"></i><span>Transaksi Buku</span></a>
                              <ul <?php if(isset($_GET['p'])) if($_GET['p']=='buku'||$_GET['p']=='data'||$_GET['p']=='kategori') { ?> style="display: block;" <?php } ?>>
                                   <li><a href="?p=Peminjaman">Peminjaman Buku <i class="badge red-bg"><?php echo mysqli_num_rows($Peminjaman); ?></i></a></li>
                                   <li><a href="?p=pengembalian">Pengembalian Buku <i class="badge blue-bg"><?php echo mysqli_num_rows($pengembalian); ?></i></a></li>
                              </ul>
                        </li>


<!--                         <li class="<?php if(isset($_GET['p'])) if($_GET['p']=='slider') echo 'active'; ?>">
                              <a title="Setting Slide pada WEB" href="?p=slider"><i class="ti-layout-slider"></i><span>Setting Slider Web</span></a>
                        </li> -->
                        <li class="<?php if(isset($_GET['p'])) if($_GET['p']=='comment') echo 'active'; ?>">
                              <a title="Pantau Komentar" href="?p=comment"><i class="ti-comments"></i><span>Comments Monitor</span></a>
                        </li>
                        <li class="<?php if(isset($_GET['p'])) if($_GET['p']=='comment') echo 'active'; ?>">
                              <a title="Ganti Password" href="?p=#"><i class="fa fa-lock"></i><span>Ganti Password</span></a>
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