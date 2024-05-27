<?php
include_once("./connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db,"SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $nama_buku = $_POST["nama_buku"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "UPDATE buku SET nama_buku = '$nama_buku', isbn = '$isbn',unit = $unit WHERE id = $id ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
    <h1>Form Edit Data Buku</h1>
    <br>
    <form action="" method="POST">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?php echo $buku['nama_buku']?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ISBN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $buku['isbn']?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="unit" name="unit" value="<?php echo $buku['unit']?>">
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" id="submit" name="submit">Submit</button>
            <a href="daftarBuku.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Kembali ke Halaman Daftar Buku</a>
        </div>
    </form>
</body>
<script src="boostrap.js"></script>

</html>