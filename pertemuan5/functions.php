<?php
    include "config/koneksi.php";

    function ambil_data($query) {
        global $conn;
        $hasil = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($hasil)) {
            $rows[] = $row;
        }

        return $rows;
    }
?>