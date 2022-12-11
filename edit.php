<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAmbah Data</title>
<style>
body{
    background-image: url("img/cara-mengganti-wallpaper-laptop-1280x720.webp");
    background-size:cover;
}
</style>
</head>
<body>
<?php 	
include('koneksi1.php');
$db = new dbh();
$NISN = $_GET['NISN'];
if(! is_null($NISN))
{
	$data = $db->get_by_id($NISN);
}
else
{
	header('location:index.php');
}
?>
<h3 align="center"  style="margin-top:60px;">MENGEDIT DATA<h2>

<form action="proses.php?action=update" method="POST">
<input type="hidden" name="NISN" value="<?php echo $data['NISN']; ?>"/>
<table align="center"  style="margin-top:110px;">
    <tr>
        <td width="150">NISN</td>
        <td><input type="text" name="NISN" value="<?php echo $data['NISN'];?>"></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
    </tr>
    <tr>
        <td>KELAS</td>
        <td><input type="text"name="kelas" value="<?php echo $data['kelas'];?>"></td>
    </tr>
    <tr>
        <td>JURUSAN</td>
        <td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="update"></td>
    </tr>
</table>
</form>
</body>
</html>