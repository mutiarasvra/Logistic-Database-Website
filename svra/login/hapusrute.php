<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from rute where kode_rute='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:rute.php");
 
?>