<?php
include '../crud/koneksi.php';

if (isset($_POST['simpan'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = mysqli_query($koneksi, "INSERT INTO vendors 
    (code, name, phone_number, email, address) 
    VALUES ('$code', '$name', '$phone_number', '$email', '$address')");

    if (mysqli_affected_rows($koneksi)) {
        echo "<script>alert('Data Berhasil Disimpan'); window.location='../vendor/view-vendor.php'</script>";
    } else {
        echo "Data Gagal Disimpan" . mysqli_connect_error();
    }
}

?>