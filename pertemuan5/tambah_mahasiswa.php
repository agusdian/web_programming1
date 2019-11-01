<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="POST" action="simpan_mahasiswa.php">
        <table>
            <tr>
                <td>Npm</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" value="">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_mhs" value="">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <input type="text" name="jurusan" value="">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="text" name="email_mhs" value="">
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>
                    <input type="submit" value="Simpan">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>