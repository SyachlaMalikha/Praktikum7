<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_pegawai";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// cek koneksi
if (!$conn) {
    die("Gagal Terhubung dengan database
    ".$dbname.mysqli_connect_error());
}else {
    echo "Database : ".$dbname." : Berhasil Terhubung";
}