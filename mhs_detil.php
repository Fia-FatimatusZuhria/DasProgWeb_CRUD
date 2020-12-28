<?php
include 'host.php';

$npm = $_GET['npm'];
$sql = "SELECT * FROM mhs WHERE npm = '$npm'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		a:hover{background-color: #1A39F3; color: white;}
		div h3 a:hover{background-color: #FF0000; color: white;}
	</style>
</head>
<body>
<?php include 'menu.php';?>

	<div align="center">
		<h2 align="center">DATA MAHASISWA</h2>
	</div>
	<br>
	<form action="mhs_proc.php" name="myform" method="post">
		<table align="center">
			<tr>
				<td>NPM</td>
				<td>
					<input type="text" name="npm" id="npm" size="20" value="<?= $row['npm']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" id="nama" size="20" value="<?= $row['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" id="alamat" size="20" value="<?= $row['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit_edit" id="submit_edit" value="Simpan">
					<input type="hidden" name="npm_old" id="npm_old" value="<?= $row['npm']; ?>">
					<input type="submit" name="submit_delete" id="submit_delete" value="Hapus">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>