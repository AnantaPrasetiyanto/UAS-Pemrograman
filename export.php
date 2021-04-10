<?php 
include 'koneksi.php';

require_once __DIR__ . './mpdf_v8.0.3-master/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start(); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Export Pdf</title>
</head>
<body>
	  <div>
	  		<h1 align="center">Data Zakat</h1>
                <table border="1" align="center">
                  <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">zakat</th>
                    <th scope="col">nominal</th>
                    <th scope="col">nama</th>
                    <th scope="col">hp</th>
                    <th scope="col">email</th>
                    <th scope="col">bank</th>
                    <th scope="col">rekening</th>
                  </tr>
                  </thead>
                  <tbody>
                     
	                <?php
						$sql="SELECT * from tbl_zakat";
						$query=mysqli_query($koneksi, $sql) or die(mysqli_error());
					while ($data=mysqli_fetch_array($query)) {
					?>
                     <tr> 
                       <td><?= $data['id']; ?></td>
                       <td><?= $data['zakat'];?></td>
                       <td><?= $data['nominal'];?></td>
                       <td><?= $data['nama'];?></td>
                       <td><?= $data['hp'];?></td>
                       <td><?= $data['email'];?></td>
                       <td><?= $data['bank'];?></td>
                       <td><?= $data['rek'] ?></td>           
                     </tr>
         <?php } ?>
                  </tbody>
                </table>
              </div>
</body>
</html>
<?php
	$html = ob_get_contents(); 
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("laporan_pesanan.pdf" ,'I');
?>