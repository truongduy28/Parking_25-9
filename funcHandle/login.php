<?php
require_once('../db/dbFunc.php');
$user = getPOST('user');
$pass = getPOST('pass');
$sql_login = "Select * from taikhoan where taikhoan = '$user' && matkhau = '$pass'";
$list_accout = executeResult($sql_login);
if ($list_accout != null) {
    $token = getPwdSecurity(time() . $user . rand(0, 999));
    setcookie('token', $token, time() + 7 * 24 * 60 * 60, '/');
    $sql_setToken = "update taikhoan set e_token = '$token' where id_taikhoan =" . $list_accout[0]['id_taikhoan'];
    execute($sql_setToken);
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
