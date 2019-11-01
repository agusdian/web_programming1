<?php

include "config/koneksi.php";
$nim = $_GET["npm"];

$sql = "delete from mahasiswa where npm = '$npm'";
$hasil = mysqli_query($conn, $sql);

header("Location: index_while.php");
