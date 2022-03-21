<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from status_pengiriman where kode_status='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:status.php");
 
?>