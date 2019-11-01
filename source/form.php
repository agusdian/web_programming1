<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Registrasi Mahasiswa</title>
</head>
<body>
    <h2>Formulir Pendaftaran</h2>
    <form method="POST" action="proses.php">
    <table>
        <tr>
            <td>No. Pendaftaran</td>
            <td>:</td>
            <td>
                <input type="text" name="no_pendaftaran" value="">
            </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
            <select name="program_studi">
                <option value="" selected="selected">--Pilih Salah Satu--</option>
                <option value="MI">Manajemen Informatika</option>
                <option value="SI">Sistem Informasi</option>
                <option value="TI">Teknik Informatika</option>
                <option value="AK">Akutansi</option>
                <option value="MA">Manajemen Administrasi</option>
                <option value="SK">Sekretaris</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" value=""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                <input type="radio" name="jenis_kelamin" value="Lain-lain">Lain-lain
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" value=""></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date" name="tanggal_lahir" value="">
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <select name="agama">
                <option value="" selected="selected">--Pilih Salah Satu--</option>
                <option value="Islam">Islam</option>
                <option value="Katolik">Katolik</option>
                <option value="Protestan">Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea rows="4" cols="50" name="alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td>No. Telp</td>
            <td>:</td>
            <td>
                <input type="text" name="no_telp" value="">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                <input type="text" name="email_address" value="">
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