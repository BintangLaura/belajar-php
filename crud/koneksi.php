<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pos_shop";

$koneksi = mysqli_connect($hostname, $username, $password, $database);
if (!$koneksi) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}
// echo "<h1>Koneksi Berhasil</h1>";

?>