<?php
require_once('../db/dbFunc.php');
$id_certification = rand(0, 99999);

$check_token = validateToken();
if ($check_token != null) {
    $id_location = getPOST('id_vitri');
    $id_user = getPOST('id_taikhoan');
    $date_from_slot = getPOST('date_from_slot');
    $date_to_slot = getPOST('date_to_slot');
    $ma_giao_dich = 'F-PARKING' . rand(0, 99999999);
    $sql_insert = "INSERT INTO `phieuguixe` (`id_phieuguixe`, `id_taikhoan`, `id_vitri`, `magiaodich`, `id_loaixe`, `bienso`, `ngayden`, `ngaydi`, `tongtien`, `id_trangthaithanhtoan`, `id_trangthaivaora`, `ghichu`) VALUES ('$id_certification', '$id_user','$id_location', '$ma_giao_dich', 1, NULL, '$date_from_slot', '$date_to_slot', NULL, '1', '1', '')
        ";
    execute($sql_insert);
          header("Location: ../page/confirmation.php?id=$id_certification");
}
