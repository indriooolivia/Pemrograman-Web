<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$serverName = "localhost";
$userName = 'root';
$password = '';
$db = "perpustakaan";

$con = mysqli_connect($serverName, $userName, $password, $db);

if (mysqli_connect_errno()) {
    echo "Connections Error !";
    exit();

}

?>