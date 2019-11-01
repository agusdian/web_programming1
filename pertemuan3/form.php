<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulir pendaftaran</title>
</head>
<body>
	<form method="POST" action="tampil_siswa">
		<TABLE>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama_siswa" value=""></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" value=""></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
				<input type="submit" value="simpan">
				<input type="reset" value="batal">
					
				</td>
			</tr>

		</TABLE> 
		
	</form>
</body>
<!-- <?php 
	// if (isset($_POST["nama_siswa"])){
	// 	$nama_siswa = $_POST["nama_siswa"];
	// }else {
	// 	$nama_siswa = "NULL";
	// }
	// if (isset($_POST["kelas"])) {
	// 	$kelas = $_POST["kelas"];
	// }else{
	// 	$kelas = "NULL";
	// }
	// echo "$nama_siswa : $kelas";
?>

</html>