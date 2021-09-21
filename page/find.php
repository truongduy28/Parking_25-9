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
    <link rel="stylesheet" href="../css/page/find.css">
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
                <img src="../img/banner/banner_find.jpg" alt="">
                <div class="search-form">
                    <form action="" method="get">
                        <h3>TÌM CÁC BÃI ĐỖ XE</h3>
                        <select class="search" name="" id="">
                            <option value="">Chọn tỉnh thành bạn cần?</option>
                            <?php
                                $sql_khuvuc = '';
                            ?>
                            <option value="">Cần Thơ</option>
                            <option value="">HCM</option>
                        </select>
                        <input class="search" name="" type="text" placeholder="Thử nhập tên bãi xe hoặc vị trí bãi đỗ...">
                    </form>
                </div>
            </div>
            <div class="banner-overlay"></div>
        </div>
        <div class="content">
            <div class="load_result">
                <h6>Tìm được 99 bãi đỗ cho từ khóa "abc" tại "xyz"</h6>
                <div class="elements">
                <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="parking.php">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa2zgBvjYr7wcosfDyG0oHZHuVJA988Pwktw&usqp=CAU" alt="">
                        </div>
                        <a href="parking.php">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="parking.php">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="parking.php">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div> <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="parking.php">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa2zgBvjYr7wcosfDyG0oHZHuVJA988Pwktw&usqp=CAU" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div> <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa2zgBvjYr7wcosfDyG0oHZHuVJA988Pwktw&usqp=CAU" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                    <div class="element">
                        <div class="img">
                            <img src="../img/hayate.png" alt="">
                        </div>
                        <a href="#">
                            <h6>Bãi xe Trường đại học Hayate United</h6>
                        </a>
                        <p>Địa chỉ: 77/3 đường 30/4, ngõ 6, TP Ngã 6, Hậu Giang</p>
                        <span>Giá: 25000vnd/giờ</span>
                    </div>
                </div>
            </div>
            <div class="load_pagination">
                <ul>
                    <li><a  href="">Prev</a></li>
                    <li><a class="active_pagination"  href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">...</a></li>
                    <li><a href="">Next</a></li>
                </ul>
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
</body>

</html>