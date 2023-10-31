<?php
include '../crud/koneksi.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location:../index.php");
    die();
}

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($koneksi, "SELECT name FROM users WHERE name = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['name'];
?>