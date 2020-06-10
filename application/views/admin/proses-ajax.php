<?php
include '../core/init.php';
$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_anggota WHERE nim='$nim'");
$mahasiswa = mysqli_fetch_assoc($query);
$data = array(
            'id_anggota' => $mahasiswa['id_anggota'],
            'nama'       =>  $mahasiswa['nama'],
            'prodi'      => $mahasiswa['prodi']
        );
 echo json_encode($data);
?>