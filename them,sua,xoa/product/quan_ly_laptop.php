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
	<title>Admin</title>
	<style>
		main {
			margin: 40px 0;
		}
		table {
			border-collapse: collapse;
		}
		table th {
			padding: 5px;
			font-size: 16px;
			background: orange;
		}
		.fa-user{
			border: 1px solid black;
			border-radius: 50%;
			padding: 10px;
		}
		.collapse input[type="search"]{
			width: 500px;
		}
		.asideleft{
			background-color: #BFCAE6;
			max-height: 300px;
		}
		.navbar{
			margin-left: 20px;
		}
	</style>
</head>

<body>
	<?php
	include "connect.php";
	$sql = "select * from mat_hang_laptop union select * from pc_van_phong  union select * from camera_quansat";
	$result = mysqli_query($ketnoi, $sql);
	?>
	<?php include("Content.php"); ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<i class="fas fa-user"></i>&nbsp; Xin chào Admin !
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

			<form class="form-inline my-2 my-lg-0" action="search.php" method="get">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search"> 
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm</button>
			</form>
			<a class="navbar" href="#">
		<i class="fa fa-sign-out-alt"></i>&nbsp; Đăng xuất
		</a>
		</div>
		
	</nav>

	<main>
	<div class="row">
		<div class="col-12 col-lg-3 col-xl-2 asideleft">
			<ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-sanpham-tab" data-toggle="pill" href="#pills-sanpham" role="tab" aria-controls="pills-sanpham" aria-selected="true">Quản lý sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Quản lý loại sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-nhanvien-tab" data-toggle="pill" href="#pills-nhanvien" role="tab" aria-controls="pills-nhanvien" aria-selected="false">Quản lý nhân viên</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Quản lý kho hàng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Quản lý khách hàng</a>
				</li>
			</ul>
		</div>
		<div class="col-12 col-lg-9 col-xl-10">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-sanpham" role="tabpanel" aria-labelledby="pills-sanpham-tab">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Mã sp</th>
								<th scope="col">Ảnh sản phẩm</th>
								<th scope="col">Tên sản phẩm</th>
								<th scope="col">Thông tin sản phẩm</th>
								<th scope="col">Giá cũ </th>
								<th scope="col">Giá mới</th>
								<th scope="col">Tình trạng</th>
								<th scope="col"><a href="Them.php"><i class="fa fa-plus" style="font-size: 26px;"></i></a></th>
							</tr>
						</thead>
						<tbody>
							<?php while ($row = mysqli_fetch_array($result)) {   ?>
								<tr>
									<td><?php echo $row['id']; ?> </td>
									<td><?php echo $row['ma_sp']; ?> </td>
									<td><img src="../../images/<?php echo $row['anh_sp']; ?>" style="max-width: 150px; height: 120px;"></td>
									<td><?php echo $row['ten_sp']; ?></td>
									<td><?php echo $row['infor_sp']; ?></td>
									<td><?php echo $row['gia_cu']; ?></td>
									<td><?php echo $row['gia_moi']; ?></td>
									<td><?php echo $row['tinh_trang']; ?></td>
									<td><a href="Edit.php?quanly=Edit &id= <?php echo $row['id']; ?>"><i class="fa fa-edit" style="font-size: 25px; margin-right: 10px"></i></a>
										<a onclick="return window.confirm('Bạn muốn xóa không');" href="Delete.php?quanly=Delete&id= <?php echo $row['id']; ?>"><i class="fa fa-trash" style="font-size: 25px"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
				<div class="tab-pane fade" id="pills-nhanvien" role="tabpanel" aria-labelledby="pills-nhanvien-tab">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Họ tên</th>
								<th>Email</th>
								<th>Số điện thoại</th>
								<th>Mật khẩu </th>
								<th>Giới tính</th>
								<th>Ngày sinh</th>
								<th>Địa chỉ</th>
								<th>Tỉnh, TP</th>
								<th><a href="../user/them_user.php"><i class="fa fa-plus" style="font-size: 26px;"></i></a></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "select * from infor_user ";
							$result = mysqli_query($ketnoi, $sql);
							?>
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
									<td><a href="../user/edit_user.php &id_user= <?php echo $row['id_user']; ?>"><i class="fa fa-edit" style="font-size: 25px; margin-right: 10px"></i></a>
										<a onclick="return window.confirm('Bạn muốn xóa không');" href="quan_ly_laptop.php"><i class="fa fa-trash" style="font-size: 25px"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-kho-tab">...</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-khach-tab">...</div>
			</div>
		</div>
	</div>
	</main>
</body>

</html>