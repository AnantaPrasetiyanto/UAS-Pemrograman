<?php include 'koneksi.php'; ?>
<?php include 'proses1.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Data Pembayaran Zakat</title>
	    <link rel="stylesheet" href="style.css">
	<style type="text/css">
		blockquote {
				font: 2em/1em 'Open Sans', sans-serif;
				-webkit-text-stroke: 1px black;
				text-shadow: 2px 2px #000;
				margin: 20px 0 15px 0;
				color: #fff;
		}
		*{
  				margin: 0;
  				padding: 0;
  				box-sizing: border-box;
  				outline: none;
				font-family: 'Josefin Sans', sans-serif;
			}


		#container { 
				width:500px; 
				margin:50px auto; 
				border:0px solid #555; 
				box-shadow:0px 0px 2px #555; 
			}

		input[type="text"]{}
		input[type="text"], input[type=date], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; width:450px;}
		input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }

		  h1 {
		    text-align: center;
		    margin-top: 50px;
			padding: 20px;
		  }
		  form {  
		    background-color: #1E90FF;
		    padding: 25px;
		    border-radius: 10px;
			background-color: beige;
		  }
		

		</style>
</head>
<body>

<div id="container" >
<center><blockquote>Input Data Pembayaran Zakat</blockquote></center>
		
		<form action="proses.php" method="post">
			<p>
			    <b>Zakat :</b><br>
				<form action="" method="POST">
					<select name="zakat" class="form-select">
				<option>--Jenis Zakat--</option>
				<option value="Penghasilan">Zakat Penghasilan</option>
				<option value="Maal">Zakat Maal</option>
				<option value="Fitrah">Zakat Fitrah</option>
			</select>
			</p>
			<p>
				<b>Nominal :</b><br>
				<input type="text" name="nominal"/>
			</p>
			<p>
				<b>Nama Lengkap :</b><br>
				<input type="text" name="nama"/>
			</p>

			<p>
				<b>Nomor HP :</b><br>
				<input type="text" name="hp"/>
			</p>
			<p>
				<b>Email :</b><br>
				<input type="text" name="email"/>
			</p>
			<p>
				<b>Nama Bank :</b><br>
				<input type="text" name="bank"/>
			</p>
			<p>
				<b>Nomor Rekening :</b><br>
				<input type="text" name="rek"/>
			</p>
			<p>
				<input type="submit" name="submit" value="Add" class="tombol"/> 
			   	<input type="reset" name="batal" value="Reset" class="tombol"/>
			</p>
		</form>
	</div>
</body>

</html>