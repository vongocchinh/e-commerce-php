<?php 
session_start();
?>
<?php

require './Admin/libs/connect.php';
global $conn;
connect_db();

if (isset($_POST["login"])) {
        // lấy thông tin người dùng
        $username = $_POST["name"];
        $password = $_POST["pass"];

        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
      
       
         $salt = random_bytes(32);


$staticSalt = 'G4334#';


$crypt = md5("ahdoeywiractetjoaaarmjosc".$password."G4334#");

            $sql = "select login_id,login_name,login_pass,login_diachi from login_user where login_name = '$username' and login_pass = '$crypt' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
             $result = array();
    
  
           if (mysqli_num_rows($query) > 0){
           $row = mysqli_fetch_assoc($query);
            $result = $row;
                   }
    
                $data=$result;
    
            if ($num_rows==0) {
                 $errors = array();
                $errors['erro'] = 'Vui Long Dang nhap lai !';
            }else{

               

                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                session_start();
                $_SESSION['user_name'] = $username;
                 $_SESSION['login_id'] = $data['login_id'];
            
                  $_SESSION['login_diachi'] = $data['login_diachi'];
                
               
                
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
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
        <h3 class="h3">Đăng Nhập</h3>
        <div class="form-tt">
            <form action="login.php" method="post" name="myForm_login" onsubmit="return validateFormlogin()">
                <p>Nhập tên *:</p>
                <input class="tt" type="text" name="name">
                <p>Nhập Mật Khẩu *:</p>
                <input class="tt" type="password" name="pass">

                <p></p>
                <div class="active-tt">
                    <input class="nhap" type="submit" value="Đăng Nhập" name="login">
                    <input class="reset" type="reset" value="Xóa">

                    <a class="back" href="dangky.php">Đăng Ký</a>

                </div>
                <p style="color:red;margin-left: 10px">
                    <?php if (!empty($errors['erro'])) echo $errors['erro']; ?>
                </p>
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
    function validateFormlogin() {
        var username = document.forms["myForm_login"]["name"].value;
        var password = document.forms["myForm_login"]["pass"].value;
        if (username == "") {
            alert("Vui lòng nhập tên đăng nhập");
            return false;
        }
        if (password == "") {
            alert("Vui lòng nhập Mật Khẩu");
            return false;
        }
    }
</script>
    
</body>
</html>