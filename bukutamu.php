<!DOCTYPE html>
<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "my_db";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// cek koneksi
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10)  PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI text
    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database" . mysqli_error($conn);
}
mysqli_close($conn);
?>