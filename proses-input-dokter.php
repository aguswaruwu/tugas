<?php

$id_dokter=$_POST['id_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$spesialis=$_POST['spesialis'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$tanggal_lahir=$_POST['tanggal_lahir'];

include "koneksi.php";

$simpan=$koneksi->query("insert into dokter(id_dokter,nama_dokter,spesialis,alamat,telepon,email,tanggal_lahir) 
                        values ('$id_dokter', '$nama_dokter', '$spesialis', '$alamat', '$telepon', '$email', '$tanggal_lahir')");

if($simpan==true){

    header("location:tampil-dokter.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>