<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="”viewport”" content="”width"="device-width," initial-scale="1.0″" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<title>Insert</title>
	<style>
		h3 {
			text-align: center;
			margin: 40px auto;
			border: 1px solid #545454;
			border-radius: 3px;
			padding: 15px 20px;
			max-width: 500px;
			text-transform: uppercase;
			background: orange;
		}

		.table {
			border: 1px dashed #545454;
			border-radius: 10px;
			width: 500px;
			padding: 20px;
			margin: auto;
		}

		.fa-user {
			border: 1px solid black;
			border-radius: 50%;
			padding: 10px;
		}

		.collapse input[type="search"] {
			width: 500px;
		}

		.asideleft {
			background-color: #BFCAE6;
			max-height: 300px;
		}

		.navbar {
			margin-left: 20px;
		}
	</style>
</head>

<body>
	<?php
	include("../product/connect.php");
	$sql = "select * from infor_user";
	$result = mysqli_query($ketnoi, $sql);
	?>
	<?php include("content_user.php"); ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<i class="fas fa-user"></i>&nbsp; Xin chào Admin !
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

			<form class="form-inline my-2 my-lg-0" action="../user/search_user.php" method="get">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm</button>
			</form>
			<a class="navbar" href="#">
				<i class="fa fa-sign-out-alt"></i>&nbsp; Đăng xuất
			</a>
		</div>

	</nav>
	<?php
	$err_id = $err_tenuser = $err_email = $err_sdt = $err_pass = $err_sex = $err_birth = $err_add = $err_location = "";
	if (isset($_POST["them_user"])) {
		$id = mysqli_escape_string($ketnoi, $_POST['id']);
		$tenuser = mysqli_escape_string($ketnoi, $_POST['name']);
		$email = mysqli_escape_string($ketnoi, $_POST['email']);
		$sdt = mysqli_escape_string($ketnoi, $_POST['sdt']);
		$pass = mysqli_escape_string($ketnoi, $_POST['pass']);
		$sex = mysqli_escape_string($ketnoi, $_POST['sex']);
		$birth = mysqli_escape_string($ketnoi, $_POST['birth']);
		$add = mysqli_escape_string($ketnoi, $_POST['add']);
		$location = mysqli_escape_string($ketnoi, $_POST['location']);
		if ($tenuser == "") {
			$err_tenuser = "Không để tên user trống!<br>";
		}
		if ($id == "") {
			$err_id = "Không để id trống!<br>";
		}
		if ($email == "") {
			$err_email = "Không để email trống!<br>";
		}
		if ($sdt == "") {
			$err_sdt = "Không để số điện thoại trống!<br> ";
		}
		if ($pass == "") {
			$err_pass = "Không để mật khẩu trống!<br>";
		}

		if ($birth == "") {
			$err_birth = "Không để ngày sinh trống!<br>";
		}
		if ($add == "") {
			$err_add = "Không để địa chỉ trống!<br>";
		}
		if ($location == "") {
			$err_location = "Không để vị trí trống!<br>";
		}
		if ($tenuser != "" && $id != "" && $email != "" && $sdt != "" && $pass != "" && $sex != "" && $birth != "" && $add != "" && $location != "") {
			$sql = "insert into infor_user(id_user,ho_ten,email,so_dt,mat_khau,gioi_tinh,ngay_sinh,dia_chi,tinh_tp) values('$id','$tenuser','$email','$sdt','$pass','$sex','$birth','$add','$location')";
			mysqli_query($ketnoi, $sql);
			header('location:quan_ly_user.php');
		}
	}

	?>
	<h3>thêm thông tin user</h3>
	<div class="table">
		<form action="" method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td>ID</td>
					<td><input type="text" name="id"> </td>
					<span><?php echo $err_id; ?> </span>
				</tr>
				<tr>
					<td>Họ tên</td>
					<td><input type="text" name="name"></input> </td>
					<span><?php echo $err_tenuser; ?> </span>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"> </td>
					<span><?php echo $err_email; ?> </span>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input type="text" name="sdt"> </td>
					<span><?php echo $err_sdt; ?> </span>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="pass"> </td>
					<span><?php echo $err_pass; ?> </span>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>
						Nam<input type="radio" name="sex" checked="checked">
						Nữ<input type="radio" name="sex">
					</td>
					<span><?php echo $err_sex; ?> </span>
				</tr>
				<tr>
					<td>Ngày sinh</td>
					<td><input type="date" name="birth"></td>
					<span><?php echo $err_birth; ?> </span>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="add"></td>
					<span><?php echo $err_add; ?> </span>
				</tr>
				<tr>
					<td>Tỉnh, TP</td>
					<td><input type="text" name="location"></td>
					<span><?php echo $err_location; ?> </span>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="them_user" value="Thêm user"></td>
				</tr>
				<tr>
					<td colspan="2"><a href="quan_ly_user.php">Quan ly user</a> </td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>