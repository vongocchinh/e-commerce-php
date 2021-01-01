
<?php 
session_start();
$page = isset($_GET['page']) ? (int)$_GET['page'] : '';
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
   <style type="text/css">
       h3{
        color: red;
       }
   </style>

</head>
<body>
     <?php include('head.php')?>

    <div class="container">
        <?php include('banner.php')?>
        <div class="pr-main-right">
                <h3 class="h3"> </h3>
                <div class="form-tt" style="margin-bottom: 20px;">
                    <?php if ($page==1) {
                        ?>
                        <h3>Cảm Ơn Bạn Đã Đặt hàng.</h3>

                        <?php }elseif ($page==2) { ?>
                           <h3>Cảm Ơn Bạn Đã Contact.</h3>
                        <?php } elseif ($page==3) { ?>
                           <h3>Cảm Ơn Bạn Đã Newservlet.</h3>
                         <?php }?>
                   
                    <div class="active-tt">

                        <a class="back" href="index.php">Trang Chủ</a>
                        <a class="back" href="cart.php">Giỏ Hàng</a>
                        <a class="back" href="myaccount.php">Tài Khoản</a>
                        <a class="back" href="logout.php">Đăng Xuất</a>
                    </div>

                </div>

        </div>
    </div>
 <?php include('footer-top.php')?>
  <?php include('footer.php')?>
 <script src="js/topPage.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
    <script src="js/slider.js "></script>
</body>
</html>	