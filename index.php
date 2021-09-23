<!DOCTYPE html>
<?php
require_once('db/dbFunc.php');
$ij = validateToken();
if($ij) {
    echo 'có';
}else{
    echo 'đéo';
}

$id_baixe = rand(0, 99999999);
$tenbai = getGET('ten');
$sl = getGET('sl');
$ngaydat = date('d-m-y');
$sql = "INSERT INTO `baixe` (`id_baixe`, `id_khuvuc_fk`, `tenbaixe`, `hinhanh`, `diachi`, `giathue`, `sdt`, `mail`, `succhua`, `ghichu`) VALUES ('$id_baixe', 4, '$tenbai', '1', 1, 2, 33, 4, '$sl', 'oksaodasjisaj')";
execute($sql);

for($i = 0; $i < $sl ; $i++){
    $value = str_pad($i+1,4,"0",STR_PAD_LEFT);

    $tenvitri = 'BAI'.$value;
    $sql = "INSERT INTO `vitri` (`id_baixe`, `tenvitri`, `trangthai`, `ngaydat`) VALUES ($id_baixe, '$tenvitri', 1, NULL) ";
    execute($sql);
    // echo $sql.'<br>';

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test db </title>
</head>

<body>
    <form action="" method="get">
        <input type="text " name="ten" placeholder="nhập tên bãi">
        <input type="text" name="sl" placeholder="số lượng chỗ">
        <button type="submit">ok</button>
    </form>
    <?php
        $sql_get = "select * from vitri ";
        $list = executeResult($sql_get);
        foreach ($list as $item){
            echo ' 
                <a href="vitri.php?' .$item['id_vitri'].'">'.$item['tenvitri'].'</a> <br>
            ';
        }
    ?>


</body>

</html>