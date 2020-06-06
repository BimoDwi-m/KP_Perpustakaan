<?php
    include 'koneksi.php';
    $id = $_GET['id_peminjaman'];
    $datenow = date('Y-m-d');
    $query = mysqli_query($konek, "SELECT * FROM tbl_peminjaman WHERE id_peminjaman = '$id'");
    $l = mysqli_fetch_assoc($query);
    $jumlah = $l['jumlah'];
    $id_buku = $l['id_buku'];
    $query = "INSERT INTO tbl_pengembalian (id_peminjaman,tgl_kembali,jumlah) VALUES ('$id','$datenow','$jumlah') ";
    $kembali = mysqli_query($konek,"UPDATE tb_buku SET stok = stok + $jumlah WHERE id_buku = '$id_buku'");
    if(mysqli_query($konek, $query)){
                        header('location: ../index.php?p=pengembalian&a=insert_sukses');
        if(hapus_peminjaman($id)){
            return true;
        }else{
            return false;
        }

    } else {
        return false;
    }
    function hapus_peminjaman($id){
        global $konek;
        $query = "UPDATE tbl_peminjaman SET status = 'kembali' WHERE id_peminjaman = '$id' ";
        if (mysqli_query($konek,$query)) {
            return true;
        }else{
            return false;
        }
    }

?>