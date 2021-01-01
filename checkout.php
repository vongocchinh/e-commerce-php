<?php 
session_start();

require './Admin/libs/connect.php';
require './Admin/libs/connect_product.php';

 if (isset($_SESSION['user_name'])) {
        $data_id=$_SESSION['login_id'];
         $login_id=$_SESSION['user_name'];
          $login_diachi=$_SESSION['login_diachi'];
    $data4=get_User($data_id);
    }
    if(!$data4){
      header("location: login.php");
    }

    $total=0;
    $total1=0;
    
    if(isset($_SESSION["products"])){
            if(count($_SESSION["products"])<0){
                  header("location: trangchu.php");
            }
    foreach ($_SESSION["products"] as $cart_itm)
    {
       
       $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
        $total1 = ($total1 + $cart_itm["qty"]);
    }
}

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
if (!empty($_POST['cart_bill']))
{

    $sp=isset($_SESSION["products"]);
    if ($sp>0) {

           $date_epkieu=date("Ymdhis");
           $date=rand(1, 100000000);

           $data1['bill_id']=isset($date)? $date : '';
            $user_id=$data4['login_id'];
            $data1['id']=isset($user_id)? $user_id : '';
            $data1['name'] = isset($_POST['name']) ? $_POST['name'] : '';
            $data1['login_mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
            $data1['login_diachi'] = isset($login_diachi) ? $login_diachi : '';
            $data1['login_sdt'] = isset($_POST['sdt']) ? $_POST['sdt'] : '';
            $data1['tongtien'] = isset($total) ? $total : '';
            $data1['soluong'] = isset($total1) ? $total1 : '';
            $date1=date("Y/m/d H:i:s");
            $data1['date'] = isset($date1) ? $date1 : '';
              $data1['tinh'] = isset($_POST['tinh']) ? $_POST['tinh'] : '';
                $data1['huyen'] = isset($_POST['Huyen']) ? $_POST['Huyen'] : '';
                  $data1['xa'] = isset($_POST['xa']) ? $_POST['xa'] : '';
                    $data1['so_nha'] = isset($_POST['so_nha']) ? $_POST['so_nha'] : '';

     $errors = array();
     if (empty($data1['name'])){
        $errors['name'] = 'Chưa nhập tên ';
    }

        if (!$errors){
            bill($data1['bill_id'],$data1['id'],$data1['soluong'], $data1['tongtien'] ,$data1['login_mail'],$data1['login_diachi'],$data1['date'],$data1['name'],
                $data1['login_sdt'],$data1['tinh'],$data1['huyen'],$data1['xa'],$data1['so_nha']);


                  foreach ($_SESSION["products"] as $cart_itm)
    {
        $product_id=$cart_itm["code"];
        $product_name=$cart_itm["name"];
        $product_price=$cart_itm["price"];
       
        $product_qty=$cart_itm["qty"];
  
        $data1['bill_id']=isset($date)? $date : '';


        $data1['product_id']=isset($product_id)? $product_id : '';
        $data1['product_name']=isset($product_name)? $product_name : '';
        $data1['product_price']=isset($product_price)? $product_price : '';
       
        $data1['product_qty']=isset($product_qty)? $product_qty : '';
        bill_detail1($data1['bill_id'],$data1['product_id'],$data1['product_name'],$data1['product_price'],$data1['product_qty']);
       
    }

            unset($_SESSION["products"]);
            header("location: thanks.php?page=1");
        }
    }else{
         header("location: erro.php");
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
   

</head>

<body>
   <?php include('head.php')?>

<div class="container">
    <?php include('banner.php')?>
    <div class="pr-main-right">
        <h3 class="h3">Vui Lòng Điền Thông Tin Để Đặt Hàng</h3>
        <div class="form-tt">
            <form method="post" action="checkout.php" name="myForm_checkout" onsubmit="return validateFormcheckout()">
                <p>Nhập tên *:</p>
                <input class="tt" type="text" name="name">
                <p>Nhập Mail *:</p>
                <input class="tt" type="text" name="mail">
                <p>Nhập Số Điện Thoại *:</p>
                <input class="tt" type="text" name="sdt">
                <p>Nhập Thành Phố/Tỉnh *:</p>
                <input class="tt" type="text" name="tinh">
                <p>Nhập Huyện/Quận *:</p>
                <input class="tt" type="text" name="Huyen">
                <p>Nhập Phường/Xã *:</p>
                <input class="tt" type="text" name="xa">
                <p>Nhập Số Nhà/... *:</p>
                <input class="tt" type="text" name="so_nha">
                <p></p>
                <p style="color: red"><strong>* Thông tin đơn hàng *</strong></p>
                <table id="table-tt">

                    <tr>
                        <th>Tổng tiền </th>
                        <td>
                            <?php echo number_format($total)?> đ</td>
                    </tr>
                    <tr>
                        <th>Sô lượng </th>
                        <td>
                            <?php echo $total1?>
                        </td>
                    </tr>
                    <tr>
                        <th>Sản phẩm </th>
                        <td>
                            <?php 
                                            $i=1;
                                            $sp=isset($_SESSION["products"]);
                                            if ($sp>0) {
                                             foreach ($_SESSION["products"] as $cart_itm1){
                                               echo $i++.'.'.$cart_itm1['name']." ".'('.$cart_itm1['qty'].')'.'<br>';
                                             }
                                            }else{
                                                echo "bạn chưa thêm sản phẩm vào giỏ";
                                            }
                                            ?></td>
                    </tr>
                </table>
                <p></p>
                <div class="active-tt">
                    <input name="cart_bill" class="nhap" type="submit" value="Xác Nhận">
                    <input class="reset" type="reset" value="Địa Chỉ Khác">

                    <a class="back" href="cart.html">Quay Lại Giỏ Hàng</a>
                </div>
            </form>
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
    <script type="text/javascript">
        function validateFormcheckout() {
        var username = document.forms["myForm_checkout"]["name"].value;
        var mail = document.forms["myForm_checkout"]["mail"].value;
        var sdt = document.forms["myForm_checkout"]["sdt"].value;
        var thanhpho = document.forms["myForm_checkout"]["tinh"].value;
        var huyen = document.forms["myForm_checkout"]["huyen"].value;
        var xa = document.forms["myForm_checkout"]["xa"].value;
        var sonha = document.forms["myForm_checkout"]["so_nha"].value;

        if (username == "") {
            alert("Vui lòng nhập tên đăng nhập");
            return false;
        }
        if (mail == "") {
            alert("Vui lòng nhập mail");
            return false;
        }
        if (sdt == "") {
            alert("Vui lòng nhập số điện thoại");
            return false;
        }
        if (thanhpho == "") {
            alert("Vui lòng nhập thành phố");
            return false;
        }
        if (huyen == "") {
            alert("Vui lòng nhập huyện");
            return false;
        }
        if (xa == "") {
            alert("Vui lòng nhập xã");
            return false;
        }
        if (sonha == "") {
            alert("Vui lòng nhập số nhà");
            return false;
        }
    }
    </script>
</html>