<?php
        include 'fungsi_admin.php';
        $koneksi = mysqli_connect('localhost','root','','db_buku');
        session_start();
        if (empty($_SESSION['username'])){
            ?>
<script>
    alert("Anda Harus Login Terlebih Dahulu")
</script>
<script>
    window.location = "../login.php"
</script>
<?php
    }else{?>

<div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                   <div class="col-md-12 column">
                       <?php
                        if(isset($_GET['a'])){
                            $alert=$_GET['a'];
                            if($alert=='insert_sukses'){
                        ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Sukses!</strong> Peminjaman buku berhasil dilakukan.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Peminjaman buku gagal dilakukan.
                        </div>
                        <?php } else if($alert=='upload_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Gagal!</strong> Upload cover buku gagal.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data buku berhasil.
                        </div>
                        <?php } else if($alert=='update_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Gagal!</strong> Pembaharuan data buku gagal.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus Sukses!</strong> Data buku berhasil dihapus.
                        </div>
                        <?php } else if($alert=='hapus_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Gagal!</strong> Pembaharuan data buku gagal.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Data Peminjaman</h2>
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Peminjaman</li>
          </ul>
        
<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>

                            <th>Judul</th>
                            <th>Penerbit</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Nama Peminjam</th>
                            <th>NIA</th>
                            <th>Jumlah</th>
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $query = mysqli_query($konek, "SELECT * FROM tb_buku INNER JOIN tbl_peminjaman ON tb_buku.id_buku = tbl_peminjaman.id_buku INNER JOIN tbl_anggota ON tbl_anggota.id_anggota = tbl_peminjaman.id_user WHERE tbl_peminjaman.status = 'belum kembali' ");
                while ($data = mysqli_fetch_object($query)) {?>

                        <tr>
                            <td><?= $data->judul_buku ?></td>
                            <td><?= $data->penerbit ?></td>
                            <td><?= $data->tgl_peminjaman ?></td>
                            <td><?= $data->tgl_pengembalian ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->nia ?></td>
                            <td><?= $data->jumlah ?></td>
                            <td><a href="lib/kembali.php?id_peminjaman=<?=$data->id_peminjaman ?>" class="btn btn-primary">Kembalikan</a>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->
</div>

<?php } ?>

</html>