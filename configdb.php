<?php 
$host = "localhost";
$user = "root";
$password = "";

$dbname = "db_perpustakaan";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
	die("Koneksi ke MySQL berhasil");
}
?>