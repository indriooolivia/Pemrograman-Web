<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>e-libra</title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="sign">
        <div class="card">
            <h2>Sign Up</h2>
            <form method="post">
                <div class="form-group">
                    <label for="name" class="text-white">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="text-white">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password" class="text-white">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="submit">Sign Up</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($con, $_POST['name']);
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_escape_string($con, $_POST['password']);

                $sql = "INSERT INTO `anggota` (id,username,password,email) VALUES (NULL,'$username','$password','$email')";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    echo "<p class='text-white;'>Sign Up berhasil !</p>";
                } else {
                    echo "<p class='text-white;'>Sign Up gagal !</p>";
                }
            }
            ?>
        </div>
    </div>

</body>

</html>