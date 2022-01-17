<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dang_nhap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Đăng nhập</title>
</head>

<body>
    <?php
    include("../them,sua,xoa/product/connect.php");
    if (isset($_POST["btn_submit"])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt tấn công sql injection
        $email = strip_tags($email);
        $email = addslashes($email); // sử dụng hàm addlashes để loại bỏ các kí tự dư thừa
        $password = strip_tags($password);
        $password = addslashes($password);
        
            $sql = "select * from infor_user where email ='$email' and mat_khau ='$password' ";
            $query = mysqli_query($ketnoi, $sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows > 0) {
                echo "<script> window.location.assign('../php/user_detail.php'); </script>";
            } else { ?>
                <script>
                    alert("Email hoặc mật khẩu không chính xác!");
                </script>
    <?php }
        }
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5">

                <form action="" method="POST">
                    <div class="row justify-content-center form_main">
                        <div class="my-4 ">
                            <h5>Đăng nhập vào LapWorld</h5>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn_login" name="btn_submit">Đăng nhập</button>
                        <br>
                        <div class="d-flex justify-content-between my-2"><a href="/forgot-password" class=""><small>Quên mật khẩu?</small></a> &nbsp; / &nbsp;
                            <a href="dang_ky.php" class=""><small>Tạo tài khoản</small></a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between my-4">
                        <hr class="flex-fill m-0"> <span class="mx-3">
                            Đăng nhập bằng
                        </span>
                        <hr class="flex-fill m-0">
                    </div>
                    <div class="row login_btn_by">
                        <a href="#" class="btn btn-primary btn_by" role="button" aria-pressed="true"><i class="fab fa-google"></i>&nbsp;Google</a>
                        <a href="#" class="btn btn-primary btn_by" role="button" aria-pressed="true"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
                        <a href="#" class="btn btn-primary btn_by" role="button" aria-pressed="true"><i class="fa fa-comment"></i>&nbsp;Zalo</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>