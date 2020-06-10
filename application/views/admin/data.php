<?php

    $buku = mysqli_query($konek, "SELECT buku.*, kat.* FROM tb_buku buku INNER JOIN tb_kategori kat ON buku.id_kategori=kat.id_kategori ORDER BY buku.id_buku DESC");


    $kategori = mysqli_query($konek, "SELECT * FROM tb_kategori");
?>
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
                            <strong>Insert Sukses!</strong> Penambahan data buku baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan data buku baru gagal.
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
                              <h2>Data Buku</h2>
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Buku</li>
          </ul>
          <div class="main-content-area">
              <div class="row">
                  <div class="streaming-table">
                    <a href="#" data-toggle="modal" data-target=".tambah" class="icon-btn pulse-grow"><i class="fa fa-plus-square blue-bg"></i> Tambah Data Buku</a>
                  </div>
              </div>
               <div class="row">
                    <div class="col-md-12">
                         <div class="streaming-table">
                                   <span id="found" class="label label-info"></span>
                                   <table id="buku" class='table table-responsive table-responsive table-striped table-hover'>
                                     <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Judul</th>
                                          <th>Pengarang</th>
                                          <th>Penerbit</th>
                                          <th>Tahun</th>
                                          <th>Halaman</th>
                                          <th>Kategori</th>
                                          <th>Sinopsis</th>
                                          <th>Stok</th>
                                          <th>Cover</th>
                                          <th width="500">Rating</th>
                                          <th>Operasi</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <?php
                                            $no = 1;
                                            while($row=mysqli_fetch_assoc($buku)){
                                        ?>
                                         <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $row['judul_buku']; ?></td>
                                            <td><?= $row['pengarang']; ?></td>
                                            <td><?= $row['penerbit']; ?></td>
                                            <td><?= $row['tahun']; ?></td>
                                            <td><?= $row['halaman']; ?></td>
                                            <td><?= $row['judul_kategori']; ?></td>
                                            <td>
                                                <?php
                                                    $text = $row['sinopsis'];
                                                    $strip = strip_tags(htmlspecialchars_decode(stripcslashes($text)), '<a>');
                                                    echo substr($strip, 0, 30);
                                                    if(strlen(trim($row['sinopsis']))>30) echo " [...]";
                                                ?>
                                            </td>
                                            <td><?= $row['stok']; ?></td>
                                            <td>
                                                <a data-fancybox="gallery" href="../img/book/<?= $row['cover']; ?>">
                                                    <img src="../img/book/<?= $row['cover']; ?>" class="img-thumbnail img-responsive" alt="img" style="width:50px;">
                                                </a>
                                            </td>
                                            <td>
                                                <?php
                                                    $x = $row['rating'];
                                                    $j = 5-$x;
                                                    for ($i=0; $i<$x ; $i++) {
                                                ?>
                                                <i class="fa fa-star" style="color:#f39c12;"></i>
                                                <?php } for ($i=0; $i<$j ; $i++) { ?>
                                                <i class="fa fa-star-o" style="color:#f39c12;"></i>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <form action="lib/proses.php" method="post">
                                                <input type="hidden" name="id" value="<?= $row['id_buku']; ?>">
                                                <?php if($row['best']==1) {?>
                                                    <button type="submit" name="hapus_best" title="Hapus sebagai best seller" class="c-btn small blue-bg buzz"><i class="fa fa-star"></i></button>
                                                <?php } else { ?>
                                                    <button type="submit" name="tambah_best" title="Tambah sebagai best seller" class="c-btn small buzz"><i class="fa fa-star-o"></i></button>
                                                <?php } ?>
                                                </form>


                                                <a href="" data-toggle="modal" data-target=".Pinjam" data-id='<?= $row['id_buku']; ?>' data-judul='<?= $row['judul_buku']; ?>'
                                                data-pengarang='<?= $row['pengarang']; ?>'  data-tahun='<?= $row['tahun']; ?>'
                                                data-nama='<?= $row['nama'] ?? ''; ?>' data-sinopsis='<?= $row['sinopsis']; ?>'
                                                data-stok='<?= $row['stok']; ?>' data-rating='<?= $row['rating']; ?>' title="Pinjam" class="c-btn small blue-bg buzz edit_button"><i class="fa fa-exchange"></i></a>


                                                <a href="" data-toggle="modal" data-target=".edit" data-id='<?= $row['id_buku']; ?>' data-judul='<?= $row['judul_buku']; ?>'
                                                data-pengarang='<?= $row['pengarang']; ?>' data-penerbit='<?= $row['penerbit']; ?>' data-tahun='<?= $row['tahun']; ?>'
                                                data-halaman='<?= $row['halaman']; ?>' data-kategori='<?= $row['id_kategori']; ?>' data-sinopsis='<?= $row['sinopsis']; ?>'
                                                data-stok='<?= $row['stok']; ?>' data-rating='<?= $row['rating']; ?>' class="c-btn small green-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>

                                                <a href="" data-toggle="modal" data-target=".hapus" data-id='<?= $row['id_buku']; ?>' data-judul='<?= $row['judul_buku']; ?>'
                                                data-pengarang='<?= $row['pengarang']; ?>' data-penerbit='<?= $row['penerbit']; ?>' class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                         <?php $no++; } ?>
                                     </tbody>
                                   </table>
                                </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div><!-- Panel Content -->
     <div class="modal fade tambah" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Buku</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" placeholder="Masukkan Judul Buku" id="judul" name="judul" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" placeholder="Masukkan Pengarang Buku" id="pengarang" name="pengarang" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" placeholder="Masukkan Penerbit Buku" id="penerbit" name="penerbit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" placeholder="Masukkan Tahun Terbit Buku" id="tahun" name="tahun" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="halaman">Halaman</label>
                            <input type="number" placeholder="Masukkan Halaman Buku" id="halaman" name="halaman" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <?php while($row=mysqli_fetch_assoc($kategori)){ ?>
                                    <option value="<?= $row['id_kategori']; ?>"><?= $row['judul_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sinopsis">Sinopsis</label>
                            <textarea name="sinopsis" id="sinopsis" rows="5" cols="20" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" placeholder="Masukkan Jumlah Stok Buku" id="stok" name="stok" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="file" id="cover" name="cover" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <select name="rating" id="rating" class="form-control" style="font-family:'FontAwesome', Arial; color:#f39c12;">
                                <option value="0">
                                    &#xf006;&#xf006;&#xf006;&#xf006;&#xf006;
                                </option>
                                <option value="1">
                                    &#xf005;&#xf006;&#xf006;&#xf006;&#xf006;
                                </option>
                                <option value="2">
                                    &#xf005;&#xf005;&#xf006;&#xf006;&#xf006;
                                </option>
                                <option value="3">
                                    &#xf005;&#xf005;&#xf005;&#xf006;&#xf006;
                                </option>
                                <option value="4">
                                    &#xf005;&#xf005;&#xf005;&#xf005;&#xf006;
                                </option>
                                <option value="5">
                                    &#xf005;&#xf005;&#xf005;&#xf005;&#xf005;
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn large blue-bg" name="tambah">Tambah</button>
                        <button type="button" class="c-btn large red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="modal fade Pinjam" tabindex="-2" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Pinjam Buku</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">Id Buku</label>
                            <input type="text" id="id" name="id" class="form-control edit_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" placeholder="Masukkan Judul Buku" id="judul" name="judul" class="form-control edit_judul" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" placeholder="Masukkan Pengarang Buku" id="pengarang" name="pengarang" class="form-control edit_pengarang" readonly>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Tanggal Peminjaman</label>
                            <input type="date" placeholder="Masukkan Penerbit Buku" id="datenow" name="datenow" class="form-control " readonly>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tanggal Kembali</label>
                            <input type="date" placeholder="Masukkan Tahun Terbit Buku" id="tglkembali" name="tglkembali" class="form-control edit_tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="halaman">Jumlah Buku Yang Di Pinjam</label>
                            <input type="number" placeholder="Masukkan jumlah Buku"  name="stok" class="form-control edit_halaman" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Nomor Anggota Peminjam</label>
                            <input type="text" onkeyup="isi_otomatis()" id="nim"  name="nim" class="form-control edit_halaman" required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Nama Peminjam</label>
                            <input type="text" id="nama" name="nama" class="form-control " readonly>
                        </div>
                        <input type="hidden" name="id_anggota" id="id_anggota">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn large green-bg" name="pinjam">Submit</button>
                        <button type="button" class="c-btn large red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

<!-- --------------------------------------------------------------------- -->
    <div class="modal fade edit" tabindex="-2" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Buku</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">ID Buku</label>
                            <input type="text" id="judul" name="id" class="form-control edit_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" placeholder="Masukkan Judul Buku" id="judul" name="judul" class="form-control edit_judul" required>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" placeholder="Masukkan Pengarang Buku" id="pengarang" name="pengarang" class="form-control edit_pengarang" required>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" placeholder="Masukkan Penerbit Buku" id="penerbit" name="penerbit" class="form-control edit_penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" placeholder="Masukkan Tahun Terbit Buku" id="tahun" name="tahun" class="form-control edit_tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="halaman">Halaman</label>
                            <input type="number" placeholder="Masukkan Halaman Buku" id="halaman" name="halaman" class="form-control edit_halaman" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <?php
                                    $kat=mysqli_query($konek, "SELECT * FROM tb_kategori");
                                    while($data=mysqli_fetch_assoc($kat)){ ?>
                                    <option value="<?= $data['id_kategori']; ?>" id="<?= $data['id_kategori']; ?>"><?= $data['judul_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sinopsis">Sinopsis</label>
                            <textarea name="sinopsis" id="sinopsis" rows="5" cols="20" class="form-control edit_sinopsis"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" placeholder="Masukkan Jumlah Stok Buku" id="stok" name="stok" class="form-control edit_stok" required>
                        </div>
                        <div class="form-group">
                            <label for="cover">Ganti Cover <small>(Biarkan kosong jika tidak ingin cover berganti)</small></label>
                            <input type="file" id="cover" name="cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <select name="rating" id="rating_edit" class="form-control" style="font-family:'FontAwesome', Arial; color:#f39c12;">
                                <option value="0" id="nol">
                                    &#xf006;&#xf006;&#xf006;&#xf006;&#xf006;
                                </option>
                                <option value="1" id="satu">
                                    &#xf005;&#xf006;&#xf006;&#xf006;&#xf006;
                                </option>
                                <option value="2" id="dua">
                                    &#xf005;&#xf005;&#xf006;&#xf006;&#xf006;
                                </option>
                                <option value="3" id="tiga">
                                    &#xf005;&#xf005;&#xf005;&#xf006;&#xf006;
                                </option>
                                <option value="4" id="empat">
                                    &#xf005;&#xf005;&#xf005;&#xf005;&#xf006;
                                </option>
                                <option value="5" id="lima">
                                    &#xf005;&#xf005;&#xf005;&#xf005;&#xf005;
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn large blue-bg" name="update">Update</button>
                        <button type="button" class="c-btn large red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="modal fade hapus" tabindex="-3" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Data Buku</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="id">ID Buku</label>
                            <input type="text" id="judul" name="id" class="form-control hapus_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" placeholder="Masukkan Judul Buku" id="judul" name="judul" class="form-control hapus_judul" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" placeholder="Masukkan Pengarang Buku" id="pengarang" name="pengarang" class="form-control hapus_pengarang" readonly>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" placeholder="Masukkan Penerbit Buku" id="penerbit" name="penerbit" class="form-control hapus_penerbit" readonly>
                        </div>
                        <p>Apakah Anda yakin akan menghapus buku dengan data di atas?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn large blue-bg" name="hapus">Hapus</button>
                        <button type="button" class="c-btn large red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

  <script type="text/javascript" class="init">
        tglpinjam = document.getElementById('datenow').valueAsDate = new Date();
        Date.prototype.addDays = function (days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
      }

        var date = new Date();
        tglsekarang = document.getElementById('tglkembali').valueAsDate = date.addDays(3);

    function addDays(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

</script>