<?php
    require_once('../db/dbFunc.php');
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
    <link rel="stylesheet" href="../css/page/main.css">
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
            <div class="banner">
                <div class="banner-overlay"></div>
                <img id="" class="img-slide" src="../img/banner/banner_1.jpg" alt="">
                <img id="" class="img-slide" src="../img/banner/banner_2.jpg" alt="">
                <img id="" class="img-slide" src="../img/banner/banner_3.jpg" alt="">
            </div>
        </div>
        <div class="content">
            <?php
            include('../page/layout/interested.php');
            ?>
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
    <script src="../js/jsHandle/slideMain.js"></script>
    <script src="../js/jsHandle/stickyMenuTop.js"></script>
</body>

</html>