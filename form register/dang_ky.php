<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="”viewport”" content="”width"="device-width," initial-scale="1.0″" />
  <link rel="stylesheet" href="dang_ky.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <title>Đăng ký</title>
</head>

<body>

  <div class="container contain">
    <div class="row justify-content-center">
      <div class="col-11 col-md-9 col-lg-7 col-xl-7">

        <form action="" method="POST">
          <div class="row justify-content-center form_main">

            <div class="my-4 ">
              <h5>Đăng ký vào LapWorld</h5>
            </div>

            <div class="col-10">

              <label for="validationCustom01">Họ tên</label>
              <input type="text" class="form-control" id="validationCustom01" required name="hoten">

              <label for="validationCustom01">Email</label>
              <input type="email" class="form-control" id="validationCustom01" required name="email">

              <label for="validationCustom01">Số điện thoại</label>
              <input type="text" class="form-control" id="validationCustom01" required name="sdt">

              <label for="validationCustom01">Mật khẩu</label>
              <input type="password" class="form-control" id="validationCustom01" required name="pass">

              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0 col-4">Giới tính</legend>
                  <div class="col-sm-2 col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Nam
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2 col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sex" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Nữ
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>

              <label for="validationCustom01">Ngày sinh</label>
              <select id="birthday" name="day">
                <option>Ngày</option>
                <script>
                  for (var i = 1; i <= 31; i++) {
                    document.write("<option value=\"" + i + "\">" + i + "</option>");
                  }
                </script>
              </select>
              <select id="birthday" name="">
                <option>Tháng</option>
                <script>
                  for (var j = 1; j <= 12; j++) {
                    document.write("<option value=\"" + j + "\">" + j + "</option>");
                  }
                </script>
              </select>
              <select id="birthday" name="">
                <option>Năm</option>
                <script>
                  var d = new Date();
                  var year = d.getFullYear();
                  for (var k = 1970; k <= year; k++) {
                    document.write("<option value=\"" + k + "\">" + k + "</option>");
                  }
                </script>
              </select>
              <br>
              <label for="validationCustom01">Địa chỉ</label>
              <input type="text" class="form-control" id="validationCustom01" required name="diachi">

              <label for="validationCustom01">Tỉnh/TP</label>
              <select id="location" name="locat">
                <option>Hà Nội</option>
                <option>Phú Thọ</option>
                <option>Nam Định</option>
                <option>Hải Dương</option>
                <option>Hà Nam</option>
                <option>Sơn La</option>
                <option>Hòa Bình</option>
                <option>Thái Bình</option>
                <option>TP Hồ Chí Minh</option>
                <option>Bình Dương</option>
                <option>Dăk Lăk</option>
                <option>Quảng Bình</option>
              </select>

            </div>

            <button type="submit" class="btn btn-primary btn_login" name="dangky">Đăng ký</button>

          </div>

          <div class="d-flex align-items-center justify-content-between my-4">
            <hr class="flex-fill m-0">
            <span class="mx-3">
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
        <?php
        include("../them,sua,xoa/user/connect_user.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['dangky'])) {

            $name = mysqli_escape_string($ketnoi, $_POST["hoten"]);
            $email = mysqli_escape_string($ketnoi, $_POST["email"]);
            $number = mysqli_escape_string($ketnoi, $_POST["sdt"]);
            $pass = mysqli_escape_string($ketnoi, $_POST["pass"]);
            $sex = mysqli_escape_string($ketnoi, $_POST["sex"]);
            $birth = mysqli_escape_string($ketnoi, $_POST["day"]);
            $add = mysqli_escape_string($ketnoi, $_POST["diachi"]);
            $location = mysqli_escape_string($ketnoi, $_POST["locat"]);
            $sql = "SELECT ho_ten FROM infor_user WHERE ho_ten='$name'";
            $query = mysqli_query($ketnoi, $sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows > 0) {
              $sql = "insert into infor_user(ho_ten,email,so_dt,mat_khau,gioi_tinh,ngay_sinh, dia_chi, tinh_tp) values('$name','$email','$number','$pass','$sex','$birth', '$add', '$location')";
              mysqli_query($ketnoi, $sql); ?>
              <script>
                alert("Đăng ký thành công!");
              </script>
            <?php
            } else { ?>
              <script>
                alert("Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác!");
              </script>
        <?php
            }
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>