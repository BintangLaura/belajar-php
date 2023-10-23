<?php

include '../crud/koneksi.php';

$code = $_GET['code'];

$sql = mysqli_query($koneksi, "DELETE FROM customers WHERE code='$code' ");

if (!$sql) {
    echo "Data Gagal Dihapus" . mysqli_connect_error();
} else {
    echo "<script>alert('Data Berhasil Dihapus'); window.location='../user/view-user.php';</script>";
}
?>