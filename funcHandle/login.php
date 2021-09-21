<?php
require_once('../db/dbFunc.php');
$user = getPOST('user');
$pass = getPOST('pass');
$sql_login = "Select * from taikhoan where taikhoan = '$user' && matkhau = '$pass'";
$list_accout = executeResult($sql_login);
if ($list_accout != null) {
    echo json_encode(array(
        'status' => 1,
        'message' => 'Đăng nhập thành công'
    ));
    exit;
} else {
    echo json_encode(array(
        'status' => 0,
        'message' => 'Thông tin đăng nhập không đúng
Kiểm tra lại tài khoản và mật khẩu!'
    ));
    exit;
}
