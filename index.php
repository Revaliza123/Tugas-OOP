<?php 	
include('koneksi1.php');
$db = new dbh();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
<title>PEMROGRAMAN OOP</title>
<style>
body{
    background-image: url("img/cara-mengganti-wallpaper-laptop-1280x720.webp");
    background-size:cover;
}
</style>
</head>
<body>
	<h2 align="center">MENAMPILKAN DATA DENGAN OOP</h2>
</div>
<table border="1" align=center style="margin-top:100px;">
		<tr>
			<th>NO</th>
			<th>NISN</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>JURUSAN</th>
			<th>AKSI</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $rows){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $rows['NISN']; ?></td>
				<td><?php echo $rows['nama']; ?></td>
				<td><?php echo $rows['kelas']; ?></td>
				<td><?php echo $rows['jurusan']; ?></td>
				<td>
					<a href="edit.php?NISN=<?php echo $rows['NISN']; ?>">EDIT</a>
					<a href="proses.php?action=delete&NISN=<?php echo $rows['NISN']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
  <button style=display:block;margin:auto;><a href="tambah.php">Tambah Data</a></button>
</body>
</html>