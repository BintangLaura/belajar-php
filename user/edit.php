<?php

include "../crud/koneksi.php";

if (isset($_POST['simpan'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = mysqli_query($koneksi, "UPDATE customers SET name='$name', phone_number='$phone_number', email='$email', address='$address' WHERE code='$code' ");
    
    
    if (mysqli_affected_rows($koneksi)) {
        echo "<script>alert('Data Berhasil Diubah'); window.location='../user/view-user.php'</script>";
    } else {
        echo "Data Gagal Diubah" .mysqli_connect_error();
    }
}

?>