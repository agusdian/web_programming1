<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <form method="POST" action="">
        Nama: <input type="text" name="nama_siswa">
        <br/>
        Kelas: <input type="text" name="kelas">
        <br/>
        <input type="submit" value="Simpan">
    </form>
</body>

<?php
    if (isset($_POST["nama_siswa"])) {
        $nama_siswa = $_POST["nama_siswa"];
    } else {
        $nama_siswa = "NULL";
    }
    if (isset($_POST["kelas"])) {
        $kelas = $_POST["kelas"];
    } else {
        $kelas = "NULL";
    }

    echo "$nama_siswa : $kelas";
?>

</html>