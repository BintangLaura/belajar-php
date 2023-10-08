<?php

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username == "bintang" && $password == "12345") {
		header("location: dashboard.php");
		// echo "<div class='alert alert-success' role='alert'>Login Berhasil</div>";
	} else {
		echo "<script>alert('Maaf Username Atau Password Yang Anda Masukkan Salah!'); window.location='../index.php'</script>";
	}

}
?>