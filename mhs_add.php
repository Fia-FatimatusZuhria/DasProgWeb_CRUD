<!DOCTYPE html>
<html>
<head>
	<title>ADD MAHASISWA</title>
</head>
<body>
<?php include 'menu.php';?>
<br>
		<center><h1>DATA MAHASISWA</h1></center>
<form name="myform" action="mhs_proc.php" method="POST">
		NPM : <input type="text" name="npm" id="npm">
        <br>
        Nama : <input type="text" name="nama" id="nama" size="30">
        <br>
        Alamat : <input type="text" name="alamat" id="alamat" size="50">
		<br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN">
</form>
</body>
</html>