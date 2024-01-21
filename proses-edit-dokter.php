<?php

include "koneksi.php";

$id_dokter=$_POST['id_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$tanggal_lahir=$_POST['tanggal_lahir'];

$ubah=$koneksi->query("update dokter set id_dokter='$id_dokter', nama_dokter='$nama_dokter', spesialis='$spesialis', telepon='$telepon', alamat='$alamat', email='$email', tanggal_lahir='$tanggal_lahir' where id_dokter='$id_dokter'");

if($ubah==true){

    header("location:tampil-dokter.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>