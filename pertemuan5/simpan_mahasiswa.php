<?php
    include "config/koneksi.php";

    $nim = $_POST["nim"];
    $nama = $_POST["nama_mhs"];
    $email = $_POST["email_mhs"];
    $jurusan = $_POST["jurusan"];

    $sql = "insert into mahasiswa(nim, nama, email, jurusan)
            values('$nim', '$nama', '$email', '$jurusan')";
    $hasil = mysqli_query($conn, $sql);
    
    header("Location: index_while.php");
?>