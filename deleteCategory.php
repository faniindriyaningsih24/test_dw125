<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$categoryId = $_GET['categoryId'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from category_tb where categoryId='$categoryId'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Berhasil Hapus Category');location.href='index.php?page=category';</script>";
 
?>