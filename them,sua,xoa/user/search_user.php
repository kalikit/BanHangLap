<!DOCTYPE html>
<html lang="en">

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
	<title>Search</title>
	<style>
		h2 {
			text-align: center;
			margin: 40px auto;
			border: 1px solid #545454;
			border-radius: 3px;
			padding: 15px 20px;
			width: 500px;
			text-transform: uppercase;
			background: orange;
		}

		table {
			border-collapse: collapse;
		}

		table th {
			padding: 5px;
			font-size: 17px;
			background: orange;
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

	$sql = "SELECT * FROM infor_user";
	$result = mysqli_query($ketnoi, $sql);
	if (isset($_REQUEST['timkiem'])) {
		$search = addslashes($_GET['search']);
		if (empty($search)) {
			echo "Yeu cau nhap du lieu vao o trong";
		} else {
			$sql = "SELECT * FROM infor_user where ho_ten like '%$search%'";
			$result = mysqli_query($ketnoi, $sql);
			$num = mysqli_num_rows($result);
			if ($num > 0 && $search != "") {
	?>

				<p id="keyword"><?php echo "$num kết quả trả về với từ khóa <b>$search</b><br>"; ?></p>
				<a href="quan_ly_user.php">Quản lý User</a>
				<div class="infor">
					<table border="1px grey" align="center">
						<tr>
							<th width="30px">ID</th>
							<th width="200px">Họ tên</th>
							<th width="220px">Email</th>
							<th width="110px">Số điện thoại</th>
							<th width="120px">Mật khẩu </th>
							<th width="70px">Giới tính</th>
							<th width="110px">Ngày sinh</th>
							<th width="250px">Địa chỉ</th>
							<th width="150px">Tỉnh, TP</th>
							<th><a href="them_user.php?quanly_user=them_user"><i class="fa fa-plus" style="font-size: 26px;"></i></a></th>
						</tr>
						<?php while ($row = mysqli_fetch_array($result)) {   ?>
							<tr>
								<td><?php echo $row['id_user']; ?> </td>
								<td><?php echo $row['ho_ten']; ?> </td>
								<td><?php echo $row['email']; ?> </td>
								<td><?php echo $row['so_dt']; ?> </td>
								<td><?php echo $row['mat_khau']; ?></td>
								<td><?php echo $row['gioi_tinh']; ?></td>
								<td><?php echo $row['ngay_sinh']; ?></td>
								<td><?php echo $row['dia_chi']; ?></td>
								<td><?php echo $row['tinh_tp']; ?></td>
								<td><a href="edit_user.php?quanly_user=edit_user &id_user= <?php echo $row['id_user']; ?>"><i class="fa fa-edit" style="font-size: 26px; margin-right: 10px"></i></a>
									<a onclick="return window.confirm('Bạn muốn xóa không');" href="quan_ly_user.php?quanly_user=delete_user &id_user= <?php echo $row['id_user']; ?>"><i class="fa fa-trash" style="font-size: 26px"></i></a>
								</td>
							</tr>
						<?php } ?>
					</table>

				</div>
	<?php }
		}
	} else {
		echo "Khong tim thay ket qua!";
	}
	?>

</body>

</html>