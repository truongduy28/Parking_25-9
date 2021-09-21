<?php
require_once('../db/dbFunc.php');
$user = $mail = $phone = $pass = '';
$user = getPOST('user');
$mail = getPOST('mail');
$phone = getPOST('phone');
$pass = getPOST('pass');
$navigation = 1;


$sql_check = "SELECT * FROM `taikhoan` WHERE `taikhoan` = '$user' ";
$check_list = executeResult($sql_check);

$html = '';

if ($check_list != null) {
    $html .= '
    <div class="isset">
    <p>Tài khoản đã tồn tại! </p>
    </div>';
} else {
    $sql = "INSERT INTO `taikhoan` (`taikhoan`, `matkhau`, `sdt`, `email`, `lv`) VALUES ('$user', '$pass', '$phone', '$mail', 0)";
    execute($sql);
    $html .= '<div class="result">
    <p>Bạn đã đăng kí thành công! <br> <a href="login.php">Chuyển sang đăng nhập ngay!</a></p>
    </div>';
}

echo $html;
