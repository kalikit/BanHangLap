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
		h3{
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
			width: 700px;
			padding: 20px;
			margin: auto;
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
	<?php
			$err_id =$err_masp = $err_anhsp = $err_tensp = $err_inforsp = $err_giacu = $err_giamoi ="";
			if(isset($_POST["them_sp"]))
			{
				$id = mysqli_escape_string($ketnoi,$_POST["id"]);
				$masp = mysqli_escape_string($ketnoi,$_POST["masp"]);
				$tensp = mysqli_escape_string($ketnoi,$_POST["tensp"]);
				$inforsp = mysqli_escape_string($ketnoi,$_POST["inforsp"]);
				$giacu = mysqli_escape_string($ketnoi,$_POST["giacu"]);
				$giamoi = mysqli_escape_string($ketnoi,$_POST["giamoi"]);
				$category = mysqli_escape_string($ketnoi,$_POST["categorys"]);
				$tinhtrang = mysqli_escape_string($ketnoi,$_POST["tinhtrang"]);
				$anh = $_FILES['anh'];
				if($tensp == ""){
					$err_tensp="Không để tên sp trống!<br>";
				}
				if($masp == ""){
					$err_masp="Không để mã sp trống!<br>";
				}
				if($anh == ""){
					$err_anhsp="Không để ảnh sp trống!<br>";
				}
				if($inforsp == ""){
					$err_inforsp="Không để thông tin sp trống!<br> ";
				}
				if($giacu == ""){
					$err_giacu="Không để giá cũ trống!<br>";
				}
				if($giamoi == ""){
					$err_giamoi="Không để giá mới trống!<br>";
				}
				if ($category == "") {
					$error['categorys'] = "Bạn cần chọn danh mục chèn bảng!<br>";
				}
				if ($tinhtrang == "") {
					$error['tinhtrang'] = "Bạn cần chọn tình trạng!<br>";
				}
				if($anh != "" && $masp != "" && $tensp != "" && $inforsp != "" && $giacu != "" && $giamoi != "" && $tinhtrang != "")
				{
					$path = 'images/';
					$tmp_name = $_FILES['anh'];
					$anh = $_FILES['anh'];
					move_uploaded_file($tmp_name,$path.$anh);
					if(isset($category) && $category == 'laptop'){
						if(isset($tinhtrang)){
							$sql = "insert into mat_hang_laptop(id,ma_sp,anh_sp,ten_sp,infor_sp,gia_cu,gia_moi,tinh_trang) values('$id','$masp','$anh','$tensp','$inforsp','$giacu','$giamoi','$tinhtrang')";
							mysqli_query($ketnoi,$sql);
							header('location:quan_ly_laptop.php');  
						} 
					}
					if(isset($category) && $category == 'pcgame'){
						if(isset($tinhtrang)){
							$sql = "insert into pc_gaming_dohoa(id,ma_sp,anh_sp,ten_sp,infor_sp,gia_cu,gia_moi,tinh_trang) values('$id','$masp','$anh','$tensp','$inforsp','$giacu','$giamoi','$tinhtrang')";
							mysqli_query($ketnoi,$sql);
							header('location:quan_ly_laptop.php');
						}
					}	
					if(isset($category) && $category == 'pcvanphong'){
						if(isset($tinhtrang)){
							$sql = "insert into pc_van_phong(id,ma_sp,anh_sp,ten_sp,infor_sp,gia_cu,gia_moi,tinh_trang) values('$id','$masp','$anh','$tensp','$inforsp','$giacu','$giamoi','$tinhtrang')";
							mysqli_query($ketnoi,$sql);
							header('location:quan_ly_laptop.php');
						}
					}
					if(isset($category) && $category == 'camera'){
						if(isset($tinhtrang)){
							$sql = "insert into camera_quansat(id,ma_sp,anh_sp,ten_sp,infor_sp,gia_cu,gia_moi,tinh_trang) values('$id','$masp','$anh','$tensp','$inforsp','$giacu','$giamoi','$tinhtrang')";
							mysqli_query($ketnoi,$sql);
							header('location:quan_ly_laptop.php');
						}
					}
				}
			}

	?>
		<h3>thêm thông tin sản phẩm</h3>
		<div class="table">
		<form action="" method="post"  enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td>ID</td>
					<td	><input type="text" name="id" ></input> </td>
					<span><?php echo $err_id; ?> </span>
				</tr>
				<tr>
					<td>Mã sản phẩm</td>
					<td	><input type="text" name="masp" ></input> </td>
					<span><?php echo $err_masp; ?> </span>
				</tr>
				<tr>
					<td>Ảnh sản phẩm</td>
					<td	><input type="file" name="anh" ></input> </td>
					<span><?php echo $err_anhsp; ?> </span>
				</tr>
				<tr>
					<td>Tên sản phẩm</td>
					<td	><textarea name="tensp" rows="5" cols="60"></textarea> </td>
					<span><?php echo $err_tensp; ?> </span>
				</tr>
				<tr>
					<td>Thông tin sản phẩm</td>
					<td	><textarea name="inforsp" rows="5" cols="60"></textarea> </td>
					<span><?php echo $err_inforsp; ?> </span>
				</tr>
				<tr>
					<td>Giá cũ</td>
					<td	><input type="text" name="giacu"></input> </td>
					<span><?php echo $err_giacu; ?> </span>
				</tr>
				<tr>
					<td>Giá mới</td>
					<td	><input type="text" name="giamoi"></input> </td>
					<span><?php echo $err_giamoi; ?> </span>
				</tr>
				<tr>
					<td>Danh mục</td>
					<td	>
						<select name="categorys">
							<option>--Chọn--</option>
							<option value="laptop">Laptop</option>
							<option value="pcgame">PC gaming</option>
							<option value="pcvanphong">PC văn phòng</option>
							<option value="camera">Camera quan sát</option>
						</select>
					 </td>
				</tr>
				<tr>
					<td>Tình trạng</td>
					<td	>
						<select name="tinhtrang">
							<option>--Chọn--</option>
							<option value="Còn hàng">Còn hàng</option>
							<option value="Liên hệ">Liên hệ</option>
						</select>
					 </td>
					
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="them_sp" value="Thêm sản phẩm" style="margin-top:10px; margin-bottom:10px;"></td>
				</tr>
				<tr>
					<td colspan="2"><a href="quan_ly_laptop.php">Quản lý laptop</a> </td>
				</tr>
			</table>
		</form> 
	</div>
</body>
</html>