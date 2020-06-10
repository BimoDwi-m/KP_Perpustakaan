<!DOCTYPE html>
<html lang="en">
<?php
        include 'fungsi_admin.php';
        $koneksi = mysqli_connect('localhost','root','','db_buku');

        if (empty($_SESSION['username'])){
            ?>
<script>
    alert("Anda Harus Login Terlebih Dahulu")
</script>
<script>
    window.location = "../user/login.php"
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
                            <strong>Insert Sukses!</strong> Pengembalian buku berhasil dilakukan.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Pengembalian buku gagal dilakukan.
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

	        <div class="x_content">
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="card-box table-responsive">
	                    <table border="1px solid" class="table table-striped table-bordered"
	                            id="datatable-ku" style="width:100%">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tanggal Harus Dikembalikan</th>
                            <th>Tanggal Kembali</th>
                            <th>Nama Peminjam</th>
                            <th>NIM</th>
                            <th>Denda</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $query = mysqli_query($konek, "SELECT * FROM tbl_pengembalian INNER JOIN tbl_peminjaman ON tbl_pengembalian.id_peminjaman = tbl_peminjaman.id_peminjaman INNER JOIN tb_buku ON tbl_peminjaman.id_buku = tb_buku.id_buku INNER JOIN tbl_anggota ON tbl_anggota.id_anggota = tbl_peminjaman.id_user WHERE tbl_peminjaman.status = 'kembali' ORDER BY id_pengembalian DESC");
                while ($data = mysqli_fetch_object($query)) {
                    $tgl = terlambat($data->tgl_pengembalian,$data->tgl_kembali);
                    ?>

            <tr>
                <td><?= $data->judul_buku ?></td>
                <td><?= $data->tgl_pengembalian ?></td>
                <td><?= $data->tgl_kembali ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->nia ?></td>
                <td>Rp.<?= $tgl * 500 ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- /page content -->


        </div>
    </div>

</body>
<?php } ?>

</html>