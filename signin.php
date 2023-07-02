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
            <h2>Sign In</h2>
            <form method="post">
                <div class="form-group">
                    <label for="name" class="text-white">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="password" class="text-white">Password:</label>
                    <input type="password" id="password" name="pass" required>
                </div>
                <button type="submit" name="submit">Sign Up</button>
            </form>
            <?php

            if (isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($con, $_POST['name']);
                $password = mysqli_escape_string($con, $_POST['pass']);

                $sql = "SELECT * FROM `anggota` WHERE username = '$username'";
                $result = mysqli_query($con, $sql);
                $user = mysqli_fetch_assoc($result);
                
                if ($user) {
                    if ($password === $user['password']) {
                        session_start();
                        $_SESSION['login'] = 'Login successfull';
                        $_SESSION['username'] = $username;
                        if ($username === 'admin') {
                            header("Location: admin.php");
                        } else {
                            header("Location: login.php");
                        }
                        echo $_SESSION['login'] . "!";
                    } else {
                        echo "Invalid password!";
                    }
                } else {
                    echo "Invalid username!";
                }
            }
            ?>
        </div>
    </div>

</body>

</html>