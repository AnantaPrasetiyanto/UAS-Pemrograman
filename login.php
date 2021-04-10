<!DOCTYPE HTML>
<html>
    <head>
        <title>Laporan Pembayaran Zakat</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style>
            .container{
                background: #afc3a8;
                width:90%;
                margin:auto;
                max-width:525px;
                min-height:550px;
                position:relative;
                box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
            }
            .input{
                border-radius: 30px; 
                 
                margin: 20px auto;
                background-color: white;
            }
            .group{
              
                padding: 10px;
                position: relative;
            }
            h4 {
			font-size: 40px;
			font-family: ;
			margin-bottom: 20px;
			margin-top: 10px;
            }
                h1, h2, h3, h6 {
                font-family: ;
                margin-top: 0px;
            }
            .login {
                padding: 70px 40px;
                margin:  auto;
                width:calc(100% - 20px);
                margin-bottom: 15px;
                border: none;
                
            }				
            input[type="password"],
            input[type="text"],
            input[type="email"],
            textarea {
            padding: 10px;
            width: 90%;
            background: white;
            border: 30px;
            font-size: 10pt;
            margin: 6px 0px;
            }
            h4 {
                font-size: 40px;
                font-family: ;
                margin-bottom: 20px;
                margin-top: 10px;
            }
            .btn {
                border-radius: 30px;
                padding: 10px;
                width:calc(50% - 20px);
                margin: 20px auto;
                border: none;
                background-color:white;
                font-size: 18px;
                color: afc3a8;
                box-shadow:5 5px 5px 5 rgba(0,0,0,.24);
            
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 mx-auto">
            
                <div class="login">
                <center><h4>Login</h4></center>
            <form method="post">
                <input type="text" name="user" placeholder="pengguna"><br>
                <input type="password" name="pass" placeholder="password"><br>
                <input class="btn" type="submit" name="login" id="partyTimeButton" value="Login">
                
            </form>
        </div>      
                
        <?php 
            session_start();
            if (isset($_POST['login'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
            if ($user === "Kelompok4" && $pass == "1234") {
                $_SESSION['login'] = $user;
                echo "<script>alert('Anda Berhasil Login')</script>";
                echo "<center><br><br>Silahkan Klik Link Dibawah ini untuk Melanjutkan <p><a href='index.php'><b>Form Data Pembayaran Zakat</b></center></p>";
                }else {
            
                }
            }
        ?>
        
    </body>
</html>