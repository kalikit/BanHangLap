<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Camera quan sát, an ninh</title>
	<link rel="stylesheet" type="text/css" href="../css/camera_quansat.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
</head>

<body>
	<?php
	include("header.html");
	include("searchbar_khi_scroll.html");
	include("../them,sua,xoa/product/connect.php");
	include("scrolltop.html");
	?>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 aside-left">
					<div class="title-loc-sp">
						<p>LỌC SẢN PHẨM</p>
					</div>
					<div class="danhmuc">
						<h4 id="title">DANH MỤC</h4>
						<div class="line-ngang"></div>
						<div class="list-choice">
							<ul>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Camera quan sát</a></li>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Đầu ghi hình KTS</a></li>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Đầu ghi HDSDI</a></li>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Phụ kiện Camera </a></li>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Camera hành trình</a></li>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Màn hình Camera</a></li>
								<li> <i class="fa fa-angle-double-right"></i>&nbsp<a href="#"> Ổ cứng Camera</a></li>
							</ul>
						</div>
					</div>

					<div class="khoanggia">
						<h4 id="title">KHOẢNG GIÁ</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Dưới 500 ngàn</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 500 ngàn - 1 triệu </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 1 triệu - 3 triệu </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 3 triệu - 5 triệu </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 5 triệu - 7 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 7 triệu - 9 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 9 triệu - 11 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 11 triệu - 13 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Trên 13 triệu</a></li>
								<a id="loc" href="#">Lọc</a>
							</ul>
						</div>
					</div>

					<div class="hang-sx">
						<h4 id="title"> HÃNG SẢN XUẤT</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> DAHUA</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> GLOBAL </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> HILOOK</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> HIKVISION </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> KBVISION </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> VANTECH </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> UNIVIEW </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> AVTECH </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> WESTERN DIGITAL </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Các hãng khác </a></li>
							</ul>
						</div>
					</div>

					<div class="do-phan-giai">
						<h4 id="title">ĐỘ PHÂN GIẢI</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Camera Analog</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Camera 1MP</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Camera 2MP</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Camera 3MP</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Camera 4MP</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Camera 5MP</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 aside-right">

					<div class="row">
						<?php
						$sql = "SELECT * FROM camera_quansat ";
						$result = mysqli_query($ketnoi, $sql);
						$num = mysqli_num_rows($result);
						?>
						<div class="col-12 label-product">
							<div class="row">
								<div class="col-12">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
											<li class="breadcrumb-item active" aria-current="page">Camera quan sát</li>
										</ol>
									</nav>
								</div>
								<div class="col-12">
									<div class="total-product">
										<label id="title_page">Camera quan sát
											<span style="font-size: 15px; color: grey;"><?php echo "(Tổng $num sản phẩm)"; ?></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-12 list-option">
							<div class="row">
								<div class="col-8">
									<a href="#"><b>Hàng Mới</b></a>

									<a href="#"><b>Xem Nhiều</b></a>

									<a href="#"><b>Giá Giảm Nhiều</b></a>

									<a href="?field=gia_moi&sort=ASC"><b>Giá Tăng Dần</b></a>

									<a href="?field=gia_moi&sort=DESC"><b>Giá Giảm Dần</b></a>
								</div>
								<div class="col-4">
									<select title="loc san pham" class="locsp" >
										<option value="0">Lọc sản phẩm</option>
										<option value="#">Đánh giá</option>
										<option value="?field=ten_sp&sort=ASC">Tên A->Z</option>
									</select>

									<select title="tình trạng" class="tinhtrang" name="tinhtrang" >
										<option value="0">Tình trạng kho hàng</option>
										<option value="?field=tinh_trang&sort=DESC" <?= isset($_GET['tinhtrang']) && $_GET['tinhtrang'] == 'name' ? ' selected' : '' ?>>Còn hàng</option>
									</select>
								</div>
							</div>
							<!-----------responsive min-width: 768px and max-width: 1199.98px------------->
							<div class="row ">
								<div class="col-5">
									<div class="dropdown show">
										<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hàng Mới</a>

										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="#">Hàng Mới</a>
											<a class="dropdown-item" href="#">Xem Nhiều</a>
											<a class="dropdown-item" href="#">Giá Giảm Nhiều</a>
											<a class="dropdown-item" href="?field=gia_moi&sort=ASC">Giá Tăng Dần</a>
											<a class="dropdown-item" href="?field=gia_moi&sort=DESC">Giá Giảm Dần</a>
										</div>
									</div>
								</div>
								<div class="col-7">
									<select title="loc san pham" class="locsp">
										<option value="0">Lọc sản phẩm</option>
										<option value="#">Đánh giá</option>
										<option value="?field=ten_sp&sort=ASC">Tên A->Z</option>
									</select>

									<select title="tình trạng" class="tinhtrang" name="tinhtrang">
										<option value="0">Tình trạng kho hàng</option>
										<option value="?field=tinh_trang&sort=DESC" <?= isset($_GET['tinhtrang']) && $_GET['tinhtrang'] == 'name' ? ' selected' : '' ?>>Còn hàng</option>
									</select>
								</div>
							</div>

						</div>
						<div class="w-100"></div>
						<div class="col-12 list-product">
							<?php
							$sql = "select count(id) as total from camera_quansat";
							$result = mysqli_query($ketnoi, $sql);
							$row = mysqli_fetch_assoc($result);
							$total_records = $row['total'];
							$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
							$limit = 10;
							$total_page = ceil($total_records / $limit);
							if ($current_page > $total_page) {
								$current_page = $total_page;
							} else if ($current_page < 1) {
								$current_page = 1;
							}
							$start = ($current_page - 1) * $limit;
							/*-------------sap xep--------------------------*/
							$orderfield = isset($_GET['field']) ? $_GET['field'] : "";
							$ordersort = isset($_GET['sort']) ? $_GET['sort'] : "";

							if (!empty($orderfield) && !empty($ordersort) && $orderfield == 'gia_moi') {
								$sql = "SELECT * FROM camera_quansat  ORDER BY camera_quansat.$orderfield $ordersort LIMIT $start, $limit";
							} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'ten_sp') {
								$sql = "SELECT * FROM camera_quansat  ORDER BY camera_quansat.$orderfield $ordersort LIMIT $start, $limit";
							} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'tinh_trang') {
								$sql = "SELECT * FROM camera_quansat where tinh_trang = 'còn hàng' camera_quansat.$orderfield $ordersort LIMIT $start, $limit";
							} else {
								$sql = "SELECT * FROM camera_quansat ORDER BY RAND ( ) LIMIT $start, $limit";
							}
							$result = mysqli_query($ketnoi, $sql);
							while ($row = mysqli_fetch_assoc($result)) {  ?>
								<form method="post" action="add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
									<div class="card">
										<img class="card-img-top" src="../images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title"><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
											<!--<p class="card-text">Some quick </p>-->
											<p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
											<p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
											<input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
											<input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
											<input type="hidden" name="quantity" value="1" />
											<input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
											<span style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span>
											<span><button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 20px;'></i></button></span>
										</div>
									</div>
								</form>
							<?php
							}
							?>
						</div>
						<div class="w-100"></div>
						<div class="container pagin">
							<div class="row">
								<div class="page-navi">
									<?php
									if ($current_page > 1 && $total_page > 1) {
										echo '<a href="camera_quansat.php?page=' . ($current_page - 1) . '">Prev</a> ';
									}
									for ($i = 1; $i <= $total_page; $i++) {
										if ($i == $current_page) {
											echo '<a href="camera_quansat.php" class="first-page">' . $i . '</a> ';
										} else {
											echo '<a href="camera_quansat.php?page=' . $i . '" >' . $i . '</a> ';
										}
									}
									if ($current_page < $total_page && $total_page > 1) {
										echo '<a href="camera_quansat.php?page=' . ($current_page + 1) . '">Next</a> ';
									}
									?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-------------Responsive max width = 991px---------------->
		<div class="col-12 aside-right2">

			<div class="row">
				<?php
				$sql = "SELECT * FROM camera_quansat ";
				$result = mysqli_query($ketnoi, $sql);
				$num = mysqli_num_rows($result);
				?>
				<div class="col-12 label-product">

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Camera quan sát</li>
						</ol>
					</nav>

				</div>
				<div class="col-12 total-product">
					<label id="title_page">Camera quan sát
						<span style="font-size: 20px; color: grey;"><?php echo "(Tổng $num sản phẩm)"; ?></span>
					</label>
					<select title="loc san pham" class="locsp" name="locsp">
						<option value="0">Lọc sản phẩm</option>
						<option value="?field=ten_sp&sort=ASC">Tên từ A-Z</option>
						<option value="0">Hàng Mới</option>
						<option value="0">Xem Nhiều</option>
						
						<option value="?field=gia_moi&sort=ASC">Giá Tăng Dần</option>
						<option value="?field=gia_moi&sort=DESC">Giá Giảm Dần</option>
						<option value="tinh_trang.php" <?= isset($_GET['locsp']) && $_GET['locsp'] == 'name' ? ' selected' : '' ?>>Còn hàng</option>
					</select>
				</div>
				<div class="w-100"></div>
				<div class="col-12 list-product">
					<?php
					$sql = "select count(id) as total from camera_quansat";
					$result = mysqli_query($ketnoi, $sql);
					$row = mysqli_fetch_assoc($result);
					$total_records = $row['total'];
					$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
					$limit = 10;
					$total_page = ceil($total_records / $limit);
					if ($current_page > $total_page) {
						$current_page = $total_page;
					} else if ($current_page < 1) {
						$current_page = 1;
					}
					$start = ($current_page - 1) * $limit;
					/*-------------sap xep--------------------------*/
					$orderfield = isset($_GET['field']) ? $_GET['field'] : "";
					$ordersort = isset($_GET['sort']) ? $_GET['sort'] : "";

					if (!empty($orderfield) && !empty($ordersort) && $orderfield == 'gia_moi') {
						$sql = "SELECT * FROM camera_quansat  ORDER BY camera_quansat.$orderfield $ordersort LIMIT $start, $limit";
					} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'ten_sp') {
						$sql = "SELECT * FROM camera_quansat  ORDER BY camera_quansat.$orderfield $ordersort LIMIT $start, $limit";
					} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'tinh_trang') {
						$sql = "SELECT * FROM camera_quansat  ORDER BY camera_quansat.$orderfield $ordersort LIMIT $start, $limit";
					} else {
						$sql = "SELECT * FROM camera_quansat ORDER BY RAND ( ) LIMIT $start, $limit";
					}
					$result = mysqli_query($ketnoi, $sql);
					while ($row = mysqli_fetch_assoc($result)) {  ?>
						<form method="post" action="add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
							<div class="card">
								<img class="card-img-top" src="../images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
									<!--<p class="card-text">Some quick </p>-->
									<p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
									<p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
									<input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
									<input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
									<input type="hidden" name="quantity" value="1" />
									<input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
									<span id="tinhtrang" style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span>
									<span><button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 35px;'></i></button></span>
								</div>
							</div>
						</form>
					<?php
					}
					?>
				</div>
				<div class="w-100"></div>
				<div class="col pagin">
					<div class="row">
						<div class="page-navi">
							<?php
							if ($current_page > 1 && $total_page > 1) {
								echo '<a href="camera_quansat.php?page=' . ($current_page - 1) . '">Prev</a> ';
							}
							for ($i = 1; $i <= $total_page; $i++) {
								if ($i == $current_page) {
									echo '<a href="camera_quansat.php" class="first-page">' . $i . '</a> ';
								} else {
									echo '<a href="camera_quansat.php?page=' . $i . '" >' . $i . '</a> ';
								}
							}
							if ($current_page < $total_page && $total_page > 1) {
								echo '<a href="camera_quansat.php?page=' . ($current_page + 1) . '">Next</a> ';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php
	include("footer.html");
	?>
</body>

</html>