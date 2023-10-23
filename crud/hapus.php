<?php

include 'koneksi.php';

$product_code = $_GET['product_code'];

$sql = mysqli_query($koneksi, "DELETE FROM products WHERE product_code='$product_code' ");

if (!$sql) {
    echo "Data Gagal Dihapus" . mysqli_connect_error();
} else {
    echo "<script>alert('Data Berhasil Dihapus'); window.location='../pages/crud-product.php';</script>";
}
?>