<?php
  session_start();
  include "../../db/db.php";
  $username=mysqli_real_escape_string($koneksi, $_POST['username']);
  $password=mysqli_real_escape_string($koneksi, $_POST['password']);
  $passcrypt=sha1($password);
  $query=mysqli_query($koneksi, "SELECT * FROM tb_user where username='$username' and password='$password'");
  $row=mysqli_fetch_assoc($query);
  $cek=mysqli_num_rows($query);
  if($cek==1&&$row['level']=='admin'){
    $_SESSION['username']=$username;
    $_SESSION['nama']=$row['nama_user'];
    // echo $_SESSION['nama'];
    header("location:../index.php?a=sukses_login");
  }else{
    header("location:../login.php?a=gagal_login");
    // echo $username."<br>";
    // echo $passcrypt."<br>";
  }