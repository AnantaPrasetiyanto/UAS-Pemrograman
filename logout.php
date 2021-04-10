<!DOCTYPE HTML>
<html>
    <head>
  	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Login</title>
        <style>
		.login {
			padding: 2em;
			margin: 8em auto;
			width: 17em;
			background: #fff;
			border-radius: 3px;
		}	
		h4 {
			font-size: 40px;
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
            h1, h2, h3, h6 {
            font-family: 'Bungee Shade', cursive;
            margin-top: 0px;
        }
        </style>
        <body>
<?php 

	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();
		echo "<center>
		<h1>Anda Telah Keluar Dari Form Ini Silahkan Login Kembali</h1>
		<b>Anda Telah Keluar Dari Form Ini Silahkan Login Kembali<b>
		";
		}
	else{
		echo "Silahkan Login Terlebih Dahulu";
	}
 ?>
<?php header( "refresh:5;url=login.php" );?>
</body>
<script>alert('redirecting to login page in 5 second')</script>
</html>