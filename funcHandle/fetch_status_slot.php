<?php
include('../db/dbFunc.php');
$id = getPOST('id');
$id_baixe = getPOST('idBaixe');
$check_token = validateToken();
$sql = "SELECT * FROM `vitri`, `baixe`WHERE baixe.id_baixe = vitri.id_baixe && baixe.id_baixe = '$id_baixe' && vitri.id_vitri = '$id'";
$result = executeResult($sql);
$output = '';
if ($result != null) {
    $slot = $result[0];
    $output .= '
      <div class="details_parking">
      <div class="details element">
          <h3>Ô đỗ mã: ' . $slot['tenvitri'] . '</h3>
          <h5>thuộc ' . $slot['tenbaixe'] . ' </h5>
          <p>Trạng thái: Trống</p>
      </div>
      <div class="booking element">
          <h3 id="test">Đặt chỗ: </h3>
          <form action="../funcHandle/add_slot.php" method="post">
          ';
    if ($check_token) {
        $output .= ' 
              <input name="id_taikhoan" value="' . $check_token['id_taikhoan'] . '">

              ';
    }
    $output .= '
              <input name="id_vitri" type="text" value="' . $slot['id_vitri'] . '">
              <label for="">Từ ngày: </label>
              <input  id="date_from_slot" type="date">
              <label for="">Đến ngày: </label>
              <input date_to_slot type="date" name="" id="">
              <div>
              <button name="thanhtoan" id="booking_slot" type="submit" >XÁC NHẬN ĐƠN ĐẶT LỊCH</button>
              </div>
          </form>
      </div>
    </div>
    ';
}
echo $output;
