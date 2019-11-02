<?php
    include "config/koneksi.php";

    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];

    $sql = "insert into mahasiswa(npm, nama, email, jurusan)
            values('$npm', '$nama', '$email', '$jurusan')";
    $hasil = mysqli_query($conn, $sql);
    
    header("Location: index_while.php");
