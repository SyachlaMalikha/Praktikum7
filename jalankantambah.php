<?php
include("konek.php");
//tambahdata
if (isset($_POST['daftar'])) {

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$kodejbtn = $_POST['kodejbtn'];
$status = $_POST['status'];
$kodedpt = $_POST['kodedpt'];

//query insert
$sql = "INSERT INTO pegawai
(nip,nama,kode_jabatan,status, kode_department,) VALUE
('$nip','$nama','$kodedpt','$status','$kodejbtn')";
$query = mysqli_query($conn,$sql);
//cek query
if( $query ) {
header('Location: index.php?status=sukses');
} else {
header('Location: index.php?status=gagal');
}
} else {
die("Tombol Submit belum diklik");
}
?>