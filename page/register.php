<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ky tài khoản</title>
    <link rel="stylesheet" href="../css/page/reset_css.css">
    <link rel="stylesheet" href="../css/page/login.css">
</head>

<body>
    <div class="container">
        <img src="../img/banner/banner_1.jpg" alt="">
        <h4>Đăng ký tài khoản FParking</h4>
        <form action="" method="post">

            <div class="form-control">
                <label for="">Tên tài khoản: </label>
                <input type="text" placeholder="" id="user">
                <span class="messages"></span>
            </div>

            <div class="form-control">
                <label for="">Địa chỉ mail: </label>
                <input type="mail" placeholder="" id="mail">
                <span class="messages"></span>
            </div>

            <div class="form-control">
                <label for="">Số điện thoại: </label>
                <input type="text" placeholder="" id="phone">
                <span class="messages"></span>
            </div>

            <div class="form-control">
                <label for="">Mật khẩu: </label>
                <input type="t" placeholder="" id="pass">
                <span class="messages"></span>
            </div>

            <div class="form-control">
                <label for="">Nhập lại mật khẩu: </label>
                <input type="t" placeholder="" id="repass">
                <span class="messages"></span>
            </div>
            <div class="btn">
                <button class="" id="register-submit">ĐĂNG KÝ</button>
            </div>

        </form>
        Bạn đã có tài khoản?
        <a href="login.php"> Đăng nhập ngay</a>
    </div>
    <div id="load_ajax">

    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/ajaxHandleData/ajaxRegister.js"></script>
</body>

</html>