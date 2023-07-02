<?php
include 'connect.php';
session_start();

if ($_SESSION['username'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>e-libra Admin</title>
</head>

<body>

    <?php include 'header.php' ?>

    <div class="container mt-5 mb-2">
        <a href="admin.php" class="btn-add mr-2">Kembali</a>
    </div>

    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="judul" class="text-dark">Judul:</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="pengarang" class="text-dark">Pengarang:</label>
                <input type="text" id="pengarang" name="pengarang" required>
            </div>
            <div class="form-group">
                <label for="tahun" class="text-dark">Tahun Terbit:</label>
                <input type="number" id="tahun" name="tahun" required>
            </div>
            <div class="form-group">
                <label for="penerbit" class="text-dark">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" required>
            </div>
            <br>
            <button type="submit" name="submit">Tambah</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $judul = mysqli_real_escape_string($con, $_POST['judul']);
            $pengarang = mysqli_real_escape_string($con, $_POST['pengarang']);
            $tahun = mysqli_real_escape_string($con, $_POST['tahun']);
            $penerbit = mysqli_real_escape_string($con, $_POST['penerbit']);

            $sql = "INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `penerbit`) VALUES (NULL, '$judul', '$pengarang', '$tahun', '$penerbit')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                header("Location: admin.php");
            }
        }
        ?>
    </div>

</body>

</html>