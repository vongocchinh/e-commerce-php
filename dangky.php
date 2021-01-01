<?php
session_start();
require './Admin/libs/connect.php';
if (!empty($_POST['logout']))
{
    $data['login_name'] = isset($_POST['login_name']) ? $_POST['login_name'] : '';
     $data['login_mail'] = isset($_POST['login_mail']) ? $_POST['login_mail'] : '';
      $data['login_sdt'] = isset($_POST['login_sdt']) ? $_POST['login_sdt'] : '';
       $data['login_diachi'] = isset($_POST['login_diachi']) ? $_POST['login_diachi'] : '';
    $data['login_pass'] = isset($_POST['login_pass']) ? $_POST['login_pass'] : '';
    $data['login_ten'] = isset($_POST['login_ten']) ? $_POST['login_ten'] : '';
    
    $salt = random_bytes(32);


$staticSalt = 'G4334#';


// $crypt = md5("ahdoeywiractetjoaaarmjosc".$data['login_pass']."G4334#");
 $crypt = md5("ahdoeywiractetjoaaarmjosc".$data['login_pass']."G4334#");


  $errors = array();
    if (empty($data['login_name'])){
        $errors['login_name'] = 'Chưa nhập tên';
       
    }

    if (empty($data['login_pass'])){
        $errors['login_pass'] = 'Chưa nhập pass';
    }
    if (!$errors){
        add_user($data['login_name'],$data['login_mail'],$data['login_sdt'],$data['login_diachi'],$crypt,0,$data['login_ten']);
        // Trở về trang danh sách
        header("location: login.php");
    }else{
         $errors['erro'] = 'Đăng ký không thành công !!!';

    }
}

disconnect_db();
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
    <script src="js/topPage.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
    <script src="js/slider.js "></script>

</head>

<body>
<?php include('head.php')?>
<div class="container">
    <?php include('banner.php')?>
    <div class="pr-main-right">
        <h3 class="h3">Đăng Ký Tài Khoản</h3>
        <div class="form-tt">
            <form name="myForm_dangki" onsubmit="return validateFormdangki()" method="post" action="dangky.php">
                <p>Nhập Tên Đăng Nhập*:</p>
                <input class="tt" type="text" name="login_name">
                <p>Nhập Mail *:</p>
                <input class="tt" type="email" name="login_mail">
                <p>Nhập Họ và Tên *:</p>
                <input class="tt" type="text" name="login_ten">
                <p>Nhập Số Điện Thoại *:</p>
                <input class="tt" type="text" name="login_sdt">
                <p>Nhập Địa Chỉ *:</p>
                <input class="tt" type="text" name="login_diachi">
                <p>Nhập Mật Khẩu *:</p>
                <input class="tt" type="password" name="login_pass">
                <p>Nhập Lại Mật Khẩu *:</p>
                <input class="tt" type="password" name="pass_2">
                <p></p>
                <input id="checkbox" class="checkbox" type="checkbox" name="checkbox" value="">
                <a onclick="check()">
                    <p5>*Chấp nhận điều khoản của chúng tôi</p5>
                </a>
                <p></p>
                <div class="active-tt">
                    <input class="nhap" type="submit" value="Đăng Ký" name="logout">
                    <input class="reset" type="reset" value="Xóa">

                    <a class="back" href="login.php">Đăng Nhập</a>
                </div>
            </form>
        </div>

    </div>
</div>
<?php include('footer-top.php')?>
<?php include('footer.php')?>
<script src="js/topPage.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
<script src="js/slider.js "></script>
<script type="text/javascript">
    function validateFormdangki() {

        var username = document.forms["myForm_dangki"]["login_name"].value;
        var mail = document.forms["myForm_dangki"]["login_mail"].value;
        var ten = document.forms["myForm_dangki"]["login_ten"].value;
        var sdt = document.forms["myForm_dangki"]["login_sdt"].value;
        var diachi = document.forms["myForm_dangki"]["login_diachi"].value;
        var password = document.forms["myForm_dangki"]["login_pass"].value;
        var pass_2 = document.forms["myForm_dangki"]["pass_2"].value;
        var checkbox = document.getElementById("checkbox").checked;


        if (username == "") {
            alert("Vui lòng nhập tên đăng nhập");
            return false;
        }
        if (mail == "") {
            alert("Vui lòng nhập mail");
            return false;
        }
        if (ten == "") {
            alert("Vui lòng nhập họ và tên");
            return false;
        }
        if (sdt == "") {
            alert("Vui lòng nhập so điện thoại");
            return false;
        }
        if (diachi == "") {
            alert("Vui lòng nhập địa chỉ");
            return false;
        }
        if (password == "") {
            alert("Vui lòng nhập pass");
            return false;
        }
        if (pass_2 == "") {
            alert("Vui lòng nhập lai pass");
            return false;
        }
        if (password != pass_2) {
            alert("Vui lòng kiểm tra lại pass");
            return false;
        }
        if (checkbox == false) {
            alert("Vui lòng kiểm tra lại điều khoản");
            return false;
        }


    }
</script>
</body>
</html>