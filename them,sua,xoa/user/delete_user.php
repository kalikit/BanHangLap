<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete User</title>
	
</head>

<body>
	<?php

		include "../product/connect.php";
		$sql = "delete from infor_user where id_user = '$_GET[id_user]'";
		mysqli_query($ketnoi,$sql);
		header('location:quan_ly_user.php');

    ?>
	
</body>
</html>