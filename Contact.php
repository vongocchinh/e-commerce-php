<?php 
session_start();
?>
<?php


global $conn;


if (isset($_POST["contact"])) {
      
         $conn = mysqli_connect('localhost:3307', 'root', '', 'dienthoai');
             $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
              $data['mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
                $data['massage'] = isset($_POST['massage']) ? $_POST['massage'] : '';
                 $date1=date("Y/m/d H:i:s");
                   $data['date'] = isset($date1) ? $date1 : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['mail'])){
        $errors['loi'] = 'contact khong thanh cong ';
    }
     if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên name';
    }
     if (empty($data['massage'])){
        $errors['massage'] = 'Chưa nhập massage';
    }
    
     $ct_name = addslashes($data['name']);
      $ct_mail = addslashes($data['mail']);
       $ct_massage = addslashes($data['massage']);
        $ct_date= addslashes($data['date']);
    // Neu ko co loi thi insert
    if (!$errors){
       $sql2 = "
            INSERT INTO contact(ct_name,ct_mail,ct_massage,ct_date) VALUES
            ('$ct_name','$ct_mail','$ct_massage','$ct_date') ";
  
             $query = mysqli_query($conn, $sql2);
       
          header('Location: thanks.php?page=2');
            }
    }   
              
              
      
 

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
        <h3 class="h3">Vui Lòng Điền Thông Tin Để Contact</h3>
        <div class="form-tt">
            <form method="post" action="Contact.php" name="myForm_contact" onsubmit="return validateFormcontact()">
                <p>Nhập tên *:</p>
                <input class="tt1" type="text" name="name">
                <p>Nhập Mail *:</p>
                <input class="tt1" type="text" name="mail">
                <p>Nhập Masage *:</p>
                <textarea class="tt1" name="massage"></textarea>
                <p></p>
                <div class="active-tt">
                    <input class="nhap" type="submit" value="Gửi" name="contact">
                    <input class="reset" type="reset" value="Đặt Lại">


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
    function validateFormcontact() {
        var username = document.forms["myForm_contact"]["name"].value;
        var mail = document.forms["myForm_contact"]["mail"].value;
        var massage = document.forms["myForm_contact"]["massage"].value;

        if (username == "") {
            alert("Vui lòng nhập tên đăng nhập");
            return false;
        }
        if (mail == "") {
            alert("Vui lòng nhập mail");
            return false;
        }
        if (massage == "") {
            alert("Vui lòng nhập massge");
            return false;
        }
    }
</script>
</body>
</html>