<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="form.html">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="badan">
		<h1 align="center">Peserta pendaftar Tim mobile legend</h1>
		<table width="100%" style="border-collapse:collapse;" border="1">
			<tr>
				<th>Nama Lengkap</th>
				<th>Nick & Id akun</th>
				<th>Jenis kelamin</th>
				<th>Role/user</th>
				<th>Alamat lengkap & no.telp</th>
				<th>Prestasi yang pernah diraih</th>
			</tr>
			<?php 
				echo "<head><title>Pendaftaran Tim esport mobile legend</head></title>";
				$fp = fopen("biodata.text", "r");
			?>
			<?php while ($isi = fgets($fp,100)) 
			{
				$pisah = explode ("|", $isi);
				?>
				<tr>
					<th><?php echo"$pisah[0]"; ?></th>
					<th><?php echo"$pisah[1]"; ?></th>
					<th><?php echo"$pisah[2]"; ?></th>
					<th><?php echo"$pisah[3]"; ?></th>
					<th><?php echo"$pisah[4]"; ?></th>
					<th><?php echo"$pisah[5]"; ?></th>
				</tr>
			<?php } ?>
		</table>
    <br>
    <br>
		<button class="tombol"><a align="center" href="form.html">Kembali Ke Menu Awal</a>
	</div>
</body>
</html>

</body>
</html>
