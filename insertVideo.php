<?php 
include 'koneksi.php';
	$videoId = $_POST["videoId"];
	$title = $_POST["title"];
	$categoryId = $_POST["categoryId"];
 
$rand = rand();
$ekstensi =  array('jpg','jpeg','mp4');
$filename = $_FILES['thumbnail']['name'];
$filenameattachment = $_FILES['attache']['name'];

$ukuran = $_FILES['thumbnail']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION); 

if(!in_array($ext,$ekstensi) ) {	
	echo "<script>alert('format file tidak sesuai');location.href='index.php?page=addVideo';</script>";
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		$xx2 = $rand.'_'.$filenameattachment;
		move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'thumbnail/'.$xx);
		move_uploaded_file($_FILES['attache']['tmp_name'], 'attache/'.$xx2);
		mysqli_query($koneksi, "INSERT INTO video_tb VALUES('$videoId','$title','$categoryId','$xx2','$xx')");
		echo "<script>alert('berhasil');location.href='index.php?page=video';</script>";
	}else{
		echo "<script>alert('Gagal');location.href='index.php?page=addVideo';</script>";
	}
}