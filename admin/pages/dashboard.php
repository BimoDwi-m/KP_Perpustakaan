<?php
    if(!defined('MyConst')){
            die('Akses langsung tidak diperbolehkan');
        }
    $buku=mysqli_query($konek, "SELECT id_buku FROM tb_buku");
    $kategori=mysqli_query($konek, "SELECT id_kategori FROM tb_kategori");
    $kembali=mysqli_query($konek, "SELECT id_pengembalian FROM tbl_pengembalian");
    $komentar=mysqli_query($konek, "SELECT id_komentar FROM tb_komentar WHERE hapus=0");
    $peminjam=mysqli_query($konek, "SELECT id_peminjaman FROM tbl_peminjaman where status = 'belum kembali'");
    $peminjamkembali=mysqli_query($konek, "SELECT id_peminjaman FROM tbl_peminjaman where status = 'kembali'");
    // $slide=mysqli_query($konek, "SELECT id_slide FROM tb_slide");
    $stok_buku=mysqli_query($konek, "SELECT SUM(stok) FROM tb_buku");
    $stok = mysqli_fetch_row($stok_buku);
?>
<div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='sukses_login'){
                    ?>
                    <div role="alert" class="alert color green-bg fade in alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>Berhasil login!</strong> selamat Datang <strong><?php echo $_SESSION['nama']; ?></strong>, Anda berhasil login sebagai administrator <strong>Spenforlu Library</strong>
                    </div>
                    <?php } } ?>
                </div>
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Dashboard</h2>
                        <span><?php echo $_SESSION['nama']; ?></span>
                    </div>
                </div>
                
            </div>
        </div><!-- Heading Sec -->
        <ul class="breadcrumbs">
            <li><a href="#" title="">Beranda</a></li>
            <li><a href="index.php" title=""><strong>Dashboard</strong></a></li>
        </ul>

        <div class="main-content-area">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Anggota</strong></span>
                            <h4>
                                <?php echo mysqli_num_rows($anggota); ?>
                            </h4>
                            <i class="fa fa-users green-bg"></i>
                            <h5>Total Anggota : <?php echo mysqli_num_rows($anggota); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>               

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Buku</strong></span>
                            <h4>
                                <?php echo mysqli_num_rows($buku); ?>
                            </h4>
                            <i class="fa fa-book red-bg"></i>
                            <h5>Total Stok Buku : <?php echo $stok[0]; ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Kategori</strong></span>
                            <h4>
                                <?php echo mysqli_num_rows($kategori); ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total Kategori Buku : <?php echo mysqli_num_rows($kategori); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
             

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Peminjaman</strong></span>
                            <h4>
                                <?php echo mysqli_num_rows($Peminjaman); ?>
                            </h4>
                            <i class="fa fa-exchange green-bg"></i>
                            <h5>Total Peminjaman dikembalikan : <?php echo mysqli_num_rows($peminjamkembali); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Pengembalian</strong></span>
                            <h4>
                                <?php echo mysqli_num_rows($pengembalian); ?>
                            </h4>
                            <i class="fa fa-users red-bg"></i>
                            <h5>Total Pengembalian Buku : <?php echo mysqli_num_rows($pengembalian); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Komentar</strong></span>
                            <h4>
                                <?php echo mysqli_num_rows($komentar); ?>
                            </h4>
                            <i class="fa fa-comments green-bg"></i>
                            <h5>Total Komentar : <?php echo mysqli_num_rows($komentar); ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

            </div>
        </div>
    </div>


