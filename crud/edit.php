<?php

include "../crud/koneksi.php";

if (isset($_POST['simpan'])) {
    $product_code = $_POST['product_code'];
    $category_id = $_POST['category_id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount_amount = $_POST['discount_amount'];
    $stock = $_POST['stock'];

    $imagelama = $_POST['imagelama'];

    $image = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];

    //cek foto baru
    if ($image) {
        //ada gambar baru
        //hapus foto lama
        unlink('img/'.$imagelama);

        //simpan foto dan update data
        $sql = mysqli_query($koneksi, "UPDATE products SET category_id='$category_id', description='$description', product_name='$product_name', price='$price', discount_amount='$discount_amount', stock='$stock', image='$image' WHERE product_code='$product_code' ");
        move_uploaded_file($file, "img/".$image);
    } else {
        $sql = mysqli_query($koneksi, "UPDATE products SET category_id='$category_id', description='$description', product_name='$product_name', price='$price', discount_amount='$discount_amount', stock='$stock' WHERE product_code='$product_code' ");
    }
    
    if (mysqli_affected_rows($koneksi)) {
        echo "<script>alert('Data Berhasil Diubah'); window.location='../pages/crud-product.php'</script>";
    } else {
        echo "Data Gagal Diubah" .mysqli_connect_error();
    }
}

?>