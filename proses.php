<html>
<head>
	<link rel="stylesheet" type="text/css" href="form.html">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<h1 width="180" align="cols">Data Anda sudah kami rekam</h1>
	<br>
	<div class="data">
	<td><a href="biodata.text">Lihat validasi data anda</a><td><br>
	<td><a href="tabel.php"> lihat tabel pendaftaran</a><br>
	<td><a href="form.html">Halaman Awal</a></td><br>
    </center>
<div class="proses">
	


<?php
echo "<head><title><>";
$fp=fopen("biodata.text", "a+");
$nama =$_POST['nama'];
$id = $_POST['id'];
$kelamin =$_POST['kelamin'];
$role =$_POST['role'];
$no =$_POST['no'];
$prestasi =$_POST['prestasi'];
fputs($fp,"$nama|$id|$kelamin|$role|$no|$prestasi|\n");
fclose($fp);
?>

</div>	
</body>
</html>
