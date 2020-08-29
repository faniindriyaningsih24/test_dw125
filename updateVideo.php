<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
    $videoId = $_POST["videoId"];
	$title = $_POST["title"];
	$category = $_POST["categoryId"];
	$xx2 = $_POST["attache"];
	$xx = $_POST["thumbnail"];
 
// update data ke database
// mysqli_query($koneksi,"update video_tb set title='$title', categoryId='$category', attache='$xx2', thumbnail='$xx' where videoId='$videoId'");
		$xx = $rand.'_'.$filename;
		$xx2 = $rand.'_'.$filenameattachment;
		move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'thumbnail/'.$xx);
		move_uploaded_file($_FILES['attache']['tmp_name'], 'attache/'.$xx2);
		mysqli_query($koneksi, "update video_tb set title='$title', categoryId='$category', attache='$xx2', thumbnail='$xx' where videoId='$videoId'");
		echo "<script>alert('berhasil');location.href='index.php?page=video';</script>";


echo "<script>alert('berhasil');location.href='index.php?page=video';</script>";
?>