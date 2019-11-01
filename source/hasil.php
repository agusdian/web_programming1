<?php
    $no_pendaftaran = $_POST["no_pendaftaran"];
    $program_studi = $_POST["program_studi"];
    $nama_siswa = $_POST["nama_siswa"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $no_telp = $_POST["no_telp"];
    $email_address = $_POST["email_address"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data</h2>

    <table>
        <tr>
            <td>No. Pendaftaran</td>
            <td>:</td>
            <td> <?php echo $no_pendaftaran?> </td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td> <?php echo $program_studi?> </td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><?php echo $nama_siswa?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jenis_kelamin?></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $tempat_lahir?></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $tanggal_lahir?></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo nl2br($alamat)?></td>
        </tr>

        <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><?php echo $no_telp?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $email_address?></td>
        </tr>
    
    </table>

</body>
</html>