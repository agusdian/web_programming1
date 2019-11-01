<?php
include "config/koneksi.php";
$query = 'select * from mahasiswa';
$hasil = mysqli_query($conn, $query) or die(mysql_error($conn));

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row -> mengembalikan array numeric -> $mhs[1], 1 adalah index array
// mysqli_fetch_assoc -> mengembalikan array associative -> $mhs["nim"], nim adalah field
// mysqli_fetch_array -> mengembalikan keduanya (numeric & associative)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Aksi</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Foto</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($hasil)) : ?>
                <tr>
                    <td>
                        <a href="">Ubah</a> | <a href="">Hapus</a>
                    </td>
                    <td><?php echo $row["npm"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["jurusan"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><img src="img/<?php echo $row["gambar"]; ?>" alt="Foto" width="50" height="50"></td>
                </tr>
            <?php endwhile; ?>
        </table>
</body>

</html>