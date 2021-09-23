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
    <link rel="stylesheet" href="../css/jquery-ui.css">
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
                <input type="text" id="id-baixe" value="<?= $bai[0]['id_baixe'] ?>">

                <div class="parking-elements">
                    <div class="parking-element_left">
                        <img src="<?= $bai[0]['hinhanh'] ?>" alt="">
                    </div>
                    <div class="parking-element_right">
                        <h1><?= $bai[0]['tenbaixe'] ?></h1>
                        <p>Địa chỉ: <?= $bai[0]['diachi'] ?></p>
                        <p>Sức chứa: <?= $bai[0]['succhua'] ?></p>
                        <p class="price">Giá thuê: <?= $bai[0]['giathue'] ?>vnđ/giờ</p>
                        <p>Điện thoại : <?= $bai[0]['sdt'] ?></p>
                        <p>Email: <?= $bai[0]['mail'] ?></p>
                        <span>Ghi chú bãi xe: <?= $bai[0]['ghichu'] ?></span>
                        <div>
                            <a href="#booking">Tiến hành đặt bãi</a>
                        </div>
                    </div>
                </div>
                <div class="parking-slot">
                    <h3>VỊ TRÍ ĐỖ XE</h3>
                    <div class="slots">
                        <?php
                        $sql_location = "SELECT * FROM `vitri`, `baixe` WHERE baixe.id_baixe = vitri.id_baixe && baixe.id_baixe = " . $bai[0]['id_baixe'];
                        $list_location = executeResult($sql_location);
                        if ($list_location != null) {
                            foreach ($list_location as $location) {
                                echo ' 
                                        <div class="slot" id="' . $location['id_vitri'] . '">
                                            <a>' . $location['tenvitri'] . '</a>
                                        </div>
                                    ';
                            }
                        }
                        ?>
                    </div>
                    <br><br>
                    <div class="view-all-slot">
                        <a id="view-all">Xem thêm tất cả vị trí đỗ ...</a>
                    </div>
                    <div class="ajax-load-details" id="booking">
                        <center>
                            CHỌN MỘT VỊ TRÍ ĐỖ
                        </center>
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
    <script src="../js/jquery-ui.js"></script>
    <script>
        const viewAll = document.querySelector('#view-all');
        viewAll.addEventListener('click', function() {
            // console.log(e);
            let view = document.querySelector('.slots');
            view.classList.toggle('view-all');
            console.log(viewAll.textContent);
            if (viewAll.textContent == 'Xem thêm tất cả vị trí đỗ ...') {
                viewAll.innerText = 'Ẩn bớt';
            } else {
                viewAll.innerText = 'Xem thêm tất cả vị trí đỗ ...';
            }
            // if(view.innerText == 'Ẩn bớt';)
        })

        $('.slot').click(function() {
            const id = $(this).attr('id');
            const id_baixe = $('#id-baixe').val();
            $.ajax({
                url: '../funcHandle/fetch_status_slot.php',
                type: 'POST',
                data: {
                    id: id,
                    idBaixe: id_baixe
                },
                success: function(data) {
                    $('.ajax-load-details').html(data);
                }
            })
        })
        // $('#booking_textslot').click(function(e){
        //     e.preventDefault();
        //     const a = $('date_from_slot').val();
        //     const b = $('date_to_slot').val();
        //     console.log(a,b);
        // })
        $('#test').click(function(){
            console.log('ok');
        })
    </script>
</body>

</html>