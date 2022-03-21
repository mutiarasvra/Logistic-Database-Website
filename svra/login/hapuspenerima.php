<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from penerima where kode_penerima='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:penerima.php");
 
?>