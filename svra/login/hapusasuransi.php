<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from jenis_asuransi where kode_jenis_asuransi='$id'");
header("location:asuransi.php");
?>