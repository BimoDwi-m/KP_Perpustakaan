<?php
function simpan_buku($judul,$pengarang,$penerbit,$tahun,$isbn,$jumlah){
	global $koneksi;
	$judul		= mysqli_real_escape_string($koneksi, $judul);
    $pengarang	= mysqli_real_escape_string($koneksi, $pengarang);
    $penerbit	= mysqli_real_escape_string($koneksi, $penerbit);
	$tahun		= mysqli_real_escape_string($koneksi, $tahun);
    $isbn		= mysqli_real_escape_string($koneksi, $isbn);
    echo $jumlah;

	$query = "INSERT INTO tbl_buku (judul,pengarang,penerbit,tahun,isbn,jumlah) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', $isbn, '$jumlah')";
	if(mysqli_query($koneksi, $query)){
        return true;
	} else {
		return false;
	}
}

function detail_buku($id)
{
	global $koneksi;
	$query = mysqli_query($koneksi,"SELECT * FROM tbl_buku WHERE id_buku = '$id' ");
	$data = mysqli_fetch_object($query);
	return $data;
}

function hapus_buku($id){
	global $koneksi;
	$id = mysqli_real_escape_string($koneksi, $id);
	$query = "DELETE FROM tbl_buku WHERE id_buku = '$id'";

	if(mysqli_query($koneksi, $query)){
		return true;
	} else {
		return false;
	}
}
function hapus_anggota($id){
	global $koneksi;
	$id = mysqli_real_escape_string($koneksi, $id);
	$query = "DELETE FROM tbl_anggota WHERE id_anggota = '$id'";

	if(mysqli_query($koneksi, $query)){
		return true;
	} else {
		return false;
	}
}
function update_buku($id,$judul,$pengarang,$penerbit,$tahun,$isbn,$jumlah){
	global $koneksi;
	$id		= mysqli_real_escape_string($koneksi, $id);
	$judul		= mysqli_real_escape_string($koneksi, $judul);
    $pengarang	= mysqli_real_escape_string($koneksi, $pengarang);
    $penerbit	= mysqli_real_escape_string($koneksi, $penerbit);
	$tahun		= mysqli_real_escape_string($koneksi, $tahun);
    $isbn		= mysqli_real_escape_string($koneksi, $isbn);

	$query = "UPDATE tbl_buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun', isbn = '$isbn', jumlah = '$jumlah' WHERE id_buku = '$id'";
	if(mysqli_query($koneksi, $query)){
		return true;
	} else {
		return false;

	}
}