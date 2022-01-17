<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/searchbar_khi_scroll.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
</head>

<body>
  <?php
  include("php/searchbar_khi_scroll.html");
  include("them,sua,xoa/product/connect.php");
  include("php/scrolltop.html");
  ?>

  <div class="header">
    <div class="col-3">
      <!------- Logo------->
      <img src="images/logoweb.png" class="img-fluid" alt="" style="margin: 15px 15px; height: 130px; width: 220px;">
    </div>
    <div class="col-9">
      <!-------User action --------->
      <div class="user-action">
        <div class="user-action-hotline">
          <div class="user-action-hotline-title"> <span class="icon-phone"><i class="fa fa-phone"></i></span> <span class="header-hotline"> Mua hàng online <b>1900.1905</b> </span> </div>
          <div class="user-action-item">
            <div class="item"> <a href="#"> <span class="hotline-number">1</span> <span>Mua hàng trực tuyến (8h - 21h)</span> </a> </div>
            <div class="item"> <a href="#"> <span class="hotline-number">2</span> <span>Hỗ trợ kỹ thuật (8h - 21h)</span> </a> </div>
            <div class="item"> <a href="#"> <span class="hotline-number">3</span> <span>Dịch vụ kỹ thuật - bảo hành (8h - 17h30)</span> </a> </div>
            <div class="item"> <a href="#"> <span class="hotline-number">4</span> <span>Chăm sóc khách hàng (7h - 17h30)</span> </a> </div>
          </div>
        </div>
        <div class="line-doc"></div>
        <div class="user-action-login">
          <div class="user-action-login-item">
            <div class="user-action-login-item-title"> <span class="icon-user"><i class="fa fa-user"></i></span> <span class="header-signin"> Đăng ký<br> Đăng nhập </span></div>
            <div class="user-action-login-item-hover"> <span class="login"> <a href="form register/dang_nhap.php">Đăng nhập</a>
                                                                            <a href="form register/dang_ky.php">Đăng ký</a>
              </span> <a href="#">
                <div class="login-google">
                  <div class="icon-login"><i class="fa fa-google"></i></div>
                  <div class="login-txt">Đăng nhập bằng Google</div>
                </div>
              </a> <a href="#">
                <div class="login-fb">
                  <div class="icon-login"><i class="fa fa-facebook"></i></div>
                  <div class="login-txt">Đăng nhập bằng Facebook</div>
                </div>
              </a> <a href="#">
                <div class="login-zalo">
                  <div class="icon-login"><i class="fa fa-comment"></i></div>
                  <div class="login-txt">Đăng nhập bằng Zalo</div>
                </div>
              </a> </div>
          </div>
        </div>
        <div class="line-doc"></div>
        <div class="user-action-card">
          <div class="user-action-inforcard"> <span class="icon-bag"><i class="fa fa-shopping-bag"></i></span> <a href="php/add_cart.php">Giỏ hàng</a> </div>
          <div class="user-action-card-total">
            <p class="total"><b>Tổng cộng</b> : <span class="red">0 <u>đ</u></span></p>
            <span class="checkout"> <a href="#">Thanh toán ngay</a></span>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col">
        <form class="form-inline my-2 my-lg-0" action="php/search.php" method="get">
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Nhập tên sản phẩm, từ khóa cần tìm" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem"><i class="fa fa-search"></i></button>
        </form>
        <div class="infor-button">
          <p><a href="#"><i class="fa fa-rss"></i>&nbsp; Tin công nghệ</a></p>
          <p><a href="#"><i class="fa fa-tags"></i>&nbsp; Khuyến mại</a></p>
        </div>
      </div>
    </div>
  </div>
  <!------nav--------->
  <div class="wrapper">
    <nav class="menu">
      <ul class="clearfix">
        <li><a href="index.php">Trang chủ</a></li>
        <li>
          <a href="#">Danh mục sản phẩm <span class="arrow">&#9660;</span></a>
          <ul class="sub-menu">
            <li><a href="php/Laptop,maytinhxachtay.php"><i class="fa fa-laptop"></i>&nbsp; Laptop, Máy tính xách tay</a></li>
            <li><a href="#"><i class="fa fa-usb" style="font-size: smaller"></i>&nbsp; Phụ kiện laptop, PC, khác</a></li>
            <li><a href="#"><i class="fa fa-desktop"></i>&nbsp; PC Gaming, Streaming</a></li>
            <li><a href="#"><i class="fa fa-server"></i>&nbsp; PC đồ họa, máy chủ</a></li>
            <li><a href="php/PC_vanphong,mini_PC.php"><i class="fa fa-desktop"></i>&nbsp; PC văn phòng, mini PC</a></li>
            <li><a href="#"><i class="fa fa-microchip"></i>&nbsp; Linh kiện máy tính</a></li>
            <li><a href="#"><i class="fa fa-desktop"></i>&nbsp; Màn hình máy tính</a></li>
            <li><a href="#"><i class="fa fa-microphone"></i>&nbsp; Loa, tai nghe, mic, webcam</a></li>
            <li><a href="php/camera_quansat.php"><i class="fa fa-video-camera"></i>&nbsp; Camera, TB an ninh</a></li>
            <li><a href="#"><i class="fa fa-save"></i>&nbsp; Thiết bị lưu trữ, USB, thẻ</a></li>
          </ul>
        </li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
        <li><a href="#">Trợ giúp</a></li>
      </ul>
    </nav>
  </div>

  <!---------Header Responsiv --------->
  <div class="header2">
    <div class="col-3">
      <!------- Logo------->
      <img src="../images/logoweb.png" class="img-fluid" alt="" style="margin: 15px 15px; height: 130px; width: 220px;">
    </div>
    <div class="col-9">
      <div class="user-action-login-item-title"> <span class="icon-user"><i class="fa fa-user" style="font-size: 30px;"></i></span> <span class="signin"> <a href="form register/dang_ky.php">Đăng ký</a> <a href="form register/dang_nhap.php">Đăng nhập</a> </span> </div>
      <div class="line-doc"></div>
      <div class="user-action-inforcard"> <span class="icon-bag"><i class="fa fa-shopping-bag"  style="font-size: 30px;"></i></span> <a href="php/add_cart.php">Giỏ hàng</a> </div>
    </div>
  </div>
  <div class="navig">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <form class="form-inline" action="php/search.php" method="get">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Nhập từ khóa cần tìm" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem"><i class="fa fa-search"></i></button>
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Danh mục sản phẩm
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="php/Laptop,maytinhxachtay.php"><i class="fa fa-laptop"></i>&nbsp; Laptop, Máy tính xách tay</a>
              <a class="dropdown-item" href="#"><i class="fa fa-usb" style="font-size: smaller"></i>&nbsp; Phụ kiện laptop, PC, khác</a>
              <a class="dropdown-item" href="#"><i class="fa fa-desktop"></i>&nbsp; PC Gaming, Streaming</a>
              <a class="dropdown-item" href="#"><i class="fa fa-server"></i>&nbsp; PC đồ họa, máy chủ</a>
              <a class="dropdown-item" href="php/PC_vanphong,mini_PC.php"><i class="fa fa-desktop"></i>&nbsp; PC văn phòng, mini PC</a>
              <a class="dropdown-item" href="#"><i class="fa fa-microchip"></i>&nbsp; Linh kiện máy tính</a>
              <a class="dropdown-item" href="#"><i class="fa fa-desktop"></i>&nbsp; Màn hình máy tính</a>
              <a class="dropdown-item" href="#"><i class="fa fa-microphone"></i>&nbsp; Loa, tai nghe, mic, webcam</a>
              <a class="dropdown-item" href="php/camera_quansat.php"><i class="fa fa-video-camera"></i>&nbsp; Camera, TB an ninh</a>
              <a class="dropdown-item" href="#"><i class="fa fa-save"></i>&nbsp; Thiết bị lưu trữ, USB, thẻ</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Liên hệ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Trợ giúp</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <main>
    <!-------slide show banner  max width = 576px-------->
    <div class="slide-show">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/13_May9c2aeb433f29955747262743a48dfe57.jpg" alt=""> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/17_May209be90077b2f8e4b01be34e5f1742c4.jpg" alt=""> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/20_Mayb15c99cdea3bd9dc727922b4c7dc75da.jpg" alt=""> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/03_May6536796430d644186d56b0e05039595a.png" alt=""> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/13_Maye0d87bef9194806d10a8931f6502b906.jpg" alt=""> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      </div>
    </div>

    <!-------slide show banner  (min-width: 991.98px) and (max-width: 1199.98px)-------->
    <div class="slide-show2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/13_May9c2aeb433f29955747262743a48dfe57.jpg" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/17_May209be90077b2f8e4b01be34e5f1742c4.jpg" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/20_Mayb15c99cdea3bd9dc727922b4c7dc75da.jpg" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/03_May6536796430d644186d56b0e05039595a.png" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/13_Maye0d87bef9194806d10a8931f6502b906.jpg" alt=""> </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
          </div>
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/19_May8558fd748768ebe2c92f3b3d9b74df07.png" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/27_May77ee6961a012de260a7337b7403b81f4.png" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/19_Mayac21e6bee674c1af7c1c38d3151b6796.png" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/19_May955a4f7c7379d1be6bba1ad53cc90ee6.png" alt=""> </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-------slide show banner  min width = 1200px-------->
    <div class="slide-show3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/13_May9c2aeb433f29955747262743a48dfe57.jpg" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/17_May209be90077b2f8e4b01be34e5f1742c4.jpg" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/20_Mayb15c99cdea3bd9dc727922b4c7dc75da.jpg" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/03_May6536796430d644186d56b0e05039595a.png" alt=""> </div>
                <div class="carousel-item"> <img class="d-block w-100" src="https://hanoicomputercdn.com/media/banner/13_Maye0d87bef9194806d10a8931f6502b906.jpg" alt=""> </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
          </div>
          <div class="col">
            <div class="banner-picture"> <img class="img-fluid" src="https://hanoicomputercdn.com/media/banner/19_May8558fd748768ebe2c92f3b3d9b74df07.png"> <img class="img-fluid" src="https://hanoicomputercdn.com/media/banner/27_May77ee6961a012de260a7337b7403b81f4.png"> <img class="img-fluid" src="https://hanoicomputercdn.com/media/banner/19_Mayac21e6bee674c1af7c1c38d3151b6796.png"> <img class="img-fluid" src="https://hanoicomputercdn.com/media/banner/19_May955a4f7c7379d1be6bba1ad53cc90ee6.png"> </div>
          </div>
        </div>
      </div>
    </div>
    <!---------main ---------->
    <!------- min width = 990px-------->
    <div class="laptop">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="col-sm-9 col-lg-4">
              <p>LAPTOP, MÁY TÍNH XÁCH TAY</p>
            </div>
            <div class="col-sm-6 col-lg-6"> <a href="#"> Laptop Asus </a>
              <div class="linedoc"></div>
              <a href="#">Laptop Dell</a>
              <div class="linedoc"></div>
              <a href="#">Laptop HP</a>
              <div class="linedoc"></div>
              <a href="#">Laptop Lenovo</a>
              <div class="linedoc"></div>
              <a href="#">Laptop Acer</a>
              <div class="linedoc"></div>
              <a href="#">Laptop MSI</a>
            </div>
            <div class="col-sm-3 col-lg-2"> <a href="php/Laptop,maytinhxachtay.php">Xem tất cả</a> </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <?php
            $sql = "SELECT * FROM mat_hang_laptop ORDER BY RAND ( ) LIMIT 6";
            $data = mysqli_query($ketnoi, $sql);
            while ($row = mysqli_fetch_array($data)) {
            ?>
              <form method="post" action="php/add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="card"> <img class="card-img-top" src="images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
                    <!--<p class="card-text">Some quick </p>-->
                    <p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
                    <p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
                    <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                    <input type="hidden" name="quantity" value="1" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                    <span style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span> <span>
                      <button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 20px;'></i></button>
                    </span>
                  </div>
                </div>
              </form>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="line"></div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="col-sm-9 col-lg-4">
              <p>PC VĂN PHÒNG, MINI PC</p>
            </div>
            <div class="col-sm-6 col-lg-6"> <a href="#"> Máy tính để bàn Dell </a>
              <div class="linedoc"></div>
              <a href="#">Máy tính để bàn HP</a>
              <div class="linedoc"></div>
              <a href="#">Máy tính để bàn Asus </a>
              <div class="linedoc"></div>
              <a href="#">Máy tính để bàn Lenovo</a>
              <div class="linedoc"></div>
              <a href="#">Máy tính để bàn Acer</a>
            </div>
            <div class="col-sm-3 col-lg-2"> <a href="php/PC_vanphong,mini_PC.php">Xem tất cả</a> </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <?php
            $sql = "SELECT * FROM pc_van_phong ORDER BY RAND ( ) LIMIT 6";
            $data = mysqli_query($ketnoi, $sql);
            while ($row = mysqli_fetch_array($data)) {
            ?>
              <form method="post" action="php/add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="card"> <img class="card-img-top" src="images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
                    <!--<p class="card-text">Some quick </p>-->
                    <p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
                    <p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
                    <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                    <input type="hidden" name="quantity" value="1" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                    <span style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span> <span>
                      <button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 20px;'></i></button>
                    </span>
                  </div>
                </div>
              </form>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="line"></div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="col-sm-9 col-lg-4">
              <p>CAMERA QUAN SÁT</p>
            </div>
            <div class="col-sm-6 col-lg-6"> <a href="#"> Camera quan sát </a>
              <div class="linedoc"></div>
              <a href="#">Đầu ghi hình KTS</a>
              <div class="linedoc"></div>
              <a href="#">Phụ kiện Camera</a>
              <div class="linedoc"></div>
              <a href="#">Ổ cứng Camera</a>
            </div>
            <div class="col-sm-3 col-lg-2"> <a href="php/camera_quansat.php">Xem tất cả</a> </div>
          </div>
          <div class="w-100"></div>
          <div class="col">
            <?php
            $sql = "SELECT * FROM camera_quansat ORDER BY RAND ( ) LIMIT 6";
            $data = mysqli_query($ketnoi, $sql);
            while ($row = mysqli_fetch_array($data)) {
            ?>
              <form method="post" action="php/add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="card"> <img class="card-img-top" src="images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
                    <!--<p class="card-text">Some quick </p>-->
                    <p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
                    <p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
                    <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                    <input type="hidden" name="quantity" value="1" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                    <span style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span> <span>
                      <button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 20px;'></i></button>
                    </span>
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

    <!------- max width = 990px-------->
    <div class="laptop_2">
      <div class="row">
        <div class="col">
          <div class="col-sm-9 col-lg-4">
            <p>LAPTOP, MÁY TÍNH XÁCH TAY</p>
          </div>
          <div class="col-sm-6 col-lg-6"> <a href="#"> Laptop Asus </a>
            <div class="linedoc"></div>
            <a href="#">Laptop Dell</a>
            <div class="linedoc"></div>
            <a href="#">Laptop HP</a>
            <div class="linedoc"></div>
            <a href="#">Laptop Lenovo</a>
            <div class="linedoc"></div>
            <a href="#">Laptop Acer</a>
            <div class="linedoc"></div>
            <a href="#">Laptop MSI</a>
          </div>
          <div class="col-sm-3 col-lg-2"> <a href="php/Laptop,maytinhxachtay.php">Xem tất cả</a> </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
          <?php
          $sql = "SELECT * FROM mat_hang_laptop ORDER BY RAND ( ) LIMIT 6";
          $data = mysqli_query($ketnoi, $sql);
          while ($row = mysqli_fetch_array($data)) {
          ?>
            <form method="post" action="php/add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
              <div class="card"> <img class="card-img-top" src="images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
                  <!--<p class="card-text">Some quick </p>-->
                  <p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
                  <p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
                  <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                  <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                  <input type="hidden" name="quantity" value="1" />
                  <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                  <span id="tinhtrang" style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span> <span>
                    <button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 35px;'></i></button>
                  </span>
                </div>
              </div>
            </form>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="line"></div>
      <div class="row">
        <div class="col">
          <div class="col-sm-9 col-lg-4">
            <p>PC VĂN PHÒNG, MINI PC</p>
          </div>
          <div class="col-sm-6 col-lg-6"> <a href="#"> Máy tính để bàn Dell </a>
            <div class="linedoc"></div>
            <a href="#">Máy tính để bàn HP</a>
            <div class="linedoc"></div>
            <a href="#">Máy tính để bàn Asus </a>
            <div class="linedoc"></div>
            <a href="#">Máy tính để bàn Lenovo</a>
            <div class="linedoc"></div>
            <a href="#">Máy tính để bàn Acer</a>
          </div>
          <div class="col-sm-3 col-lg-2"> <a href="php/PC_vanphong,mini_PC.php">Xem tất cả</a> </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
          <?php
          $sql = "SELECT * FROM pc_van_phong ORDER BY RAND ( ) LIMIT 6";
          $data = mysqli_query($ketnoi, $sql);
          while ($row = mysqli_fetch_array($data)) {
          ?>
            <form method="post" action="php/add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
              <div class="card"> <img class="card-img-top" src="images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
                  <!--<p class="card-text">Some quick </p>-->
                  <p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
                  <p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
                  <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                  <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                  <input type="hidden" name="quantity" value="1" />
                  <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                  <span id="tinhtrang" style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span> <span>
                    <button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 35px;'></i></button>
                  </span>
                </div>
              </div>
            </form>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="line"></div>
      <div class="row">
        <div class="col">
          <div class="col-sm-9 col-lg-4">
            <p>CAMERA QUAN SÁT</p>
          </div>
          <div class="col-sm-6 col-lg-6"> <a href="#"> Camera quan sát </a>
            <div class="linedoc"></div>
            <a href="#">Đầu ghi hình KTS</a>
            <div class="linedoc"></div>
            <a href="#">Phụ kiện Camera</a>
            <div class="linedoc"></div>
            <a href="#">Ổ cứng Camera</a>
          </div>
          <div class="col-sm-3 col-lg-2"> <a href="php/camera_quansat.php">Xem tất cả</a> </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
          <?php
          $sql = "SELECT * FROM camera_quansat ORDER BY RAND ( ) LIMIT 6";
          $data = mysqli_query($ketnoi, $sql);
          while ($row = mysqli_fetch_array($data)) {
          ?>
            <form method="post" action="php/add_cart.php?action=add&id=<?php echo $row["id"]; ?>">
              <div class="card"> <img class="card-img-top" src="images/<?php echo $row['anh_sp'] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="php/detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_sp'] ?></a></h5>
                  <!--<p class="card-text">Some quick </p>-->
                  <p id='giacu'><?php echo number_format($row['gia_cu'], 6) ?>đ</p>
                  <p id='giamoi'><?php echo number_format($row['gia_moi'], 6) ?>đ </p>
                  <input type="hidden" name="hidden_anh" value="<img src = '../images/<?php echo $row["anh_sp"]; ?>' style='width: 180px; height: 180px;'>">
                  <input type="hidden" name="hidden_name" value="<?php echo $row["ten_sp"]; ?>" />
                  <input type="hidden" name="quantity" value="1" />
                  <input type="hidden" name="hidden_price" value="<?php echo $row["gia_moi"]; ?>" />
                  <span id="tinhtrang" style="color: #2E9AFE;"><?php echo $row['tinh_trang']; ?> </span> <span>
                    <button type="submit" name="add_to_cart" style='color: grey; float: right; margin-right: 15px; background-color: white; border: none; cursor: pointer;'> <i class="fa fa-shopping-cart" style='font-size: 35px;'></i></button>
                  </span>
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
  include("php/footer.html");
  ?>
</body>
<!--phan xu ly javascript-->
<script language="javascript" src="home.js"></script>

</html>