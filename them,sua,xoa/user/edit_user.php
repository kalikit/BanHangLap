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
	<title>Edit User</title>
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
	$sql = "select * from infor_user where id_user = '$_GET[id_user]'";
	$result = mysqli_query($ketnoi, $sql);
	$row = mysqli_fetch_array($result);

	if (isset($_POST['sua_user'])) {
		$id = mysqli_escape_string($ketnoi, $_POST['id']);
		$tenuser = mysqli_escape_string($ketnoi, $_POST['name']);
		$email = mysqli_escape_string($ketnoi, $_POST['email']);
		$sdt = mysqli_escape_string($ketnoi, $_POST['sdt']);
		$pass = mysqli_escape_string($ketnoi, $_POST['pass']);
		$sex = mysqli_escape_string($ketnoi, $_POST['sex']);
		$birth = mysqli_escape_string($ketnoi, $_POST['birth']);
		$add = mysqli_escape_string($ketnoi, $_POST['add']);
		$location = mysqli_escape_string($ketnoi, $_POST['location']);

		$sql = "update infor_user set id_user = '$id', ho_ten = '$tenuser', email = '$email', so_dt = '$sdt', mat_khau = '$pass', gioi_tinh = '$sex', ngay_sinh = '$birth', dia_chi = '$add', tinh_tp = '$location'  where id_user = '$_GET[id_user]'";
		mysqli_query($ketnoi, $sql);
		header('location:quan_ly_user.php');
	}
	?>

	<h3>update thông tin user</h3>
	<div class="table">
		<form action="" method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td>ID</td>
					<td><input type="text" name="id" value="<?php echo $row['id_user'] ?>"> </td>
				</tr>
				<tr>
					<td>Họ tên</td>
					<td><input type="text" name="name" value="<?php echo $row['ho_ten'] ?>"></input> </td>

				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $row['email']; ?>"> </td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input type="text" name="sdt" value="<?php echo $row['so_dt']; ?>"> </td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" name="pass" value="<?php echo $row['mat_khau']; ?>"> </td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td value="<?php echo $row['gioi_tinh']; ?>">
						Nam<input type="radio" name="sex" checked="checked">
						Nữ<input type="radio" name="sex">

					</td>
				</tr>
				<tr>
					<td>Ngày sinh</td>
					<td><input type="date" name="birth" value="<?php echo $row['ngay_sinh']; ?>"></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="add" value="<?php echo $row['dia_chi']; ?>"></td>
				</tr>
				<tr>
					<td>Tỉnh, TP</td>
					<td><input type="text" name="location" value="<?php echo $row['tinh_tp']; ?>"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="sua_user" value="Update user"></td>
				</tr>
				<tr>
					<td colspan="2"><a href="quan_ly_user.php">Quan ly user</a> </td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>