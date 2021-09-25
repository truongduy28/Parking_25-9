<?php
require_once('../db/dbFunc.php');

$check_token = validateToken();
if ($check_token) {
    $id_certification = getGET('id');
    $sql_get_data = "SELECT * FROM vitri, baixe, phieuguixe WHERE baixe.id_baixe = vitri.id_baixe && phieuguixe.id_vitri = vitri.id_vitri && phieuguixe.id_phieuguixe = $id_certification";
    $filter_data = executeResult($sql_get_data);
    if ($filter_data != null) {
        $data = $filter_data[0];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận Phiếu gửi xe</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/page/reset_css.css">
    <link rel="stylesheet" href="../css/page/confirmation.css">
    <link rel="stylesheet" href="../css/layout/nav_menu.css">
    <link rel="stylesheet" href="../css/layout/interested.css">
    <link rel="stylesheet" href="../css/layout/target.css">
    <link rel="stylesheet" href="../css/layout/footer.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <?php
            include('layout/nav_menu.php');
            ?>
        </div>
        <div class="content">
            <div class="confirm">
                <form action="" method="POST">
                    <h3>Xác Nhận Phiếu gửi xe</h3>
                    <?php

                    ?>
                    <div class="form-control">
                        <label for="">Mã giao dịch: <span><?= $data['magiaodich'] ?></span></label>
                    </div>
                    <div class="form-control">
                        <label for="">Tài khoản: <span><?= $check_token['taikhoan'] ?></span></label>
                    </div>
                    <div class="form-control">
                        <label for="">Vị trí đỗ: <span><?= $data['tenvitri'] ?></span> tại <span><?= $data['tenbaixe'] ?></span></label>
                    </div>
                    <div class="form-control">
                        <label for="">Từ ngày: <span><?= $data['ngayden'] ?></span> đến <span><?= $data['ngaydi'] ?></span></label>
                    </div>
                    <div class="form-control">
                        <label for="">Chọn loại hình xe:</label>
                        <select name="car_type" id="">
                            <?php
                            $sql_get_type_car = "SELECT * FROM loaixe";
                            $list_type = executeResult($sql_get_type_car);
                            if ($list_type != NULL) {
                                foreach ($list_type as $type) {
                                    echo ' 
                                        <option value="' . $type['id_loaixe'] . '">' . $type['tenloaixe'] . '</option>
                                        ';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <?php
                    echo ' test';
                    $date1 = $data['ngayden'];
                    $date2 = $data['ngaydi'];

                    $diff = abs(strtotime($date2) - strtotime($date1));

                    $years = floor($diff / (365 * 60 * 60 * 24));
                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                    printf("%d years, %d months, %d days\n", $years, $months, $days);
                    ?>
                    <div class="form-control">
                        <label for="">Biển số xe: </label>
                        <input type="text" name="number_control">
                    </div>
                    <div class="form-control">
                        <label for="">Ghi chú:</label>
                        <input type="text" name="note">
                    </div>
                    <div class="form-control total ">
                        <label for="">Tổng tiền: 99.000VNĐ</label>
                    </div>
                    <br>
                    <div class="pay">
                        <button type="submit" name="basic_pay">XÁC NHẬN ĐƠN HÀNG <br>
                            <p>Thanh toán bằng tiền mặt</p>
                        </button>
                        <button type="submit" name="online_pay">XÁC NHẬN VÀ THANH TOÁN <br>
                            <p>Thanh toán online</p>
                        </button>
                    </div>

                </form>
            </div>
            <div class="sub_banner">
            </div>

            <?php
            include('../page/layout/target.php');
            ?>
        </div>
        <?php
        include('../page/layout/footer.php');
        ?>
    </div>
    <!-- include js -->
    <script src="../js/jsHandle/stickyMenuTop.js"></script>


</body>

</html>