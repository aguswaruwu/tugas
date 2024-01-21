<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['siswa_id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];

$ubah=$koneksi->query("update siswa set  nama='$nama', nim='$nim', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', where siswa_id='$id'");

if($ubah==true){

    header("location:tampil-mahasiswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>