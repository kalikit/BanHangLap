<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" type="text/css" href="../css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
    <title>Chi tiết sản phẩm</title>
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
        $sql = "SELECT * FROM mat_hang_laptop where id = '$_GET[id]'  union select * from pc_van_phong where id = '$_GET[id]' union select * from camera_quansat where id = '$_GET[id]'";
        $data = mysqli_query($ketnoi, $sql);
        $row = mysqli_fetch_array($data);
        ?>
        
                <div class="name_prod">
                    <?php
                    echo $row['ten_sp'];
                    ?>
                </div>
        <div class="line_ngang"></div>
        <!--------Responsive desktop -------------->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-5 col-12">

                    <div class="anh_sp">
                        <img src="../images/<?php echo $row['anh_sp'] ?>">

                    </div>

                </div>
                <div class="col-xl-5 col-lg-7 col-12">

                    <div>
                        <div class="listitem1">
                            <p id="masp">Mã sản phẩm: <?php echo $row['ma_sp']; ?></p>
                            <div class="line_doc"></div>
                            <p id="vote">Đánh giá: </p>
                        </div>
                        <div class="item2_title">Thông số sản phẩm</div>
                        <div class="item2_contain">
                           <pre><?php echo $row['infor_sp']; ?></pre>
                        </div>
                        <div class="price_product">
                            <span id="newprice"> <?php echo number_format($row['gia_moi'], 6) ?>đ</span>
                            <span id="oldprice"><?php echo number_format($row['gia_cu'], 6) ?>đ</span>
                        </div>
                        <div class="item2_gift">
                            <div class="item2_gift_title">Quà tặng và ưu đãi kèm theo</div>
                            <div class="line_ngang2"></div>
                            <div class="item2_gift_contain">
                                <span>BỘ QUÀ TẶNG TRỊ GIÁ 1.400.000Đ</span><br>
                                &nbsp; + Chuột không dây trị giá <span> 169.000đ </span>(MEKN004)<br>
                                &nbsp; + Tấm lót chuột trị giá <span> 49.000đ </span>(PADM635/639)<br>
                                &nbsp; + Bộ vệ sinh Laptop trị giá <span>39.000đ </span>(NUOC002)<br>
                                &nbsp; + Túi đựng Laptop trị giá <span>149.000đ </span>(CAPD061)<br>
                                &nbsp; + Mua Online từ 08/06 - 30/06 : tặng voucher giảm giá<span> 200.000đ</span> được quy đổi tiền mặt.<br>
                                &nbsp; + Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn phí trọn đời trị giá <span>999.000đ</span> (THEK417)<br>

                                &nbsp; + Giảm giá <span>100.000 đ </span>khi mua Cặp Laptop Coolbel CB-2082 (CAPD145/CAPD146)<br>
                                &nbsp; + Giảm giá <span>100.000 đ</span> khi mua Balo Coolbell CB-7012 (BALO534/BALO535/BALO536)<br>
                                &nbsp; + Giảm giá <span>100.000 đ</span> khi mua Balo Coolbell CB 8001 (BALO467/BALO468/BALO469)<br>

                                &nbsp; + MIỄN PHÍ GIAO HÀNG TOÀN QUỐC (trừ ghế, bàn, màn chiếu) đến hết 30/6/2021. <a href=""> Chi tiết xem tại đây.</a>
                            </div>
                        </div>
                        <div class="item3_cart">
                            <div>
                                Số lượng: &nbsp;
                                <button onclick="IncreaClick()" style="border: 1px solid black; width: 30px; height: 30px; cursor: pointer;"><i class="fa fa-plus"></i></button>
                                <input type="text" id="inc" value="1" style="width: 40px; height: 30px; text-align: center;padding: 5px 10px;"></input>
                                <button onclick="DecreaClick()" style="border: 1px solid black; width: 30px; height: 30px; cursor: pointer;"><i class="fa fa-minus"></i></button>
                            </div>
                            <script>
                                var i = 0;

                                function IncreaClick() {
                                    document.getElementById('inc').value = ++i;
                                }

                                function DecreaClick() {
                                    if (i > 1) {
                                        document.getElementById('inc').value = --i;
                                    }
                                }
                            </script>
                            <form method="post" action="add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                                <button id ="addcart" type="submit" name="add_to_cart" style=' margin-right: 15px; background-color: #A9D0F5; cursor: pointer; padding: 8px; border-radius: 5px;'> <i class="fa fa-shopping-cart" style='font-size: 20px;'>&nbsp;Thêm vào giỏ hàng</i></button>
                            </form>
                        </div>
                        <div class="buy_now"><a href="#">Đặt mua ngay</a></div>
                        <div class="buywith"><a href="#"> Trả góp qua thẻ visa, master...</a></div>
                    </div>

                </div>
                <div class="col-xl-4">

                    <div class="area3_contain">
                        <div class="area3_title">Sản phẩm đang có sẵn tại</div>
                        <div class="line_ngang3"></div>
                        <div class="area3_content">
                            <a href="" style="text-decoration: none;"><i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Liên hệ</a>
                        </div>
                    </div>

                    <div class="area3_contain">
                        <div class="area3_title">Yên tâm mua hàng</div>
                        <div class="line_ngang3"></div>
                        <div class="area3_content">
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; TOP 2 Nhà bán lẻ IT lớn nhất Việt Nam<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Uy tín 20 năm xây dựng và phát triển<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Sản phẩm chính hãng 100%<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Đổi trả hàng miễn phí trong 3 ngày<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Trả góp lãi suất 0% toàn bộ giỏ hàng<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Trả bảo hành tận nơi sử dụng<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Bảo hành tận nơi cho doanh nghiệp<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Ưu đãi riêng cho học sinh sinh viên<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Vệ sinh miễn phí trọn đời PC, Laptop
                        </div>
                    </div>

                    <div class="area3_contain">
                        <div class="area3_title">Miễn phí giao hàng</div>
                        <div class="line_ngang3"></div>
                        <div class="area3_content">
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Giao hàng siêu tốc trong 2h<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Giao hàng miễn phí toàn quốc<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Nhận hàng và thanh toán tại nhà (ship COD)
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--------Responsive mobile -------------->
        <div class="container_2">
            <div class="row">
                <div class="col-xl-3 col-lg-5 col-12">

                    <div class="anh_sp">
                        <img src="../images/<?php echo $row['anh_sp'] ?>">

                    </div>

                </div>
                <div class="col-xl-5 col-lg-7 col-12">

                    <div>
                        <div class="listitem1">
                            <p id="masp">Mã sản phẩm: <?php echo $row['ma_sp']; ?></p>
                            <div class="line_doc"></div>
                            <p id="vote">Đánh giá: </p>
                        </div>
                        <div class="item2_title">Thông số sản phẩm</div>
                        <div class="item2_contain">
                            <pre><?php echo $row['infor_sp']; ?></pre>
                        </div>
                        <div class="price_product">
                            <span id="newprice"> <?php echo number_format($row['gia_moi'], 6) ?>đ</span>
                            <span id="oldprice"><?php echo number_format($row['gia_cu'], 6) ?>đ</span>
                        </div>
                        <div class="item2_gift">
                            <div class="item2_gift_title">Quà tặng và ưu đãi kèm theo</div>
                            <div class="line_ngang2"></div>
                            <div class="item2_gift_contain">
                                <span>BỘ QUÀ TẶNG TRỊ GIÁ 1.400.000Đ</span><br>
                                &nbsp; + Chuột không dây trị giá <span> 169.000đ </span>(MEKN004)<br>
                                &nbsp; + Tấm lót chuột trị giá <span> 49.000đ </span>(PADM635/639)<br>
                                &nbsp; + Bộ vệ sinh Laptop trị giá <span>39.000đ </span>(NUOC002)<br>
                                &nbsp; + Túi đựng Laptop trị giá <span>149.000đ </span>(CAPD061)<br>
                                &nbsp; + Mua Online từ 08/06 - 30/06 : tặng voucher giảm giá<span> 200.000đ</span> được quy đổi tiền mặt.<br>
                                &nbsp; + Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn phí trọn đời trị giá <span>999.000đ</span> (THEK417)<br>

                                &nbsp; + Giảm giá <span>100.000 đ </span>khi mua Cặp Laptop Coolbel CB-2082 (CAPD145/CAPD146)<br>
                                &nbsp; + Giảm giá <span>100.000 đ</span> khi mua Balo Coolbell CB-7012 (BALO534/BALO535/BALO536)<br>
                                &nbsp; + Giảm giá <span>100.000 đ</span> khi mua Balo Coolbell CB 8001 (BALO467/BALO468/BALO469)<br>

                                &nbsp; + MIỄN PHÍ GIAO HÀNG TOÀN QUỐC (trừ ghế, bàn, màn chiếu) đến hết 30/6/2021. <a href=""> Chi tiết xem tại đây.</a>
                            </div>
                        </div>
                        <div class="item3_cart">
                            <div>
                                Số lượng: &nbsp;
                                <button onclick="IncreaClick()" style="border: 1px solid black; max-width: 60px; max-height: 60px; cursor: pointer; padding: 5px 10px;"><i class="fa fa-plus"></i></button>
                                <input type="text" id="inc" value="1" style="max-width: 60px; max-height: 60px; text-align: center;padding: 5px 10px;"></input>
                                <button onclick="DecreaClick()" style="border: 1px solid black; max-width: 60px; max-height: 60px; cursor: pointer;padding: 5px 10px;"><i class="fa fa-minus"></i></button>
                            </div>
                            <script>
                                var i = 0;

                                function IncreaClick() {
                                    document.getElementById('inc').value = ++i;
                                }

                                function DecreaClick() {
                                    if (i > 1) {
                                        document.getElementById('inc').value = --i;
                                    }
                                }
                            </script>
                            <form method="post" action="add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                                <input type="hidden" name="quantity" value="1" />
                                <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                                <button id ="addcart" type="submit" name="add_to_cart" style=' margin-right: 15px; background-color: #A9D0F5; cursor: pointer; padding: 8px; border-radius: 5px;'> <i class="fa fa-shopping-cart" style='font-size: 35px;'>&nbsp;Thêm vào giỏ hàng</i></button>
                            </form>
                        </div>
                        <div class="buy_now"><a href="#">Đặt mua ngay</a></div>
                        <div class="buywith"><a href="#"> Trả góp qua thẻ visa, master...</a></div>
                    </div>

                </div>
                <div class="col-xl-4">

                    <div class="area3_contain">
                        <div class="area3_title">Sản phẩm đang có sẵn tại</div>
                        <div class="line_ngang3"></div>
                        <div class="area3_content">
                            <a href="" style="text-decoration: none;"><i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Liên hệ</a>
                        </div>
                    </div>

                    <div class="area3_contain">
                        <div class="area3_title">Yên tâm mua hàng</div>
                        <div class="line_ngang3"></div>
                        <div class="area3_content">
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; TOP 2 Nhà bán lẻ IT lớn nhất Việt Nam<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Uy tín 20 năm xây dựng và phát triển<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Sản phẩm chính hãng 100%<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Đổi trả hàng miễn phí trong 3 ngày<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Trả góp lãi suất 0% toàn bộ giỏ hàng<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Trả bảo hành tận nơi sử dụng<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Bảo hành tận nơi cho doanh nghiệp<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Ưu đãi riêng cho học sinh sinh viên<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Vệ sinh miễn phí trọn đời PC, Laptop
                        </div>
                    </div>

                    <div class="area3_contain">
                        <div class="area3_title">Miễn phí giao hàng</div>
                        <div class="line_ngang3"></div>
                        <div class="area3_content">
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Giao hàng siêu tốc trong 2h<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Giao hàng miễn phí toàn quốc<br><br>
                            <i class="fa fa-circle" style="font-size: 5px;"></i>&ensp; Nhận hàng và thanh toán tại nhà (ship COD)
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Responsive min width: 992px------>
    <div class="laptop">
        <div class="title">
            <p>Sản phẩm tương tự</p>
        </div>
        <div class="line_ngang"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    $sql = "SELECT * FROM mat_hang_laptop union select * from pc_van_phong union select * from camera_quansat ORDER BY RAND ( ) LIMIT 10";
                    $data = mysqli_query($ketnoi, $sql);
					while ($row = mysqli_fetch_array($data)) { ?>
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
    </div>

    <!--Responsive max width: 992px------>
    <div class="laptop2">
        <div class="title">
            <p>Sản phẩm tương tự</p>
        </div>
        <div class="line_ngang"></div>
        
            <div class="row">
                <div class="col">
                    <?php
                    $sql = "SELECT * FROM mat_hang_laptop union select * from pc_van_phong union select * from camera_quansat ORDER BY RAND ( ) LIMIT 12";
                    $data = mysqli_query($ketnoi, $sql);
					while ($row = mysqli_fetch_array($data)) { ?>
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
            </div>
    </div>
    </main>

    <?php
    include("footer.html");
    ?>
</body>
</html>