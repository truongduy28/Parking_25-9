<?php
require_once('../db/dbFunc.php');
if(null!==$_POST('thanhtoan')){
    $id_taikhoan = getPOST('id_taikhoan');
    $id_vitri = getPOST('id_vitri');
    $date_from = getPOST('date_from_slot');
    $date_to = getPOST('date_to_slot');
    echo $id_taikhoan, $id_vitri, $date_from, $date_to;

}