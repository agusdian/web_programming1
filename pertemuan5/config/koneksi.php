<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "phpdasar";
$conn = mysqli_connect($server, $username, $password, $db_name);

if (!$conn) {
    echo "koneksi server gagal";
}
