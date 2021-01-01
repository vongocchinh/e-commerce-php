
<?php
   session_start();
   require './Admin/libs/connect.php';


    if (isset($_SESSION['user_name'])) {
        $login_id=$_SESSION['user_name'];
         $data_id=$_SESSION['login_id'];
    $data4=get_user($data_id);
    }
    if(!$data4){
      header("location: login.php");
    }
     ?>
     <?php
  
   if (!empty($_POST['edit_login']))
{
    // Lay data
    
   
    $data['login_id']          = isset($_POST['login_id']) ? $_POST['login_id'] : '';
            
     $data['login_name']        = isset($_POST['login_name']) ? $_POST['login_name'] : '';
      $data['login_mail']        = isset($_POST['login_mail']) ? $_POST['login_mail'] : '';
       $data['login_sdt']        = isset($_POST['login_sdt']) ? $_POST['login_sdt'] : '';
        $data['login_diachi']        = isset($_POST['login_diachi']) ? $_POST['login_diachi'] : '';
         $data['login_pass']        = isset($_POST['login_pass']) ? $_POST['login_pass'] : '';
          $data['login_ten']        = isset($_POST['login_ten']) ? $_POST['login_ten'] : '';
    
    // Validate thong tin
    $errors = array();
    
    if (empty($data['login_name'])){
        $errors['login_name'] = 'Chưa nhập tên ';
    }
    if (empty($data['login_pass'])){
        $errors['login_pass'] = 'Chưa nhập pass ';
    }
   
    
   
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_user($data['login_id'],$data['login_name'],$data['login_mail'],$data['login_sdt'],$data['login_diachi'], $data['login_pass'],0,$data['login_ten']);
        // Trở về trang danh sách
        header("location: myaccount.php");
    }
}

disconnect_db();
?>
<html>

<head>
    <title> Trang chu template</title>
    <meta charset='utf-8'>
     <link rel="shortcut icon" href="images/favicon.ico" />s
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
        <h3 class="h3">Tài Khoản Của Tôi</h3>
        <div class="form-tt">
            <form method="post" action="myaccount.php?login_id=<?php echo $data4['login_id']?>" name="myForm_myac" onsubmit="return validateFormmyac()">
                <p>Tên Đăng Nhập*:</p>
                <input class="tt" type="text" name="login_name" value="<?php echo $data4['login_name']?>">
                <p>Mail *:</p>
                <input class="tt" type="text" name="login_mail" value="<?php echo $data4['login_mail']?>">
                <p>Họ và Tên *:</p>
                <input class="tt" type="text" name="login_ten" value="<?php echo $data4['login_ten']?>">
                <p>Số Điện Thoại *:</p>
                <input class="tt" type="text" name="login_sdt" value="<?php echo $data4['login_sdt']?>">
                <p>Địa Chỉ *:</p>
                <input class="tt" type="text" name="login_diachi" value="<?php echo $data4['login_diachi']?>">
                <!--   <p>Mật Khẩu *:</p>
                    <input class="tt" type="text" name="login_pass" value="<?php echo $data4['login_pass']?>">
 -->
                <p></p>

                <div class="active-tt">
                    <input type="hidden" name="login_id" value="<?php echo $data4['login_id']; ?>" />
                    <input class="nhap" type="submit" value="Chỉnh Sửa" name="edit_login">
                    <input class="reset" type="reset" value="Xóa">

                    <a class="back" href="login.html">Trang chủ</a>
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
    function validateFormmyac() {
        var username = document.forms["myForm_myac"]["login_name"].value;
        var username = document.forms["myForm_myac"]["login_mail"].value;
        var ten = document.forms["myForm_myac"]["login_ten"].value;
        var sdt = document.forms["myForm_myac"]["login_sdt"].value;
        var diachi = document.forms["myForm_myac"]["login_diachi"].value;
        var password = document.forms["myForm_myac"]["login_pass"].value;
        if (username == "") {
            alert("Vui lòng nhập tên đăng nhập");
            return false;
        }
        if (password == "") {
            alert("Vui lòng nhập mật khẩu");
            return false;
        }
        if (mail == "") {
            alert("Vui lòng nhập mail");
            return false;
        }
        if (ten == "") {
            alert("Vui lòng nhập ten");
            return false;
        }
        if (sdt == "") {
            alert("Vui lòng nhập số điện thoại");
            return false;
        }
        if (diachi == "") {
            alert("Vui lòng nhập địa chỉ");
            return false;
        }
    }
</script>
</body>
</html>