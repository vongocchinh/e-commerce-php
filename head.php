
<html>

<head>
    <title> Trang chu template</title>
    <meta charset='utf-8'>
    <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel='stylesheet' type='text/css' media='screen' href='css/he.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/star.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main-index.css'>
      <link rel='stylesheet' type='text/css' media='screen' href='css/head-index.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/menu-top.css'>
   
     
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/show-banner.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/topPage.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap" rel="stylesheet">

</head>

<body>

<header class="header" style="background-color: #FC5B31">

    <div class="header-top">
        <div class="header-top-1">
            <a class="hh" href="index.php">
                <h3>IphoneShop</h3>
            </a>
            <a class="pp" href="index.php">
                <p>Cửa hàng cung cấp smartphone</p>
            </a>

        </div>
        <div class="header-top-2">
            <p> <strong>01263 717 084 </strong><br>
                <span>Hộ trợ mua hàng </span>

            </p>

        </div>
        <div class="header-top-3">
            <p> <strong> HỆ THỐNG ĐIỆN THOẠI</strong><br>
                <span> Mở cửa 08:00 - 21:30</span>
            </p>
        </div>
        <?php          
$total=0;
$total1=0;
if(isset($_SESSION["products"])){

foreach ($_SESSION["products"] as $cart_itm)
{
   $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
    $total = ($total + $subtotal);
    $total1 = ($total1 + $cart_itm["qty"]);
}
}
?>
        <div class="header-top-4">
            <p><a style="color: white" href="cart.php"><strong>Giỏ Hàng</strong> / <?php echo number_format($total)?> đ<span class="cart-hv"><strong><?php echo $total1?></strong></span></a></p>
        </div>
        <div class="header-top-5">
            <div class="header-menu-header">
                <a href="index.php" class="top">Trang chủ</a>
                <?php if(isset($_SESSION['user_name'])){?>
                <a href="logout.php" class="top">Đăng xuất</a>
                <?php 
                    }else{
                     ?>
                <a href="login.php" class="top">Đăng nhập</a>
                <?php  }?>
                <a href="myaccount.php" class="top">Tài khoản</a>
                <a href="" class="top">Tin tức</a>
                <a href="Contact.php" class="top">Liên hệ</a>
            </div>
            <div class="header-menu-header2">
                <form name="myForm_search" onsubmit="return validateFormsearch()" method="GET" action="search.php">
                    <input class="search" name="search" type="search" placeholder="Bạn tìm gì..." autocomplete="off">
                </form>
               <!--  <div class="menu-top">
                    <a href="product-total.php?brand_id=0&&category_id=8" id="dienthoai">Điện thoại</a>
                    <a href="product-total.php?brand_id=0&&category_id=12">Laptop</a>
                    <a href="product-total.php?brand_id=0&&category_id=11">Máy Tính Bảng</a>
                    <a href="product-total.php?brand_id=0&&category_id=9">Phụ Kiện</a>
                    <a href="sale.php">Sale</a>

                </div> -->
            </div>
        </div>
    </div>
</header>


<i class="fab fa-facebook-messenger"></i>

<div class="form-chat" id="chat">
    <form>
        <h4 class="top-chat">Chat tư vấn online</h4>
        <p class="title">Tên</p>
        <input class="name" type="text">
        <p class="title">Nội dung</p>
        <textarea class="input-chat" type="text"></textarea>
        <p></p>
        <input class="sb-chat" type="submit" value="Chat">

        <span onclick="closeForm()" class='daux'>&#215;</soan>
           
    </form>

</div>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
<script src="js/slider.js "></script>
<script type="text/javascript">
 function validateFormsearch() {
    var search = document.forms["myForm_search"]["search"].value;

    if (search == "") {
        alert("Nhập tên sản phẩm tìm");
        return false;
    }


}
</script>
<script>
function showForm() {

    document.getElementById("chat").style.display = "block";
}

function closeForm() {
    document.getElementById("chat").style.display = "none";
}
</script>
</body>

</html>