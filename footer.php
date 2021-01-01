<?php
global $conn;
 

  if (!empty($_POST['save']))
    {
    // Lay data
    $data1['mail'] = isset($_POST['newserletter']) ? $_POST['newserletter'] : '';
  
    
    // Validate thong tin
    $errors = array();
    if (empty($data1['mail'])){
        $errors['mail'] = 'Chưa nhập tên Hãng';
    }
    
     $ser_mail = addslashes($data1['mail']);
  
    if (!$errors){
       $sql2 = "
            INSERT INTO newserletter(ser_mail) VALUES
            ('$ser_mail') ";
    
             $query = mysqli_query($conn, $sql2);
       
        header("location: thanks.php?page=3");
    }
}

    
?>
<html>

<head>
   <title> Trang chu template</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/star.css'>
     <link rel='stylesheet' type='text/css' media='screen' href='css/banner.css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/show-banner.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/topPage.js"></script>
</head>

<body>
	<a style="z-index:none" class="btn-top" href="javascript:void(0);"><i  class='fas fa-arrow-alt-circle-up'></i></a>
<div class="clear"></div>
<div class="footer ">
    <div class="footer-left ">
        <h3>Tin Tức</h3>
        <a class="menu-footer "><i class=' fas fa-angle-right '></i>Giới Thiệu</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i>Tin Tức</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i>Tin Tức Sản Phẩm</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i>Tuyển Dụng</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i>Quan Hệ Cổ Đông</a>
    </div>
    <div class="footer-left ">
        <h3>Hổ Trợ Mua Hàng</h3>
        <a class="menu-footer "><i class='fas fa-angle-right '></i>Hỗ trợ mua hàng trực tuyến</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Các hình thức thanh toán</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Hướng dẫn mua hàng trực tuyến</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Phát hành hóa đơn</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Phát hành hóa đơn</a>


    </div>
    <div class="footer-left ">
        <h3>Chính sách chung</h3>
        <a class="menu-footer "><i class='fas fa-angle-right '></i>Hỗ trợ mua hàng trực tuyến</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Các hình thức thanh toán</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Hướng dẫn mua hàng trực tuyến</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Phát hành hóa đơn</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Chính sách chung</a>


    </div>
    <div class="footer-left">
        <h3>Liên Hệ</h3>
        <p>Newserletter Email</p>
        <form name="myForm_newserletter" onsubmit="return validateForm3()" method="post" action="footer.php">
            <input class="text" type="text" name="newserletter">
            <input class="text1" type="submit" value="Gửi" name="save">
        </form>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Chính sách chung</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Chính sách chung</a>
        <a class="menu-footer "><i class='fas fa-angle-right '></i> Chính sách chung</a>
    </div>

</div>
<div class="footer-main-banner">
    <img src="/dienthoai/Admin/QlyProduct/uploads/p.png">
</div>
<footer>
    <p>Author: Võ Ngọc Chính | Admin@gmail.com</p>
</footer>
<div style="clear: both; "></div>

</body>
<script type="text/javascript">
	
    function validateForm3() {

        var y = document.forms["myForm_newserletter"]["newserletter"].value;


        if (y == "") {
            alert("Vui lòng nhập mail");
            return false;
        }

    }
</script>
</html>