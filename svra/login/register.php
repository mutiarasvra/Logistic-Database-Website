<?php
session_start();
if($_SESSION){
	header("Location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SVRA EXPRESS</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
				<?php
				if(isset($_POST['login'])){
					include("config.php");
					
					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$level		= $_POST['level'];
					
					$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
						
						if($level == 1 && $username == '01' && $password == '12'){
							$_SESSION['username']=$username;
							$_SESSION['password']=$password;
							$_SESSION['level']='admin';
							header("Location: user.php");
						}else if($level == 2&& $username == '02' && $password == '12'){
							$_SESSION['username']=$username;
							$_SESSION['password']=$password;
							$_SESSION['level']='operator';
							header("Location: user.php");
						}else{
							echo '<div class="alert alert-danger">Ups! Login gagal.</div>';
						}
					}
				?>
					<div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>SVRA EXPRESS</strong> </h1>
                            <div class="description">
                            	<p>
	                            	Send Everything You Want~
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<b><h3>Register and create account</h3></b>
									<p> Enter your data to create account : </p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                   					  <form method = "POST" enctype = "multipart/form-data">
							<div class = "form group">
								<label for = "nama"> Nama </label>
								<input type = "text" class = "form-control" name = "nama">
							</div>
							<div class = "form group">
								<label for = "username"> Username </label>
								<input type = "text" class = "form-control" name = "username">
							</div>
							<div class = "form group">
								<label for = "email"> Email </label>
								<input type = "text" class = "form-control" name = "email">
							</div>
							<div class="form-group">
								<label for = "password"> Password </label>
			                       <label class="sr-only" for="form-password">Password</label>
									<input type="password" name="password" class="form-password form-control" id="form-password">
			                        </div>
									<div class="form-group">
										<select name="level" class="form-control" required>
											<option value="">Pilih Level User</option>
											<option value="1">Admin</option>
										</select>
									</div>
							<br>
							<button class = "btn btn-primary" name = "save" > Daftar </button>
					  </form>
								<?php
								
				$db_host = "localhost"; $db_user = "root"; $db_pass = ""; $db_name = "ekspedisi_pengiriman_barang";
									if (isset ($_POST ['save'])) {
										$koneksi= mysqli_connect( $db_host, $db_user, $db_pass, $db_name); 
										$email = $_POST ['email'];
										$nama = $_POST ['nama'];
										$username = $_POST ['username'];
										$password = $_POST ['password'];
										$level = $_POST ['level'];
										$simpan = mysqli_query ($koneksi, "INSERT INTO user VALUES ('$username','$password', '$nama','$email', '$level')");
										echo "<br> <div class = 'alert alert-success text-center'> Anda berhasil daftar! </div>";
										echo "<meta http-equiv= 'refresh' content ='1;url=index.php'>";
										}
								?>
		                    </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>