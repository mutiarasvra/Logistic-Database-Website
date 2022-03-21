<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SVRA EXPRESS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="../login/home.php">SVRA EXPRESS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="../login/home.php" class="nav-link">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/IMG_20171223_184709_251.jpg');" data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">PENGIRIMAN </h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <br> <br>

  <?php  
							 $db_host = "localhost";$db_user = "root";$db_pass = "";$db_name = "ekspedisi_pengiriman_barang";
							 $koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
							  ?>
 <div class="chit-chat-layer4">
	<div class="col-md-10 chit-chat-layer4">
               <div class="work-progres">
                                				  
					  <form method = "POST" enctype = "multipart/form-data">
							<br>
							<div class = "form group">
							<label for = "kode_penerima"> Kode Penerima </label>
								<input type = "text" class = "form-control" name = "kode_penerima">
							</div>
							<div class = "form group">
							<label for = "nama"> Nama Penerima </label>
								<input type = "text" class = "form-control" name = "nama">
							</div>
							<div class = "form group">
								<label for = "alamat_penerima"> Alamat Penerima </label>
								<input type = "text" class = "form-control" name = "alamat_penerima">
							</div> <br>
							<div class = "form group">
								<label for = "paket_barang"> Jenis Penerima </label>
								<select name="kode_jenis_penerima" id="kode_jenis_penerima" class="form-control">
								<option value="">-- Pilih Jenis Penerima -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_penerima ") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_penerima']?>"> <?php echo $po['nama_jenis_penerima'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>	
							<div class = "form group">
								<label for = "kota_B"> Kota Tujuan </label>
								<select name="kota_B" id="kota_B" class="form-control">
								<option value="">-- Pilih Kota Tujuan -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kabkota") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kabkota']?>"> <?php echo $po['kabkota'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>	
							<div class = "form group">
								<label for = "kode_kel"> Kelurahan Tujuan </label>
								<select name="kode_kel" id="kode_kel" class="form-control">
								<option value="">-- Pilih Kelurahan -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kelurahan") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kel']?>"> <?php echo $po['kelurahan'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>							
							<div class = "form group">
								<label for = "nama_pengirim"> Nama Pengirim </label>
								<input type = "text" class = "form-control" name = "nama_pengirim">
							</div>	
							<div class = "form group">
								<label for = "alamat_pengirim"> Alamat Pengirim </label>
								<input type = "text" class = "form-control" name = "alamat_pengirim">
							</div>
							<br>
							<div class = "form group">
								<label for = "kabkota"> Kota Pengirim </label>
								<select name="kabkota" id="kabkota" class="form-control">
								<option value="">-- Pilih Kota Pengirim -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from kabkota") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_kabkota']?>"> <?php echo $po['kabkota'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>								
							<div class = "form group">
								<label for = "paket_barang"> Paket Barang </label>
								<select name="kode_paket_barang" id="kode_paket_barang" class="form-control">
								<option value="">-- Pilih Paket Barang -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from paket_barang ") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_paket_barang']?>"> <?php echo $po['nama_jenis_paket'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
								<label for = "deskripsi"> Deskripsi Barang </label>
								<input type = "text" class = "form-control" name = "deskripsi">
							</div>
							<div class = "form group">
								<label for = "tanggal_pengiriman"> Tanggal Pengiriman </label>
								<input type = "date" class = "form-control" name = "tanggal_pengiriman">
							</div>
							<div class = "form group">
								<label for = "tanggal_sampai"> Tanggal Sampai </label>
								<input type = "date" class = "form-control" name = "tanggal_sampai">
							</div>
							<br>
							<div class = "form group">
							<label for = "jenis_pengiriman"> Jenis Pengiriman </label>
								<select name="kode_jenis_pengiriman" id="kode_jenis_pengiriman" class="form-control">
								<option value="">-- Pilih Jenis Pengiriman -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_pengiriman") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_pengiriman']?>"><?php echo $po['nama_jenis_pengiriman'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div> <br>							
							<div class = "form group">
							<label for = "jenis_asuransi"> Jenis Asuransi </label>
								<select name="kode_jenis_asuransi" id="kode_jenis_asuransi" class="form-control">
								<option value="">-- Pilih Jenis Asuransi -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_asuransi") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_asuransi']?>"><?php echo $po['nama_jenis_asuransi'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
								<label for = "jenis_packaging"> Jenis Packaging </label>							
								<select name="kode_jenis_packaging" id="kode_jenis_packaging" class="form-control">
								<option value="">-- Pilih Jenis Packaging -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_packaging") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_packaging']?>"><?php echo $po['nama_jenis_packaging'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
							<label for = "jenis_dimensi"> Jenis Dimensi </label>							
								<select name="kode_jenis_dimensi" id="kode_jenis_dimensi" class="form-control">
								<option value="">-- Pilih Jenis Dimensi -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from jenis_dimensi") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_jenis_dimensi']?>"><?php echo $po['nama_jenis_dimensi'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div>
							<br>
							<div class = "form group">
							<label for = "kode_status"> Status Pengiriman </label>
								<select name="kode_status" id="kode_status" class="form-control">
								<option value="">-- Pilih Status Pengiriman -- </option>
								<?php 
								include 'config.php';
								$lo= mysqli_query ($koneksi, "SELECT * from status_pengiriman") or die (mysqli_error($koneksi));
								$po= mysqli_fetch_array ($lo);
								 ?>
								 <?php do{ ?>
								 <option value="<?php echo $po['kode_status']?>"><?php echo $po['nama_status'] ?></option>
								 <?php }while ($po= mysqli_fetch_array ($lo));?>
								</select>
							</div><br>
							<button class = "btn btn-primary" name = "save" > SUBMIT </button>
							<br><br><br>
					  </form>
					  <?php
				$db_host = "localhost"; $db_user = "root"; $db_pass = ""; $db_name = "ekspedisi_pengiriman_barang";
				if (isset ($_POST ['save'])) {
					$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
					$noresi = md5(uniqid(rand(), true));
					$kode = $_POST ['no_resi'];
					$kode1  = $_POST ['nama_pengirim'];
					$kodee = $_POST ['alamat_pengirim'];
					$kode2  = $_POST ['tanggal_pengiriman'];
					$kode3  = $_POST ['tanggal_sampai'];
					$kode4  = $_POST ['kode_penerima'];
					$koden  = $_POST ['nama'];
					$kodea  = $_POST ['alamat_penerima'];
					$kodejp  = $_POST ['kode_jenis_penerima'];
					$kodek  = $_POST ['kode_kel'];
					$kode5  = $_POST ['kode_paket_barang'];
					$koded  = $_POST ['deskripsi'];
					$kode6  = $_POST ['kode_jenis_packaging'];
					$kode7  = $_POST ['kode_jenis_pengiriman'];	
                    $kode8  = $_POST ['kode_jenis_asuransi']; 
                    $kode10  = $_POST ['kode_jenis_dimensi'];
					$kodes = $_POST ['kode_status'];
					$k1 = $_POST ['kabkota'];
					$k2 = $_POST ['kota_B'];
					$ambila = mysqli_query($koneksi, "SELECT * from rute where kode_kabkota='$k1' AND kota_B = '$k2'") ;
					$isia = mysqli_fetch_array ($ambila);
					$ya = $isia ['kode_jenis_tarif_cakupan'];
					$simpan1 = mysqli_query ($koneksi, "INSERT INTO penerima (kode_penerima, 
					kode_jenis_penerima, kode_kel, nama, alamat_lengkap) VALUES 
					('$kode4', '$kodejp', '$kodek' ,'$koden','$kodea' )");
					$simpan2 = mysqli_query ($koneksi, "UPDATE paket_barang SET deskripsi = '$koded' where kode_paket_barang = '$kode5'");
					$simpan = mysqli_query ($koneksi, "INSERT INTO resi (no_resi, nama_pengirim, alamat_pengirim, tanggal_pengiriman, 
					tanggal_sampai, kode_penerima, kode_paket_barang, kode_jenis_packaging, kode_jenis_pengiriman, kode_jenis_asuransi,
					kode_jenis_tarif_cakupan, kode_jenis_dimensi, kode_status)
					VALUES ('$noresi','$kode1', '$kodee','$kode2','$kode3','$kode4','$kode5','$kode6',
					'$kode7','$kode8','$ya','$kode10','$kodes')");
					?>
							
						<?php  
							 $db_host = "localhost";$db_user = "root";$db_pass = "";$db_name = "ekspedisi_pengiriman_barang";
							 $koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name);
							  $ambil = mysqli_query ($koneksi, "SELECT * from resi ");							  
							  $ambil1 = mysqli_query($koneksi, "SELECT * from resi, 
							  penerima where penerima.kode_penerima=resi.kode_penerima ") ;
							  $ambil2 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_pengiriman where jenis_pengiriman.kode_jenis_pengiriman=resi.kode_jenis_pengiriman ") ;
							  $ambil3 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_asuransi where jenis_asuransi.kode_jenis_asuransi=resi.kode_jenis_asuransi ") ;
							  $ambil4 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_packaging where jenis_packaging.kode_jenis_packaging=resi.kode_jenis_packaging ") ;
							  $ambil5 = mysqli_query($koneksi, "SELECT * from resi, 
							  jenis_dimensi where jenis_dimensi.kode_jenis_dimensi=resi.kode_jenis_dimensi ") ;
							  $ambil6 = mysqli_query($koneksi, "SELECT * from resi, 
							  paket_barang where paket_barang.kode_paket_barang=resi.kode_paket_barang ") ;
							  $ambil7 = mysqli_query($koneksi, "SELECT *from resi,
							  jenis_tarif_cakupan where jenis_tarif_cakupan.kode_jenis_tarif_cakupan = resi.kode_jenis_tarif_cakupan");
							  $ambil8 = mysqli_query($koneksi, "SELECT * from resi, 
							  status_pengiriman where status_pengiriman.kode_status=resi.kode_status ") ;
								while ($isi = mysqli_fetch_array($ambil))
							  { 
							  $isi1 = mysqli_fetch_array($ambil1);
							  $isi2 = mysqli_fetch_array($ambil2);
							  $isi3 = mysqli_fetch_array($ambil3);
							  $isi4 = mysqli_fetch_array($ambil4);
							  $isi5 = mysqli_fetch_array($ambil5);
							  $isi6 = mysqli_fetch_array($ambil6);
							  $isi7 = mysqli_fetch_array($ambil7);
							  $isi8 = mysqli_fetch_array($ambil8);
							  $isitb = $isi2 ['tarif'] + $isi3 ['tarif'] + $isi4 ['tarif'] + $isi5 ['tarif'] + $isi7 ['tarif'];
							  $simpan = mysqli_query ($koneksi, "UPDATE resi set total_biaya='$isitb'");} 
							  $new = mysqli_query ($koneksi, "SELECT *from jenis_asuransi where kode_jenis_asuransi = '$kode8'");
							  $in = mysqli_fetch_array ($new);
							  $neww = mysqli_query ($koneksi, "SELECT *from jenis_pengiriman where kode_jenis_pengiriman = '$kode7'");
							  $inn = mysqli_fetch_array ($neww);
							  $neh = mysqli_query ($koneksi, "SELECT *from jenis_packaging where kode_jenis_packaging = '$kode6'");
							  $ih = mysqli_fetch_array ($neh);
							  $baw = mysqli_query ($koneksi, "SELECT *from kabkota where kode_kabkota = '$k1'");
							  $wk = mysqli_fetch_array ($baw);
							  $baww = mysqli_query ($koneksi, "SELECT *from kabkota where kode_kabkota = '$k2'");
							  $wkk = mysqli_fetch_array ($baww);


							  ?>
							   <br><br><br>
							   <h3> RESI </h3><br>
					<table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>No. Resi       : </th>
									  <th> <?php echo $noresi;?> </th>
                                  </tr>
                              </thead>
									<tbody>
									<tr>
									  <td>Nama Pengirim                : </td>
									  <td><?php echo $kode1;?></td>		</tr>	
									 <tr> <td>Kota Asal                    : </td>
									  <td><?php echo $wk ['kabkota'];?></td>	</tr>		
									  <tr><td>Nama Penerima                : </td>
									  <td><?php echo $koden;?></td>		</tr>	
									  <tr><td>Kota Tujuan                  : </td>
									  <td><?php echo $wkk['kabkota'];?></td>		</tr>	
									  <tr><td>Tanggal Pengiriman           : </td>
									  <td><?php echo $kode2;?></td>		</tr>	
									  <tr><td>Tanggal Sampai (perkiraan)   : </td>
									  <td><?php echo $kode3;?></td>		</tr>	
									  <tr><td>Jenis Pengiriman             : </td>
									  <td><?php echo $inn ['nama_jenis_pengiriman'];?></td>			</tr>
									  <tr><td>Jenis Asuransi               : </td>
									  <td><?php echo $in ['nama_jenis_asuransi'];?></td>		</tr>	
									  <tr><td>Jenis Packaging              : </td>
									  <td><?php echo $ih ['nama_jenis_packaging'];?></td>		</tr>	
									
								</table>
							   <center><?php echo "TOTAL BIAYA : "?> <?php echo $isitb;?></center>
							   <br>
							 
							    <center> <a href = "../login/resi.php" class = "btn btn-primary"> SIMPAN </a></center><br>
								<center> <a href = "../login/home.php" class = "btn btn-primary"> KEMBALI </a></center>
					<br>
					<br>   
					<br>
							   
				<?php }?>
				
					 
</div>
</div>
</div>
  
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>