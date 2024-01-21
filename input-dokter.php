<!doctype HTML>
<html>
<head>
    <title>Form Input Dokter</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-dokter.php" method="POST">
                    <div class="form-group">
                        <label for="id_dokter">ID DOKTER</label>
                        <input type="number" name="id_dokter" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_dokter">NAMA DOKTER</label>
                        <input type="text" name="nama_dokter" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="spesialis">SPESIALIS</label>
                        <input type="text" name="spesialis" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">tanggal_lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>



                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>