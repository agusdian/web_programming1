<?php
include "config/koneksi.php";

$npm = $_POST["npm"];
$nama = $_POST["nama_mhs"];
$email = $_POST["email_mhs"];
$jurusan = $_POST["jurusan"];

$sql = "update mahasiswa
        set nama = '$nama',
        email = '$email',
        jurusan = '$jurusan'
        where npm = '$npm'";
$hasil = mysqli_query($conn, $sql);

header("Location: index_while.php");
