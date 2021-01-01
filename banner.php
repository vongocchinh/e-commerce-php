<?php
    $conn = mysqli_connect('localhost:3307', 'root', '123456', 'dienthoai');
    $sql = "select * from product order by RAND()  LIMIT 0,5";
    $sql1 = "select * from bai_viet order by RAND()  LIMIT 0,5";
    $query = mysqli_query($conn, $sql);
    $query1 = mysqli_query($conn, $sql1);
    $result = array();
    $result1 = array();
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    $dataaa=$result;
      if ($query1){
        while ($row1 = mysqli_fetch_assoc($query1)){
            $result1[] = $row1;
        }
    }
    $dataaa1=$result1;
?>
<html>

<head>
    <title> Trang chu template</title>
    <meta charset='utf-8'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='css/header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/star.css'>
     <link rel='stylesheet' type='text/css' media='screen' href='menu-top/star.css'>
<link rel='stylesheet' type='text/css' media='screen' href='css/head-index.css'>    

</head>

<body>
   <div class="pr-main-left">
    <h4>Sản Phẩm</h4>
    <?php foreach ($dataaa as $item) {?>
    <div class="sp-pr-pr-top">
        <div class="img-sp-pr">
            <a href="single-product.php?product_id=<?php echo $item['product_id'] ?>"><img src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item['product_img'];?>"></a>
        </div>
        <p class="stp1">
            <?php echo $item['product_name']?>
        </p>
        <?php
                     $tienGiam=$item['product_giamgia'];
                     $tiengoc=$item['product_price'];
                     $tiencon=$tiengoc-($tiengoc*($tienGiam/100));
                ?>
            <p class="tc">
                <?php echo number_format($tiencon)?> đ</p>
    </div>
    <hr>
    <?php }?>

    <h4 style="padding-top: 30px;">Bài viết Mới Nhất</h4>
    <?php foreach ($dataaa1 as $item1) {
            ?>

    <div class="sp-pr-pr-top">
        <div class="img-sp-pr">
            <a href="baiviet.php?baiviet_id=<?php echo $item1['baiviet_id'] ?>"><img style="height:50px" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item1['img'];?>"></a>
        </div>

        <span class="ttt">
                    <?php echo $item1['baiviet_td']?>
        </span>

    </div>
    <hr>
    <?php }?>


</div>
</body>
</html>