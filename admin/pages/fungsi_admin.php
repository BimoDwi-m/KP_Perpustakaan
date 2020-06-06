<?php
function simpan_buku($judul,$sinopsis,$gambar,$pengarang,$penerbit,$tahun,$isbn,$lokasi,$jumlah){
	global $koneksi;
	$judul		= mysqli_real_escape_string($koneksi, $judul);
    $pengarang	= mysqli_real_escape_string($koneksi, $pengarang);
    $penerbit	= mysqli_real_escape_string($koneksi, $penerbit);
	$tahun		= mysqli_real_escape_string($koneksi, $tahun);
    $isbn		= mysqli_real_escape_string($koneksi, $isbn);
    $lokasi		= mysqli_real_escape_string($koneksi, $lokasi);
    $sinopsis		= mysqli_real_escape_string($koneksi, $sinopsis);
    $gambar		= mysqli_real_escape_string($koneksi, $gambar);

	$query = "INSERT INTO tbl_buku (judul,sinopsis,cover,pengarang,penerbit,tahun,isbn,lokasi,jumlah) VALUES ('$judul','$sinopsis','$gambar', '$pengarang', '$penerbit', '$tahun', $isbn,'$lokasi' ,'$jumlah')";
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
function detail_anggota($id)
{
	global $koneksi;
	$query = mysqli_query($koneksi,"SELECT * FROM tbl_anggota WHERE id_anggota = '$id' ");
	$data = mysqli_fetch_object($query);
	return $data;
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
function update_buku($id,$judul,$sinopsis,$gambar,$pengarang,$penerbit,$tahun,$isbn,$jumlah){
	global $koneksi;
	$id			= mysqli_real_escape_string($koneksi, $id);
	$judul		= mysqli_real_escape_string($koneksi, $judul);
    $pengarang	= mysqli_real_escape_string($koneksi, $pengarang);
    $penerbit	= mysqli_real_escape_string($koneksi, $penerbit);
	$tahun		= mysqli_real_escape_string($koneksi, $tahun);
    $isbn		= mysqli_real_escape_string($koneksi, $isbn);

	$query = "UPDATE tbl_buku SET judul = '$judul', sinopsis = '$sinopsis' , cover = '$gambar' , pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun', isbn = '$isbn', jumlah = '$jumlah' WHERE id_buku = '$id'";
	if(mysqli_query($koneksi, $query)){
		return true;
	} else {
		return false;

	}
}
function update_anggota($id,$nama,$jk,$tempat_lahir,$tgl,$prodi){
	global $koneksi;
	$id		= mysqli_real_escape_string($koneksi, $id);
	$nama		= mysqli_real_escape_string($koneksi, $nama);
    $jk	= mysqli_real_escape_string($koneksi, $jk);
    $tempat_lahir	= mysqli_real_escape_string($koneksi, $tempat_lahir);
	$tgl		= mysqli_real_escape_string($koneksi, $tgl);
    $prodi		= mysqli_real_escape_string($koneksi, $prodi);

	$query = "UPDATE tbl_anggota SET nama = '$nama', jenis_kelamin = '$jk', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl', prodi = '$prodi' WHERE id_anggota = '$id'";
	if(mysqli_query($koneksi, $query)){
		return true;
	} else {
		return false;

	}
}
function anggota_kembar($nim){
	global $koneksi;
	$nim = mysqli_real_escape_string($koneksi, $nim);

	$query = "SELECT nim FROM tbl_anggota WHERE nim = '$nim'";
	$hasil = mysqli_query($koneksi, $query);

	if($row = mysqli_num_rows($hasil) == 0){
		return true;
	} else {
		return false;
	}
}
function daftar_anggota($nim,$nama,$jk,$tl,$tgl,$prodi,$status){
	global $koneksi;
	$nama	= mysqli_real_escape_string($koneksi, $nama);
	$jk = mysqli_real_escape_string($koneksi, $jk);
	$tl = mysqli_real_escape_string($koneksi, $tl);
	$tgl = mysqli_real_escape_string($koneksi, $tgl);
	$prodi = mysqli_real_escape_string($koneksi, $prodi);
	$nim	= mysqli_real_escape_string($koneksi, $nim);
	$status = mysqli_real_escape_string($koneksi, $status);
	$password = password_hash($nim, PASSWORD_DEFAULT);

	$query	= "INSERT INTO tbl_anggota (nim, nama, jenis_kelamin, tempat_lahir, tgl_lahir,prodi) VALUES ('$nim', '$nama', '$jk', '$tl', '$tgl' , '$prodi' )";

	if(mysqli_query($koneksi,$query)){
		$id = mysqli_query($koneksi, "SELECT id_anggota FROM tbl_anggota ORDER BY id_anggota DESC LIMIT 1");
		$fetch = mysqli_fetch_object($id);
		$id_anggota = $fetch->id_anggota;
		$user	= "INSERT INTO tbl_user (username, password, level, id_anggota) VALUES ('$nim','$password',$status, $id_anggota )";
		if (mysqli_query($koneksi,$user)) {
			return true;
		}

	} else {
		return false;
	}
}

function pinjam_buku($id_buku,$jumlah){
	global $konek;
	$id_buku = mysqli_real_escape_string($konek, $id_buku);
	$jumlah= mysqli_real_escape_string($konek, $jumlah);
	$cek = mysqli_query($konek,"SELECT * FROM tb_buku WHERE id_buku = '$id_buku'");
	$data = mysqli_fetch_object($cek);

	if($data->stok >= $jumlah){
		$query = "UPDATE tb_buku SET stok = stok - $jumlah WHERE id_buku = '$id_buku'";
		if(mysqli_query($konek, $query)){
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}

}
function pinjam($id_buku,$tglsekarang,$tglkembali,$jumlah,$id_anggota){
	global $konek;
	$id_buku = mysqli_real_escape_string($konek, $id_buku);
	$id_anggota = mysqli_real_escape_string($konek,$id_anggota);
    $tglsekarang = mysqli_real_escape_string($konek,$tglsekarang);
	$tglkembali = mysqli_real_escape_string($konek,$tglkembali);
	$jumlah = mysqli_real_escape_string($konek,$jumlah);
	$query = "INSERT INTO tbl_peminjaman (id_buku,tgl_peminjaman,tgl_pengembalian,jumlah,status,id_user) VALUES ('$id_buku','$tglsekarang','$tglkembali','$jumlah','belum kembali','$id_anggota') ";
	if(mysqli_query($konek, $query)){
		return true;
	} else {
		return false;
	}
}
function detail_peminjaman($id)
{
	global $koneksi;
	$query = mysqli_query($koneksi,"SELECT * FROM tbl_peminjaman INNER JOIN tbl_buku ON tbl_peminjaman.id_buku = tbl_buku.id_buku INNER JOIN tbl_anggota ON tbl_peminjaman.id_user = tbl_anggota.id_anggota WHERE id_peminjaman = '$id'  " );
	$data = mysqli_fetch_object($query);
	return $data;
}
function cek_pengembalian($id_peminjaman,$jumlah){
	global $koneksi;
	$id_peminjaman = mysqli_real_escape_string($koneksi, $id_peminjaman);
	$jumlah= mysqli_real_escape_string($koneksi, $jumlah);
	$cek = mysqli_query($koneksi,"SELECT * FROM tbl_peminjaman WHERE id_peminjaman = '$id_peminjaman'");
	$data = mysqli_fetch_object($cek);

	if($data->jumlah == $jumlah){
		$id_buku = $data->id_buku;
		$query = "UPDATE tbl_buku SET jumlah = jumlah + $jumlah WHERE id_buku = '$id_buku'";
		if(mysqli_query($koneksi, $query)){
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
function pengembalian($id_peminjaman,$tglkembali,$jumlah){
	global $konek;
	$id_peminjaman = mysqli_real_escape_string($konek, $id_peminjaman);
	$tglkembali = mysqli_real_escape_string($konek,$tglkembali);
	$jumlah = mysqli_real_escape_string($konek,$jumlah);
	$query = "INSERT INTO tbl_pengembalian (id_peminjaman,tgl_kembali,jumlah) VALUES ('$id_peminjaman','$tglkembali','$jumlah') ";
	if(mysqli_query($konek, $query)){
		if(hapus_peminjaman($id_peminjaman)){
			return true;
		}else{
			return false;
		}

	} else {
		return false;
	}
}

function hapus_peminjaman($id_peminjaman){
	global $konek;
	$query = "UPDATE tbl_peminjaman SET status = 'kembali' WHERE id_peminjaman = '$id_peminjaman' ";
	if (mysqli_query($konek,$query)) {
		return true;
	}else{
		return false;
	}
}
function terlambat($tgl_dateline,$tgl_kembali){

	$tgl_dateline_pecah = explode("-", $tgl_dateline);
	$tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline_pecah[1]."-".$tgl_dateline_pecah[0];


	$tgl_kembali_pecah = explode("-", $tgl_kembali);
	$tgl_kembali_pecah = $tgl_kembali_pecah[2]."-".$tgl_kembali_pecah[1]."-".$tgl_kembali_pecah[0];

	$selisih = strtotime($tgl_kembali_pecah) - strtotime($tgl_dateline_pecah);

	$selisih = $selisih/86400; //detik dalam 1 hari

	if ($selisih>=1){
		$hasi_tgl = floor($selisih);

	}else{
		$hasi_tgl = 0;
	}

	return $hasi_tgl;
}