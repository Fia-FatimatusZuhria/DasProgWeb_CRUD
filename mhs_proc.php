<?php
include 'host.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if(isset($_POST['submit_add'])){
	$sql = "INSERT INTO mhs
			(npm,nama,alamat) VALUES
			('$npm','$nama','$alamat')";
	if (!$conn->query($sql))
		die('Simpan Data Gagal');
	else{
		header("Location: index.php");
		exit();
	}
}

if(isset($_POST['submit_edit'])){
	$npm_old = $_POST['npm_old'];
	$sql = "UPDATE mhs
			SET npm='$npm', nama='$nama', alamat='$alamat'
			WHERE npm='$npm_old';";
	if (!$conn->query($sql))
		die('Edit Data Gagal'.$sql);
	else{
		header("Location: index.php");
		exit();
	}
}

$id = $_GET['npm'];
if((isset($_POST['submit_delete']))||(isset($id))){
	$sql = "DELETE FROM mhs
			WHERE npm='$npm';";
	if (!$conn->query($sql))
		die('Hapus Data Gagal');
	else{
		header("Location: index.php");
		exit();
	}
}

?>