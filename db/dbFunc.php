<?php
ob_start();
require_once('config.php');

// function insert, update data
function execute($sql)
{
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}

// func get data form sql
function executeResult($sql)
{
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $result = mysqli_query($conn, $sql);

    if (mysqli_errno($conn)) {
    }
    if ($result != null) {
        $data = [];
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }
        mysqli_close($conn);
        return $data;
    } else {
    }
}

// func password security MD5 2 Class
function getPwdSecurity($pwd)
{
    return md5(md5($pwd));
}

// func get token user
function validateToken()
{
    $token = '';

    if (isset($_COOKIE['token'])) {
        $token = $_COOKIE['token'];
        $sql   = "select * from taikhoan where e_token = '$token'";
        $data  = executeResult($sql);
        if ($data != null && count($data) > 0) {
            return $data[0];
        }
    }
    return null;
}

// func get vars with get method
function getGET($key)
{
    $value = '';
    if (isset($_GET[$key])) {
        $value = $_GET[$key];
    }
    $value = fixSqlInjection($value);
    return $value;
}

// func get vars with post method
function getPOST($key)
{
    $value = '';
    if (isset($_POST[$key])) {
        $value = $_POST[$key];
    }
    $value = fixSqlInjection($value);
    return $value;
}

// catch SqlInjection Error can make bad data system
function fixSqlInjection($str)
{
    $str = str_replace("\\", "\\\\", $str);
    $str = str_replace("'", "\'", $str);
    return $str;
}
