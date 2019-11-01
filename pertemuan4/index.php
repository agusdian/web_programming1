<?php 
// koneksi ke database
require 'koneksi.php';

// ambil data dari table mahasiswa/ query data mahasiswa
$hasil = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
// mysqli_fech_row()
// mysqli_fech_assoc()

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);



 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Mahasiswa</title>
</head>
<body>
	

<h1>Data Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>NO.</th>
		<th>Aksi</th>
		<th>NPM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Gambar</th>
	</tr>
	<?php $i = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($hasil)) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>
		<td><?= $row ["npm"]; ?></td>
		<td><?= $row ["nama"]; ?></td>
		<td><?= $row ["email"]; ?></td>
		<td><?= $row ["jurusan"]; ?></td>
		<td><img src="foto/<?= $row ["gambar"] ?>" width="50" height="50"></td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>



</body>
</html>