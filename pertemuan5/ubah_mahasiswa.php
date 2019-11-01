<?php
include "config/koneksi.php";
$npm_asal = $_GET["id"];

$sql = "select * from mahasiswa where npm = '$npm_asal'";
$hasil = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Mahasiswa</title>
</head>

<body>
    <h2>Ubah Mahasiswa</h2>
    <form method="POST" action="edit_mahasiswa.php">
        <table>
            <tr>
                <td>Npm</td>
                <td>:</td>
                <td>
                    <input type="text" name="npm" value="<?php echo $result["npm"]; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_mhs" value="<?php echo $result["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <input type="text" name="jurusan" value="<?php echo $result["jurusan"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="text" name="email_mhs" value="<?php echo $result["email"]; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>
                    <input type="submit" value="Simpan">
                    <input type="reset" value="Batal">
                    <input type="hidden" value="<?php echo $npm_asal; ?>" name="npm_asal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>