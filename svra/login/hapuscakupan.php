<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi,"delete from jenis_cakupan where kode_jenis_cakupan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:cakupan.php");
 
?>