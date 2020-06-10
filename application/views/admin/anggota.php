<?php

    $query = mysqli_query($konek, "SELECT * FROM tbl_anggota");

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
                            <strong>Insert Sukses!</strong> Penambahan Anggota baru berhasil.
                        </div>
                        <?php } else if($alert=='insert_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Insert Gagal!</strong> Penambahan Anggota baru gagal.
                        </div>
                        <?php } else if($alert=='upload_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Gagal!</strong> Terjadi Kesalahan pada sistem.
                        </div>
                        <?php } else if($alert=='update_sukses'){ ?>
                        <div role="alert" class="alert color green-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Sukses!</strong> Pembaharuan data Anggota berhasil.
                        </div>
                        <?php } else if($alert=='update_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Gagal!</strong> Pembaharuan data Anggota gagal.
                        </div>
                        <?php } else if($alert=='hapus_sukses'){ ?>
                        <div role="alert" class="alert color blue-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Hapus Sukses!</strong> Data Anggota berhasil dihapus.
                        </div>
                        <?php } else if($alert=='hapus_gagal'){ ?>
                        <div role="alert" class="alert color red-bg fade in alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Update Gagal!</strong> Pembaharuan data Anggota gagal.
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Data Anggota</h2>
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="#" title="">Beranda</a></li>
               <li>Data Anggota</li>
          </ul>
          <div class="main-content-area">
              <div class="row">
                  <div class="streaming-table">
                    <a href="#" data-toggle="modal" data-target=".tambahanggota" class="icon-btn pulse-grow"><i class="fa fa-plus-square blue-bg"></i> Tambah Data Anggota</a>
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
                                          <th>NIA</th>
                                          <th>Nama</th>
                                          <th>Jenis Kelamin</th>
                                          <th>Tempat Lahir</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Jenis Anggota</th><!--
                                          <th>Operasi</th> -->
                                        </tr>
                                     </thead>
                                     <tbody>
                                        <?php
                                            $no = 1;
                                            while($row=mysqli_fetch_assoc($query)){
                                        ?>
                                         <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row['nia']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['jenis_kelamin']; ?></td>
                                            <td><?php echo $row['tempat_lahir']; ?></td>
                                            <td><?php echo $row['tgl_lahir']; ?></td>
                                            <td><?php echo $row['jenis']; ?></td>
<!--                                             <td>

                                                <a href="" data-toggle="modal" data-target=".edit" data-id='<?php echo $row['id_anggota']; ?>' data-nama='<?php echo $row['nama']; ?>'
                                                data-jenis_kelamin='<?php echo $row['jenis_kelamin']; ?>' data-tempat_lahir='<?php echo $row['tempat_lahir']; ?>' data-tgl_lahir='<?php echo $row['tgl_lahir']; ?>'
                                                data-jenis='<?php echo $row['jenis']; ?>' class="c-btn small green-bg buzz edit_button"><i class="fa fa-pencil-square"></i></a>

                                                <a href="" data-toggle="modal" data-target=".hapus" data-id='<?php echo $row['id_buku']; ?>' data-judul='<?php echo $row['judul_buku']; ?>'
                                                data-pengarang='<?php echo $row['pengarang']; ?>' data-penerbit='<?php echo $row['penerbit']; ?>' class="c-btn small red-bg buzz delete_button"><i class="fa fa-trash"></i></a>
                                            </td> -->
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
     <div class="modal fade tambahanggota" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Anggota</h4>
            </div>
            <div class="modal-body">
                <form action="lib/proses.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group">
                            <label for="nia">NIA</label>
                            <input type="number" placeholder="Masukkan Nomor Anggota" id="nia" name="nia" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" placeholder="Masukkan Nama Anggota" id="nama" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" placeholder="Masukkan Jenis Kelamin Anggota" id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" placeholder="Masukkan Tempat Lahir Anggota" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" placeholder="Masukkan Tanggal Lahir Anggota" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Anggota</label>
                            <input type="text" placeholder="Masukkan Jenis Anggota" id="jenis" name="jenis" class="form-control" required>
<!--                             <select name="kategori" id="kategori" class="form-control">
                                <?php while($row=mysqli_fetch_assoc($kategori)){ ?>
                                    <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['judul_kategori']; ?></option>
                                <?php } ?>
                            </select> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="c-btn large blue-bg" name="tambahanggota">Tambah</button>
                        <button type="button" class="c-btn large red-bg" data-dismiss="modal">Batal</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

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
                            <label for="id">ID Anggota</label>
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
                                    <option value="<?php echo $data['id_kategori']; ?>" id="<?php echo $data['id_kategori']; ?>"><?php echo $data['judul_kategori']; ?></option>
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