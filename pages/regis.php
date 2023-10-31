<?php
include '../crud/koneksi.php';

if (isset($_POST['regis'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $group_id = $_POST['group_id'];

    $sql = mysqli_query($koneksi, "INSERT INTO users (name, username, email, phone_number, password, group_id) 
    VALUES ('$name', '$username', '$email', '$phone_number', '$password', '$group_id')");

    if (mysqli_affected_rows($koneksi)) {
        echo "<script>alert('Data Berhasil Disimpan'); window.location='../index.php'</script>";
    } else {
        echo "Data Gagal Disimpan" . mysqli_connect_error();
    }
}
?>