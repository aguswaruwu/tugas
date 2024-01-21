<!doctype HTML>
<html>
<head>
    <title>Form Edit Dokter</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-dokter.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from dokter where id_dokter='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_dokter">ID DOKTER</label>
                        <input type="hidden" name="id_dokter" value="<?php echo $row['id_dokter']?>" class="form-control">
                        <input type="number" name="id_dokter" value="<?php echo $row['id_dokter']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_dokter">NAMA DOKTER</label>
                        <input type="text" name="nama_dokter" value="<?php echo $row['nama_dokter']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="spesialis">SPESIALIS</label>
                        <input type="text" name="spesialis" value="<?php echo $row['spesialis']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                     <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" value="<?php echo $row['telepon']?>" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>   

                    <div class="form-group">
                        <label for="tanggal_lahir">tanggal_lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>" class="form-control">
                    </div>                                     

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>