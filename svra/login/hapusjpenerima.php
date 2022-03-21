<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from jenis_penerima where kode_jenis_penerima='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:jenispenerima.php");
 
?>