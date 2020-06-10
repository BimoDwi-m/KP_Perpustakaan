<?php
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
                                <strong>Berhasil login!</strong> selamat Datang <strong><?= $_SESSION['nama']; ?></strong>, Anda berhasil login sebagai administrator <strong>Spenforlu Library</strong>
                    </div>
                    <?php } } ?>
                </div>
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Dashboard</h2>
                        <span><?= $_SESSION['nama']; ?></span>
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
                                <?= $navdata['anggota'] ?>
                            </h4>
                            <i class="fa fa-users green-bg"></i>
                            <h5>Total Anggota : <?= $navdata['anggota'] ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Buku</strong></span>
                            <h4>
                                <?= $navdata['buku'] ?>
                            </h4>
                            <i class="fa fa-book red-bg"></i>
                            <h5>Total Stok Buku : <?= $stok[0]; ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Kategori</strong></span>
                            <h4>
                                <?= $navdata['kategori']; ?>
                            </h4>
                            <i class="fa fa-tags skyblue-bg"></i>
                            <h5>Total Kategori Buku : <?= $navdata['kategori']; ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Peminjaman</strong></span>
                            <h4>
                                <?= $navdata['Peminjaman']; ?>
                            </h4>
                            <i class="fa fa-exchange green-bg"></i>
                            <h5>Total Peminjaman dikembalikan : <?= $navdata['peminjamkembali']; ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Pengembalian</strong></span>
                            <h4>
                                <?= $navdata['pengembalian']; ?>
                            </h4>
                            <i class="fa fa-users red-bg"></i>
                            <h5>Total Pengembalian Buku : <?= $navdata['pengembalian']; ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <div class="quick-report-widget">
                            <span><strong>Komentar</strong></span>
                            <h4>
                                <?= $navdata['komentar']; ?>
                            </h4>
                            <i class="fa fa-comments green-bg"></i>
                            <h5>Total Komentar : <?= $navdata['komentar']; ?></h5>
                        </div>
                    </div><!-- Widget -->
                </div>

            </div>
        </div>
    </div>


