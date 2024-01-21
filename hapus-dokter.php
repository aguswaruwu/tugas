<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from dokter where id_dokter='$id'");

if($hapus==true){

    header("location:tampil-dokter.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>