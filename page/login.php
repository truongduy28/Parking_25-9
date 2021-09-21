<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập FParking</title>
    <link rel="stylesheet" href="../css/page/reset_css.css">
    <link rel="stylesheet" href="../css/page/login.css">
</head>

<body>
    <div class="container">
        <img src="../img/banner/banner_1.jpg" alt="">
        <h4>Đăng nhập vào FParking</h4>
        <form action="" method="post" id="login-submit">
            <div class="form-control">
                <label for="">Tên tài khoản: </label>
                <input type="text" placeholder="" id="user" name="user">
                <span class="messages"></span>
            </div>

            <div class="form-control">
                <label for="">Mật khẩu: </label>
                <input type="text" placeholder="" id="pass" name="pass">
                <span class="messages"></span>
            </div>

            <div class="btn">
                <button class="" id="">ĐĂNG NHẬP</button>
            </div>
        </form>
        Bạn chưa có tài khoản?
        <a href="register.php"> Đăng ký ngay</a>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/ajaxHandleData/ajaxLogin.js"></script>
</body>

</html>