<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>PC van phong</title>
	<link rel="stylesheet" type="text/css" href="../css/PC_vanphong,mini_PC.css">
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
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Để Bàn Dell</a></li>
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Để Bàn Asus</a></li>
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Để Bàn Lenovo</a></li>
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Để Bàn HP </a></li>
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Để Bàn Acer</a></li>
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Để Bàn Fujitsu</a></li>
								<li> <i class="fa fa-laptop"></i>&nbsp<a href="#"> PC Thương Hiệu Khác</a></li>
							</ul>
						</div>
					</div>

					<div class="khoanggia">
						<h4 id="title">KHOẢNG GIÁ</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Dưới 5 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 5 triệu - 7 triệu </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 7 triệu - 10 triệu </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 10 triệu - 12 triệu </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 12 triệu - 15 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 15 triệu - 18 triệu</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Trên 18 triệu</a></li>
								<a id="loc" href="#">Lọc</a>
							</ul>
						</div>
					</div>

					<div class="nhu_cau_use">
						<h4 id="title">NHU CẦU SỬ DỤNG</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Dùng cho kế toán</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Dùng cho doanh nghiệp </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Dùng cho thu ngân-kho hàng</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Giải trí cá nhân </a></li>
							</ul>
						</div>
					</div>

					<div class="ram">
						<h4 id="title">RAM</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 4GB</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 8GB </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 16GB </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 32GB </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> >32GB</a></li>
							</ul>
						</div>
					</div>

					<div class="cpu">
						<h4 id="title">CPU</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Intel Celeron/Pentinum</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Intel Core i3 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Intel Core i5 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Intel Core i7 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Intel Core i9 </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> AMD Ryzen 3</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> AMD Ryzen 5</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Apple M1</a></li>
							</ul>
						</div>
					</div>

					<div class="rom">
						<h4 id="title">Ổ CỨNG</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> SSD</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> HDD </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> SSD + HDD </a></li>
							</ul>
						</div>
					</div>

					<div class="card_vga">
						<h4 id="title">VGA - CARD MÀN HÌNH</h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> VGA Geforce </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> VGA AMD </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> VGA Onboard </a></li>
							</ul>
						</div>
					</div>

					<div class="kich_thuoc_man">
						<h4 id="title">KÍCH THƯỚC MÀN HÌNH </h4>
						<div class="line-ngang"></div>
						<div class="list-choice2">
							<ul>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 21.5 inch</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 23.8 inch </a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> 27 inch</a></li>
								<li> <i class="fa fa-square-o"></i>&nbsp<a href="#"> Kích thước khác </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 aside-right">

					<div class="row">
						<?php
						$sql = "SELECT * FROM pc_van_phong ";
						$result = mysqli_query($ketnoi, $sql);
						$num = mysqli_num_rows($result);
						?>
						<div class="col-12 label-product">
							<div class="row">
								<div class="col-12">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
											<li class="breadcrumb-item active" aria-current="page">PC văn phòng, mini PC</li>
										</ol>
									</nav>
								</div>
								<div class="col-12">
									<div class="total-product">
										<label id="title_page">PC văn phòng, mini PC
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
									<select title="loc san pham" class="locsp">
										<option value="0">Lọc sản phẩm</option>
										<option value="#">Đánh giá</option>
										<option value="?field=ten_sp&sort=ASC">Tên A->Z</option>
									</select>

									<select title="tình trạng" class="tinhtrang" name="tinhtrang">
										<option value="0">Tình trạng kho hàng</option>
										<option value="tinh_trang.php" <?= isset($_GET['tinhtrang']) && $_GET['tinhtrang'] == 'name' ? ' selected' : '' ?>>Còn hàng</option>
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
									<select title="loc san pham" class="locsp" >
										<option value="0">Lọc sản phẩm</option>
										<option value="#">Đánh giá</option>
										<option value="?field=ten_sp&sort=ASC">Tên A->Z</option>
									</select>

									<select title="tình trạng" class="tinhtrang" name="tinhtrang" >
										<option value="0">Tình trạng kho hàng</option>
										<option value="tinh_trang.php" <?= isset($_GET['tinhtrang']) && $_GET['tinhtrang'] == 'name' ? ' selected' : '' ?>>Còn hàng</option>
									</select>
								</div>
							</div>

						</div>
						<div class="w-100"></div>
						<div class="col-12 list-product">
							<?php
							$sql = "select count(id) as total from pc_van_phong";
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
								$sql = "SELECT * FROM pc_van_phong  ORDER BY pc_van_phong.$orderfield $ordersort LIMIT $start, $limit";
							} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'ten_sp') {
								$sql = "SELECT * FROM pc_van_phong  ORDER BY pc_van_phong.$orderfield $ordersort LIMIT $start, $limit";
							} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'tinh_trang') {
								$sql = "SELECT * FROM pc_van_phong where tinh_trang like %còn hàng% pc_van_phong.$orderfield $ordersort LIMIT $start, $limit";
							} else {
								$sql = "SELECT * FROM pc_van_phong ORDER BY RAND ( ) LIMIT $start, $limit";
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
										echo '<a href="PC_vanphong,mini_PC.php?page=' . ($current_page - 1) . '">Prev</a> ';
									}
									for ($i = 1; $i <= $total_page; $i++) {
										if ($i == $current_page) {
											echo '<a href="PC_vanphong,mini_PC.php" class="first-page">' . $i . '</a> ';
										} else {
											echo '<a href="PC_vanphong,mini_PC.php?page=' . $i . '" >' . $i . '</a> ';
										}
									}
									if ($current_page < $total_page && $total_page > 1) {
										echo '<a href="PC_vanphong,mini_PC.php?page=' . ($current_page + 1) . '">Next</a> ';
									}
									?>
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-12">
							<div class="doc-them">
								<div class="doc-them2">
									<h3>Máy tính văn phòng giá rẻ, chất lượng cao tại LAPWORLD</h3><br>
									<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1">Máy tính văn phòng:&nbsp</span>
									<span>là thiết bị mà bất cứ cơ quan hay doanh nghiệp nào cũng sử dụng. Một bộ case văn phòng cơ bản đáp ứng nhu cầu làm việc bao gồm màn hình, bàn phím, chuột và 1 thùng máy tính được lắp ráp đầy đủ các linh kiện cần thiết. Không giống như những bộ máy tính chơi game hay đồ họa, cây máy tính văn phòng thường có cấu hình trung bình, chủ yếu để xử lý những tác vụ cơ bản.</span>
									<br><br>
									<p> Hầu hết các doanh nghiệp khi lựa chọn những bộ máy tính để bàn văn phòng thường ưu tiên các tiêu chí : có thời gian sử dụng lâu dài, có tính ổn định cao, có khả năng nâng cấp linh kiện để đáp ứng nhu cầu công việc.</p>
									<br>
									<img src="https://www.hanoicomputer.vn/media/lib/mytnhvnphngdell.jpg" style="width: 800px;">
									<br><br>
									<p>Hiện nay có rất nhiều đơn vị cung cấp máy tính để bàn văn phòng với nhiều mẫu mã, cấu hình đa dạng từ thấp đến cao. Tuy nhiên LAPWORLD vẫn là đơn vị được phần lớn khách hàng tin dung và lựa chọn. Chúng tôi là đơn vị chuyên cung cấp PC văn phòng đồng bộ, máy tính văn phòng lắp ráp bới các linh kiện chính hãng đảm bảo chất lượng cho người sử dụng.</p>
									<br>
									<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1">Máy tính văn phòng giá rẻ:&nbsp</span>
									<span>tại LAPWORLD có mức giá vô cùng hấp dẫn. Chỉ từ 3 triệu đồng , các bạn có thể sở hữu ngay một bộ máy tính đáp ứng đầy đủ nhu cầu làm việc, học tập, giải trí nhẹ nhàng với thiết kế vô cùng nhỏ gọn, đơn giản nhưng không kém phần hiện đại. </span>
									<br><br>
									<img src="https://www.hanoicomputer.vn/media/lib/mytnhvnphngacer.jpg" style="width: 800px;">
									<br><br>
									<P>LAPWORLD với gần 20 năm phát triển kinh doanh các mặt hàng về công nghệ, thiết bị tin học. Chúng tôi đã đồng hành, cung cấp máy tính văn phòng cho hàng ngàn đơn vị và doanh nghiệp tại Hà Nội và cả nước. Đến với HANOICOMPUTER, bạn sẽ được chúng tôi tư vấn, đem lại giải pháp máy tính để bàn văn phòng với cấu hình phù hợp nhất, giá thành hợp lý nhất cho tất cả khách hàng từ doanh nghiệp đến cá nhân.</P><br>
									<p>Chúng tôi cam kết bất kì bộ máy tính cây văn phòng bán ra đều là các sản phẩm mới chính hãng 100%, có đầy đủ giấy tờ, hóa đơn nguồn gốc xuất xứ rõ ràng, được bảo hành chính hãng từ 1 - 3 năm. Ngoài ra, khi mua hàng tại LAPWORLD, quý khách hàng còn được cung cấp các dịch vụ số một kèm theo:</p><br>
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
				$sql = "SELECT * FROM pc_van_phong ";
				$result = mysqli_query($ketnoi, $sql);
				$num = mysqli_num_rows($result);
				?>
				<div class="col-12 label-product">

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">PC văn phòng, mini PC</li>
						</ol>
					</nav>

				</div>
				<div class="col-12 total-product">
					<label id="title_page">PC văn phòng, mini PC
						<span style="font-size: 20px; color: grey;"><?php echo "(Tổng $num sản phẩm)"; ?></span>
					</label>
					<select title="loc san pham" class="locsp" name="locsp">
						<option value="0">Lọc sản phẩm</option>
						<option value="?field=ten_sp&sort=ASC">Tên từ A-Z</option>
						<option value="0">Hàng Mới</option>
						<option value="0">Xem Nhiều</option>

						<option value="?field=gia_moi&sort=ASC">Giá Tăng Dần</option>
						<option value="?field=gia_moi&sort=DESC">Giá Giảm Dần</option>
						<option value="?field=tinh_trang&sort=DESC" <?= isset($_GET['locsp']) && $_GET['locsp'] == 'name' ? ' selected' : '' ?>>Còn hàng</option>
					</select>
				</div>
				<div class="w-100"></div>
				<div class="col-12 list-product">
					<?php
					$sql = "select count(id) as total from pc_van_phong";
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
						$sql = "SELECT * FROM pc_van_phong  ORDER BY pc_van_phong.$orderfield $ordersort LIMIT $start, $limit";
					} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'ten_sp') {
						$sql = "SELECT * FROM pc_van_phong  ORDER BY pc_van_phong.$orderfield $ordersort LIMIT $start, $limit";
					} elseif (!empty($orderfield) && !empty($ordersort) && $orderfield == 'tinh_trang') {
						$sql = "SELECT * FROM pc_van_phong where tinh_trang like %còn hàng% pc_van_phong.$orderfield $ordersort LIMIT $start, $limit";
					} else {
						$sql = "SELECT * FROM pc_van_phong ORDER BY RAND ( ) LIMIT $start, $limit";
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
								echo '<a href="PC_vanphong,mini_PC.php?page=' . ($current_page - 1) . '">Prev</a> ';
							}
							for ($i = 1; $i <= $total_page; $i++) {
								if ($i == $current_page) {
									echo '<a href="PC_vanphong,mini_PC.php" class="first-page">' . $i . '</a> ';
								} else {
									echo '<a href="PC_vanphong,mini_PC.php?page=' . $i . '" >' . $i . '</a> ';
								}
							}
							if ($current_page < $total_page && $total_page > 1) {
								echo '<a href="PC_vanphong,mini_PC.php?page=' . ($current_page + 1) . '">Next</a> ';
							}
							?>
						</div>
					</div>
				</div>
				<div class="w-100"></div>
				<div class="col-12">
					<div class="doc-them">
						<div class="doc-them2">
							<h3>Máy tính văn phòng giá rẻ, chất lượng cao tại LAPWORLD</h3><br>
							<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1">Máy tính văn phòng:&nbsp</span>
							<span>là thiết bị mà bất cứ cơ quan hay doanh nghiệp nào cũng sử dụng. Một bộ case văn phòng cơ bản đáp ứng nhu cầu làm việc bao gồm màn hình, bàn phím, chuột và 1 thùng máy tính được lắp ráp đầy đủ các linh kiện cần thiết. Không giống như những bộ máy tính chơi game hay đồ họa, cây máy tính văn phòng thường có cấu hình trung bình, chủ yếu để xử lý những tác vụ cơ bản.</span>
							<br><br>
							<p> Hầu hết các doanh nghiệp khi lựa chọn những bộ máy tính để bàn văn phòng thường ưu tiên các tiêu chí : có thời gian sử dụng lâu dài, có tính ổn định cao, có khả năng nâng cấp linh kiện để đáp ứng nhu cầu công việc.</p>
							<br>
							<img src="https://www.hanoicomputer.vn/media/lib/mytnhvnphngdell.jpg" style="width: 800px;">
							<br><br>
							<p>Hiện nay có rất nhiều đơn vị cung cấp máy tính để bàn văn phòng với nhiều mẫu mã, cấu hình đa dạng từ thấp đến cao. Tuy nhiên LAPWORLD vẫn là đơn vị được phần lớn khách hàng tin dung và lựa chọn. Chúng tôi là đơn vị chuyên cung cấp PC văn phòng đồng bộ, máy tính văn phòng lắp ráp bới các linh kiện chính hãng đảm bảo chất lượng cho người sử dụng.</p>
							<br>
							<i class="fa fa-angle-double-right"></i>&nbsp<span id="note1">Máy tính văn phòng giá rẻ:&nbsp</span>
							<span>tại LAPWORLD có mức giá vô cùng hấp dẫn. Chỉ từ 3 triệu đồng , các bạn có thể sở hữu ngay một bộ máy tính đáp ứng đầy đủ nhu cầu làm việc, học tập, giải trí nhẹ nhàng với thiết kế vô cùng nhỏ gọn, đơn giản nhưng không kém phần hiện đại. </span>
							<br><br>
							<img src="https://www.hanoicomputer.vn/media/lib/mytnhvnphngacer.jpg" style="width: 800px;">
							<br><br>
							<P>LAPWORLD với gần 20 năm phát triển kinh doanh các mặt hàng về công nghệ, thiết bị tin học. Chúng tôi đã đồng hành, cung cấp máy tính văn phòng cho hàng ngàn đơn vị và doanh nghiệp tại Hà Nội và cả nước. Đến với HANOICOMPUTER, bạn sẽ được chúng tôi tư vấn, đem lại giải pháp máy tính để bàn văn phòng với cấu hình phù hợp nhất, giá thành hợp lý nhất cho tất cả khách hàng từ doanh nghiệp đến cá nhân.</P><br>
							<p>Chúng tôi cam kết bất kì bộ máy tính cây văn phòng bán ra đều là các sản phẩm mới chính hãng 100%, có đầy đủ giấy tờ, hóa đơn nguồn gốc xuất xứ rõ ràng, được bảo hành chính hãng từ 1 - 3 năm. Ngoài ra, khi mua hàng tại LAPWORLD, quý khách hàng còn được cung cấp các dịch vụ số một kèm theo:</p><br>
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