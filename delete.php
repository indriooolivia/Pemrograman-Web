<?php
    include 'connect.php';
    session_start();

    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($con, $_GET['id']);

        $sql = "DELETE FROM `buku` WHERE id='$id'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('Location: admin.php');
        } else {
            die(mysqli_error($con));
        }
    }

    $con->close();
?>