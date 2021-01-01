<?php
session_start();

include_once("config.php");

?>
<html>

<head>
    <title> Trang chu template</title>
    <meta charset='utf-8'>
     <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel='stylesheet' type='text/css' media='screen' href='css/header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/star.css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/show-banner.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   

</head>

<body>
   <?php include('head.php')?>
<div class="container">
    <?php include('banner.php')?>
    <div class="pr-main-right">
        <div class="cart">
            <h3>Giỏ hàng Của Bạn</h3>
            <table id="tb1">
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng Tiền</th>
                    <th></th>
                </tr>

                <?php
if(isset($_SESSION["products"]))
{
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
       $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
         $date=date("Ymdhis");
          $date1=rand(1, 100000000);
    ?>

                    <tr>
                        <td>
                            <?php echo $cart_itm["name"]?> - Hàng Chính Hãng</td>
                        <td>
                            <?php echo number_format($cart_itm["price"])?> đ</td>
                        <td>
                            <?php echo $cart_itm["qty"]?>
                        </td>
                        <td>
                            <?php echo  number_format($subtotal)?> ₫</td>
                        <td><a href="cart_update.php?removep=<?php echo $cart_itm[" code "]?>&return_url=<?php echo $current_url?>">&times;</a></td>
                    </tr>

                    <?php      }
                     
                        }?>
            </table>
            <div class="cart-bottom">
                <a style="color: white" href="cart_update.php?emptycart=1&return_url=<?php echo $current_url?>">Xóa tất cả</a>
            </div>
            <div class="clear"></div>
            <h4></h4>
            <div class="form-sl">

                <table id="tb2">
                    <tr>
                        <th>Tổng cộng</th>
                        <td class="right">
                            <?php echo number_format($total) ?> đ</td>
                    </tr>
                    <tr>
                        <th>Tổng Số Lượng</th>
                        <td class="right">
                            <?php echo $total1 ?> (SP)</td>
                    </tr>
                    <tr>
                        <th>
                            <p>Mã Giảm Giá:</p>
                        </th>
                        <td><input class="main-gg" type="text"></td>
                    </tr>
                    <tr>
                        <th>Tổng cộng</th>
                        <td class="right">
                            <?php echo number_format($total) ?> đ</td>
                    </tr>
                </table>

                <a style="margin-top: 20px;position: absolute;" class="sb" href="checkout.php">Tiến Hành Đặt Hàng</a>
            </div>
        </div>
    </div>
</div>
<?php include('footer-top.php')?>
<?php include('footer.php')?>
     
</body>
<script src="js/topPage.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
    <script src="js/slider.js "></script>
</html>