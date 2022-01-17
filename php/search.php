<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/search.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
	<title>Document</title>
</head>

<body>
	<?php
	include("header.html");
	include("searchbar_khi_scroll.html");
	include("../them,sua,xoa/product/connect.php");
	include("scrolltop.html");
	?>
	<main>
		<!--Responsive min width: 992px------>
		<div class="laptop">

			<?php
			$sql = "SELECT count(id) as total from mat_hang_laptop union SELECT count(id) as total from pc_van_phong union SELECT count(id) as total from camera_quansat";
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

			if (isset($_REQUEST['timkiem'])) {
				$search = addslashes($_GET['search']);
				if (empty($search)) {
					echo "Bạn chưa nhập dữ liệu vào ô trống";
				} else {
					$sql = "SELECT * FROM mat_hang_laptop where ten_sp like '%$search%' union select * from pc_van_phong where ten_sp like '%$search%' union select * from camera_quansat where ten_sp like '%$search%' LIMIT $start, $limit";
					$result = mysqli_query($ketnoi, $sql);
					$num = mysqli_num_rows($result);
					if ($num > 0 && $search != "") {
			?>
						<div class="title">
							<p id="keyword"><?php echo "$num kết quả trả về với từ khóa <b>$search</b><br>"; ?></p>
						</div>
						<div class="container">
							<div class="row">
								<div class="col">
									<?php
									while ($row = mysqli_fetch_array($result)) { ?>
										<form method="post" action="add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
											<div class="card">
												<img class="card-img-top" src="../images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
													<!--<p class="card-text">Some quick </p>-->
													<p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
													<p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
													<input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
													<input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
													<input type="hidden" name="quantity" value="1" />
													<input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
													<span id="tinhtrang" style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span>
													<span><button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 20px;'></i></button></span>
												</div>
											</div>
										</form>
									<?php
									}
									?>
								</div>
							</div>
						</div>
			<?php
					} else {
						echo "Không tìm thấy kết quả!";
					}
				}
			} ?>

		</div>

		<!--Responsive max width: 992px------>
		<div class="laptop_2">

			<?php
			$sql = "SELECT count(id) as total from mat_hang_laptop union SELECT count(id) as total from pc_van_phong union SELECT count(id) as total from camera_quansat";
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

			if (isset($_REQUEST['timkiem'])) {
				$search = addslashes($_GET['search']);
				if (empty($search)) {
					echo "Bạn chưa nhập dữ liệu vào ô trống";
				} else {
					$sql = "SELECT * FROM mat_hang_laptop where ten_sp like '%$search%' union select * from pc_van_phong where ten_sp like '%$search%' union select * from camera_quansat where ten_sp like '%$search%' LIMIT $start, $limit";
					$result = mysqli_query($ketnoi, $sql);
					$num = mysqli_num_rows($result);
					if ($num > 0 && $search != "") {
			?>
						<div class="title">
							<p id="keyword"><?php echo "$num kết quả trả về với từ khóa <b>$search</b><br>"; ?></p>
						</div>

						<div class="row">
							<div class="col">
								<?php
								while ($row = mysqli_fetch_array($result)) { ?>
									<form method="post" action="add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
										<div class="card">
											<img class="card-img-top" src="../images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
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
						</div>
			<?php

					} else {
						echo "Không tìm thấy kết quả!";
					}
				}
			} ?>

		</div>
		<div class="pagin">
			<div class="row">
				<div class=" page-navi">
					<?php
					if ($current_page > 1 && $total_page > 1) {
						echo '<a href="search.php?page=' . ($current_page - 1) . '">Prev</a> ';
					}
					for ($i = 1; $i <= $total_page; $i++) {
						if ($i == $current_page) {
							echo '<a href="search.php" class="first-page">' . $i . '</a> ';
						} else {
							echo '<a href="search.php?page=' . $i . '" >' . $i . '</a> ';
						}
					}
					if ($current_page < $total_page && $total_page > 1) {
						echo '<a href="search.php?page=' . ($current_page + 1) . '">Next</a> ';
					}
					?>
				</div>
			</div>
		</div>
	</main>
	<?php
	include("footer.html");
	?>
</body>
</html>