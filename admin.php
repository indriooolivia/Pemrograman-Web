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
        <!-- <a href="" class="btn-add mr-2">Kembali</a> -->
        <a href="add.php" class="btn-add">Tambah List Buku</a>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM `buku`";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $row['judul']; ?>
                        </td>
                        <td>
                            <?php echo $row['pengarang']; ?>
                        </td>
                        <td>
                            <?php echo $row['tahun_terbit']; ?>
                        </td>
                        <td>
                            <?php echo $row['penerbit']; ?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $id; ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

</body>

</html>