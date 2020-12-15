<?php
include "koneksi.php";

/* Simpan Data Pasien */
simpanData($_POST['nama'], $_POST['jk'], $_POST['umur'], $_POST['alamat']);

echo "<script>
    window.location = 'konsultasi.php';
</script>";
