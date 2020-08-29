<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$categoryId = $_POST["categoryId"];
$category = $_POST["category"];
 
// update data ke database
mysqli_query($koneksi,"update category_tb set category='$category' where categoryId='$categoryId'");
 

echo "<script>alert('Berhasil Edit Category');location.href='index.php?page=category';</script>";
 
?>