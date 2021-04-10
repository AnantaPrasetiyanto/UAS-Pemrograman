<!DOCTYPE HTML>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Halaman Data Zakat</title>
        <style>
        body{
            background-image: url(15.png);
            background-size: cover;
        }
        table {
            color: red;
        }
    </style>
</head>
<body style="text-align: center;">

    <div class="container" style="margin-top: 20px;">
        <body>

<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) {
//jika sudah login
//menampilkan isi session

echo "<center>Selamat Datang ". $_SESSION['login'] ."</center><br>";
} else {
//session belum ada artinya belum login
die ("<center><br><br>Anda belum login! Silahkan Login Terlebih Dahulu Untuk Masuk
<br>Silahkan login dahulu <a href='login.php'>klik link di sini</a></center>"); 
}
 ?>
 </body>
</html>