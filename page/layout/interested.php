<div class="interested">
    <h3>CÓ THỂ BẠN QUAN TÂM</h3>
    <div class="elements">
        <?php
        $sql_interested = "SELECT * FROM baixe  ORDER BY RAND() limit 4";
        $list_interested = executeResult($sql_interested);
        if ($list_interested != null) {
            foreach ($list_interested as $interseted) {
                echo ' 
                    <div class="element">
                        <div class="img">
                            <a href="parking.php?id=' . $interseted['id_baixe'] . '">
                                <img src="' . $interseted['hinhanh'] . '" alt="">
                            </a>
                        </div>
                        <a href="parking.php?id=' . $interseted['id_baixe'] . '">
                            <h6>' . $interseted['tenbaixe'] . '</h6>
                        </a>
                        <p>Địa chỉ: ' . $interseted['diachi'] . '</p>
                        <span>Giá: ' . $interseted['giathue'] . 'vnd/giờ</span>
                    </div>
                ';
            }
        }
        ?>

    </div>
    <div class="show-all">
        <a href="#">Xem thêm tất cả các bãi đỗ... </a>
    </div>
</div>