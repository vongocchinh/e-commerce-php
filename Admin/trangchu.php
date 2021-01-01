<?php 
 session_start();
   require 'libs/connect.php';

$product_xuat = get_all_user();
$cafe_xuat = get_all_admin();
if (isset($_SESSION['username1'])) {
        $login_id=$_SESSION['username1'];
   
    }
    if(!$login_id){
      header("location: QlyAdmin/login.php");
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link href="css/css_main.css" rel="stylesheet">
    <link href="css/css_main1.css" rel="stylesheet">
    <title>Trang chủ admin...</title>
    <script src="index.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body class="body-nav">
    <?php include("head.php");?>
      <div class="ctn">
        <div class="container-left-index2">
           <?php include("banner.php");?>
           </div>
        <div class="container-right-index2" style="margin-left: 10px">
          <h3>Trang Quản Lý Của Admin</h3>
          <br>
         
          <p>1.Quản lý khách hàng</p>
          <table class="table-container-right-index2" width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr  class="tr-top1" style="background-color: #4E73DF">
              <th>STT</th>
                <th>userName</th>
                <th>Phone</th>
                 <th>Online</th>
            </tr>
            <?php 
                  $i=1;
                  foreach ($product_xuat as $item){ ?>
            <tr class="tr-bottom">
              <td><?php echo $i++?></td>
              <td><?php echo $item['login_name']?></td>
               <td><?php echo $item['login_sdt']?></td>
              <td><img style="width: 20px;margin-left: 100px" src="images/user.jpg"></td>
            <?php }?>
            </tr>
          </table>
          <br>
          <p>1.Quản lý Nhân viên</p>
          <table class="table-container-right-index2" width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr  class="tr-top1" style="background-color: #4E73DF">
              <th>STT</th>
                <th>userName</th>
                <th>Phone</th>
                 <th>Online</th>
            </tr>
            <?php 
                  $i=1;
                  foreach ($cafe_xuat as $item){ ?>
            <tr class="tr-bottom">
              <td><?php echo $i++?></td>
              <td><?php echo $item['login_name']?></td>
               <td><?php echo $item['sdt']?></td>
              <td><img style="width: 20px;margin-left: 100px" src="images/user.jpg"></td>
            <?php }?>
            </tr>
          </table>
        </div>
    </div>

      <?php include("footer.php");?>  
</body>


</html>