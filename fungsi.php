<?php 
include('koneksi1.php');
$koneksi = new dbh();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah($_POST['NISN'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
	header('location:index.php');
}
elseif($action=="update")
{
	$koneksi->update($_POST['NISN'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
	header('location:index.php');
}
elseif($action=="delete")
{
	$NISN = $_GET['NISN'];
	$koneksi->delete($NISN);
	header('location:index.php');
}
?>