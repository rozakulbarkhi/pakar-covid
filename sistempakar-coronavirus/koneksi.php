<?php
function koneksi()
{
    $koneksi = mysqli_connect("localhost", "root", "", "db_corona");

    if ($koneksi == false) {
        echo mysqli_error($koneksi);
        echo "koneksi gagal";
    }
    return $koneksi;
}

/* Simpan Data Pasien */
function simpanData($nama, $gender, $umur, $alamat)
{
    $koneksi = koneksi();
    $sql = "insert into tb_pasien values (NULL, '$nama', '$gender', '$umur', '$alamat')";
    mysqli_query($koneksi, $sql);
}
