<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from paket_barang where kode_paket_barang='$id'");
header("location:paket.php");
?>