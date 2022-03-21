<?php
 session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>CRUD Petani Kode</title>
    <link rel="icon" href="http://www.petanikode.com/favicon.ico" />
</head>
<body>

<?php
// --- koneksi ke database
$koneksi = mysqli_connect("localhost","root","kopi","pertanian") or die(mysqli_error());
// --- Fungsi Ubah Data (Update)
function ubah($koneksi){
    // ubah data
    if(isset($_POST['btn_ubah'])){
        $id = $_POST['id'];
        $nm_tanaman = $_POST['nm_tanaman'];
        $hasil = $_POST['hasil'];
        $lama = $_POST['lama'];
        $tgl_panen = $_POST['tgl_panen'];
        
        if(!empty($nm_tanaman) && !empty($hasil) && !empty($lama) && !empty($tgl_panen)){
            $perubahan = "nama_tanaman='".$nm_tanaman."',hasil_panen=".$hasil.",lama_tanam=".$lama.",tanggal_panen='".$tgl_panen."'";
            $sql_update = "UPDATE tabel_panen SET ".$perubahan." WHERE id=$id";
            $update = mysqli_query($koneksi, $sql_update);
            if($update && isset($_GET['aksi'])){
                if($_GET['aksi'] == 'update'){
                    header('location: index.php');
                }
            }
        } else {
            $pesan = "Data tidak lengkap!";
        }
    }
    
    // tampilkan form ubah
    if(isset($_GET['id'])){
        ?>
            <a href="index.php"> &laquo; Home</a> | 
            <a href="index.php?aksi=create"> (+) Tambah Data</a>
            <hr>
            
            <form action="" method="POST">
            <fieldset>
                <legend><h2>Ubah data</h2></legend>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
                <label>Nama tanaman <input type="text" name="nm_tanaman" value="<?php echo $_GET['nama'] ?>"/></label> <br>
                <label>Hasil panen <input type="number" name="hasil" value="<?php echo $_GET['hasil'] ?>"/> kg</label><br>
                <label>Lama tanam <input type="number" name="lama" value="<?php echo $_GET['lama'] ?>"/> bulan</label> <br>
                <label>Tanggal panen <input type="date" name="tgl_panen" value="<?php echo $_GET['tanggal'] ?>"/></label> <br>
                <br>
                <label>
                    <input type="submit" name="btn_ubah" value="Simpan Perubahan"/> atau <a href="index.php?aksi=delete&id=<?php echo $_GET['id'] ?>"> (x) Hapus data ini</a>!
                </label>
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
                
            </fieldset>
            </form>
        <?php
    }
    
}
// --- Tutup Fungsi Update
// --- Fungsi Delete
function hapus($koneksi){
    if(isset($_GET['id']) && isset($_GET['aksi'])){
        $id = $_GET['id'];
        $sql_hapus = "DELETE FROM tabel_panen WHERE id=" . $id;
        $hapus = mysqli_query($koneksi, $sql_hapus);
        
        if($hapus){
            if($_GET['aksi'] == 'delete'){
                header('location: index.php');
            }
        }
    }
    
}
// --- Tutup Fungsi Hapus
// ===================================================================
// --- Program Utama
if (isset($_GET['aksi'])){
    switch($_GET['aksi']){
        case "create":
            echo '<a href="index.php"> &laquo; Home</a>';
            tambah($koneksi);
            break;
        case "read":
            tampil_data($koneksi);
            break;
        case "update":
            ubah($koneksi);
            tampil_data($koneksi);
            break;
        case "delete":
            hapus($koneksi);
            break;
        default:
            echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
            tambah($koneksi);
            tampil_data($koneksi);
    }
} else {
    tambah($koneksi);
    tampil_data($koneksi);
}
?>
</body>
</html>