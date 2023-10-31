<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $product_code = $_POST['product_code'];
    $category_id = $_POST['category_id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount_amount = $_POST['discount_amount'];
    $stock = $_POST['stock'];
    $totalFiles = count($_FILES['image']['name']);
    // $file_tmp = $_FILES['image']['tmp_name'];
    $fileArray = array();

    for ($i=0; $i < $totalFiles; $i++) { 
        $imageName = $_FILES['image']['name'][$i];
        $file_tmp = $_FILES['image']['tmp_name'][$i];

        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));

        $newImageName = uniqid() . '.' . $imageExtension;

        move_uploaded_file($file_tmp, 'img/' . $newImageName);
        $fileArray[] = $newImageName;
    }

    $fileArray = json_encode($fileArray);

    $sql = mysqli_query($koneksi, "INSERT INTO products 
    (product_code, category_id, product_name, description, price, discount_amount, stock, image) 
    VALUES ('$product_code', '$category_id', '$product_name', '$description', '$price', '$discount_amount', '$stock', '$fileArray')");

    if (mysqli_affected_rows($koneksi)) {
        echo "<script>alert('Data Berhasil Disimpan'); window.location='../pages/crud-product.php'</script>";
    } else {
        echo "Data Gagal Disimpan" . mysqli_connect_error();
    }
}

?>