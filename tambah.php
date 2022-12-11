<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    background-image: url("img/cara-mengganti-wallpaper-laptop-1280x720.webp");
    background-size:cover;
}
</style>
</head>
<body>
<h2 align="center" style="margin-top:60px;">TAMBAH DATA </h2>
<form action="proses.php?action=add" method="POST">
<table align="center" style="margin-top:110px;">
    <tr>
        <td width="130">NISN</td>
        <td>:</td>
        <td><input type="text" name="NISN"></td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>KELAS</td>
        <td>:</td>
        <td><input type="text"name="kelas"></td>
    </tr>
    <tr>
        <td>JURUSAN</td>
        <td>:</td>
        <td><input type="text" name="jurusan"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>
</body>
</html>