<html>
<head>
</head>
<body>
	<center>
	<h1 width="180" align="cols">Data Anda sudah kami rekam</h1>
	<br>
	<td><a href="biodata.text">Lihat validasi data anda</a><td><br>
	<td><a href="form.html">Halaman Awal</a></td>
    </center>
<div>
	


<?php
echo "<head><title><>";
$fp=fopen("biodata.text", "a+");
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$telp =$_POST['telp'];
$kelamin =$_POST['kelamin'];
$agama =$_POST['agama'];
$hobi =$_POST['hobi'];
$prestasi =$_POST['prestasi'];
fputs($fp,"$nama|$alamat|$telp|$kelamin|$agama|$hobi|$prestasi|\n");
fclose($fp);
?>

</div>	
</body>
</html>