<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
	
</head>

<body>
	<?php
		include "connect.php";
		$sql = "delete from mat_hang_laptop where id = '$_GET[id]' union delete from pc_van_phong  where id = '$_GET[id]' union delete from camera_quansat
		where id = '$_GET[id]' ";
		mysqli_query($ketnoi,$sql);
		header('location:quan_ly_laptop.php'); 
?> 
</body>
</html>