<?php
include 'host.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
<?php include 'menu.php';?>
<table width='100%' border='1'>
	<thead>
		<tr><center><h1>DATA MAHASISWA</h1><center></tr>
		<tr>
			<th width='5%'>No.</th>
			<th width='15%'>NPM</th>
			<th width='25%'>Nama Lengkap</th>
			<th>Alamat</th>
		</tr>
	</thead>
<tbody>
<?php
	$sql = "SELECT * FROM mhs";
	$res = $conn->query($sql);
	if($res->num_rows > 0){
		$i = 0;
		while($dat = $res->fetch_assoc()){
			$i++;
			echo "<tr>
					<td>$i</td>
					<td><a href='mhs_detil.php?npm=".$dat['npm']."'>".
$dat["npm"]."</a></td>
					<td>".$dat["nama"]."</td>
					<td>".$dat["alamat"]."</td>
</tr>";
				}
		}
?>
	</tbody>
</table>

</body>
</html>