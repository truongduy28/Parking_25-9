<?php
require_once('../db/dbFunc.php');
$id_baixe = getGET('id');
$sql_bai = "SELECT * from baixe WHERE id_baixe = $id_baixe ";
$bai = executeResult($sql_bai);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/page/reset_css.css">
    <link rel="stylesheet" href="../css/page/parking.css">
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
            <div class="parking">
                <div class="parking-elements">
                    <div class="parking-element_left">
                        <img src="<?= $bai[0]['hinhanh'] ?>" alt="">
                    </div>
                    <div class="parking-element_right">
                        <h1><?= $bai[0]['tenbaixe'] ?></h1>
                        <p>Địa chỉ: <?= $bai[0]['diachi'] ?></p>
                        <p>Sức chứa: <?= $bai[0]['dachua'] ?>/<?= $bai[0]['succhua'] ?></p>
                        <p class="price">Giá thuê: <?= $bai[0]['giathue'] ?>vnđ/giờ</p>
                        <p>Điện thoại : <?= $bai[0]['sdt'] ?></p>
                        <p>Email: <?= $bai[0]['mail'] ?></p>
                        <span>Ghi chú bãi xe: <?= $bai[0]['ghichu'] ?></span>
                        <form action="">
                            <label for="">Từ ngày: </label>
                            <input class="date-fomat" type="date" name="" id="">
                            <!-- <input class type="date" name="input1" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Enter a date in this formart YYYY-MM-DD" /> -->

                            <label for="">Đến ngày: </label>
                            <input type="date" name="" id="">
                            <br>
                            <label for="">Lúc</label>
                            <select name="" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>
                            <label for="">đến</label>
                            <select name="" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>
                            <div class="space"></div>
                            <button type="submit">Tiến hành đặt bãi</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <?php
                    include('../page/layout/interested.php');
                    ?> -->
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
    <script src="../js/jquery.js"></script>
   
</body>

</html>