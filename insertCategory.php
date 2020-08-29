
<?php
	include "koneksi.php";
 
	$categoryId = $_POST["categoryId"];
	$category = $_POST["category"];
  
	// query sql
	$sql = "INSERT INTO category_tb (categoryId, category) VALUES('$categoryId','$category')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	if($query){
		echo "<script>alert('Berhasil Add Category');location.href='index.php?page=category';</script>";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
 
?>