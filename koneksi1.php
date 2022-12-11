<?php
class dbh {
 
	var $server = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "datanilai";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->server, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
    function tampil_data(){
		$data = mysqli_query($this->koneksi,"select * from siswa");
		while($rows = mysqli_fetch_array($data)){
			$hasil[] = $rows;
		}
		return $hasil;
	}
 
	function tambah($NISN,$nama,$kelas,$jurusan){
		mysqli_query($this->koneksi,"insert into siswa values ('$NISN','$nama','$kelas','$jurusan')");
	}
	
	function get_by_id($NISN){
		$query = mysqli_query($this->koneksi,"select * from siswa where NISN='$NISN'");
		return $query->fetch_array();
	}
	function update($NISN,$nama,$kelas,$jurusan){
		$query = mysqli_query($this->koneksi,"update siswa set nama='$nama',kelas='$kelas',jurusan='$jurusan' where NISN='$NISN'");

	}
	function delete($NISN){
		$query = mysqli_query($this->koneksi,"delete from siswa where NISN='$NISN'");
	}
}

?> 