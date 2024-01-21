<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$jenis_kelamin=$_POST['jenis_kelamin'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into siswa(nama,nim,jurusan,jenis_kelamin) 
                        values ('$nama','$nim','$jurusan', '$jenis_kelamin')");

if($simpan==true){

    header("location:tampil-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>