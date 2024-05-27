<?php
include_once("./connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama = '$nama', telp = '$telp',email = '$email' WHERE id = $id ");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Tambah Buku</title>
    <link rel="stylesheet" href="boostrap.min.css">
</head>

<body>
    <h1>Form Edit Data Buku</h1>
    <br>
    <form action="" method="POST">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $staff['nama'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">No Telpon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $staff['telp'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $staff['email'] ?>">
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" id="submit" name="submit">Submit</button>
            <a href="daftarStaff.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Kembali ke Halaman Daftar Buku</a>
        </div>
    </form>
</body>
<script src="boostrap.js"></script>

</html>