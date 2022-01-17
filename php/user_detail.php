<?php
session_start();
include("process_cart.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/user_detail.css">
	<link rel="stylesheet" type="text/css" href="../css/scrolltop.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
	<title>Giỏ hàng</title>
</head>

<body>
	<?php
	include("header.html");
	include("searchbar_khi_scroll.html");
	include("../them,sua,xoa/product/connect.php");
	include("scrolltop.html");
	?>
	<main>
		<?php
		$sql = "SELECT ho_ten FROM infor_user";
		$data = mysqli_query($ketnoi, $sql);
		$row = mysqli_fetch_array($data)
		?>


		<div class="cart_detail">
			<nav class="container navbar navbar-light bg-light">
				<span class="navbar-text">
					<a class="navbar-brand" href="#">
						<img src="../images/user-interface_login.png" width="30" height="30" alt="">
					</a>

					Xin chào <?php echo $row["ho_ten"]; ?> !
				</span>
				<a href="../index.php" id="btn_signout"><i class="fa fa-sign-out"></i>&nbsp;Đăng xuất</a>
			</nav>
			<h4>Chi tiết giỏ hàng</h4>
			<table class="container table table-hover">
				<thead>
					<tr>
						<th scope="col" width="15%">Ảnh sản phẩm</th>
						<th scope="col" width="35%">Tên sản phẩm</th>
						<th scope="col" width="10%">Số lượng</th>
						<th scope="col" width="12%">Giá</th>
						<th scope="col" width="18%">Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (!empty($_SESSION["shopping_cart"])) {
						$total = 0;
						foreach ($_SESSION["shopping_cart"] as $keys => $values) {
					?>
							<tr>
								<td style="width: 180px; height: 180px;"><?php echo $values["item_anh"]; ?></td>
								<td><?php echo $values["item_name"]; ?></td>
								<td><?php echo $values["item_quantity"]; ?></td>
								<td><?php echo number_format($values["item_price"], 6) ?> VNĐ</td>
								<td><?php echo $values["item_quantity"] ?> * <?php echo number_format($values["item_price"], 6) ?> VNĐ </td>
								<td><a href="add_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class="fa fa-trash" style='font-size: 30px;'></i></span></a></td>
							</tr>
						<?php
							$total += ($values["item_quantity"] * $values["item_price"]);
						}
						?>
						<tr>
							<td colspan="4" float="right"> Tổng tiền:&nbsp;<?php echo number_format($total, 6); ?>&nbsp; VNĐ</td>
							<td colspan="2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thanh toán</button>
								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Thanh toán qua số tài khoản 0020118070548 MBBank
												<br>
												Cho 1 like 1 share 1 khen đê :)
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>

		<!--Responsive cart max width: 992px--------------------->
		<div class="cart_detail_2">
			<nav class="navbar navbar-light bg-light">
				<span class="navbar-text">
					<a class="navbar-brand" href="#">
						<img src="../images/user-interface_login.png" width="30" height="30" alt="">
					</a>

					Xin chào <?php echo $row["ho_ten"]; ?> !
				</span>
				<a href="../index.php" id="btn_signout"><i class="fa fa-sign-out"></i>&nbsp;Đăng xuất</a>
			</nav>
			<h3>Chi tiết giỏ hàng</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col" width="55%">Tên sản phẩm</th>
						<th scope="col" width="15%">Số lượng</th>
						<th scope="col" width="20%">Giá</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (!empty($_SESSION["shopping_cart"])) {
						$total = 0;
						foreach ($_SESSION["shopping_cart"] as $keys => $values) {
					?>
							<tr>
								<td style="max-width: 280px; max-height: 280px;"><?php echo $values["item_anh"]; ?></br>
									<?php echo $values["item_name"]; ?>
								</td>
								<td><?php echo $values["item_quantity"]; ?></td>
								<td><?php echo number_format($values["item_price"], 6) ?> VNĐ</td>
								<td><a href="add_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class="fa fa-trash" style='font-size: 45px;'></i></span></a></td>
							</tr>
						<?php
							$total += ($values["item_quantity"] * $values["item_price"]);
						}
						?>
						<tr>
							<td colspan="2" float="right"> Tổng tiền:&nbsp;<?php echo number_format($total, 6); ?>&nbsp; VNĐ</td>
							<td colspan="2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Thanh toán</button>
								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Thanh toán qua số tài khoản 0020118070548 MBBank
												<br>
												Cho 1 like 1 share 1 khen đê :)
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</main>
	<?php
	include("footer.html");
	?>
</body>

</html>