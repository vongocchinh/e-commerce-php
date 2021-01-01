<?php 
session_start();
?>
<?php
require './Admin/libs/connect.php';

$id = isset($_GET['brand_id']) ? (int)$_GET['brand_id'] : '';
$id_category= isset($_GET['category_id']) ? (int)$_GET['category_id'] : '';
if ($id_category!=0&&$id!=0) {
    $product_all_brand=get_all_product_brand_category($id,$id_category);
     $data = get_tsp($id);
     $data1=get_tsp_category($id_category);
}else if ($id==0&&$id_category!=0){
  
    $product_all_brand = get_all_product_category($id_category);
     $data = "";
        $data1=get_tsp_category($id_category);
}else{
    $product_all=get_all_product();
     $data = "";
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
      <link rel='stylesheet' type='text/css' media='screen' href='css/main-index.css'>

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

<div class="container" >

    <h3 class="product_name"><a style="color: black" href="index.php">Trang Chủ</a> /
        <?php if($data){
 ?>
        <a style="color: black" href="">
            <?php echo $data['brand_name']?>
        </a> /

        <?php }?>
        <a style="color: black" href="">
            <?php echo $data1['category_name']?>
        </a>
    </h3>
</div>
<div class="container" style="background-color: white;height: auto;float: left;padding:10px 0px">
    <div class="main1-top">
        <?php if ($id_category==8) {
            ?>
        <strong>
                <a href="product-total.php?brand_id=0&&category_id=8"  class="main-menu">Điện thoại</a>
                <a href="product-total.php?brand_id=1&&category_id=8" class="main-menu">Iphone</a>
                <a href="product-total.php?brand_id=2&&category_id=8" class="main-menu">Samsung</a>
                <a href="product-total.php?brand_id=4&&category_id=8" class="main-menu">Oppo</a>
                <a href="product-total.php?brand_id=5&&category_id=8" class="main-menu">Redmi</a>
                 <a href="product-total.php?brand_id=8&&category_id=8" class="main-menu">Vsmart</a>

            </strong>

        <?php }else if ($id_category==11){?>
        <strong>
                <a href="product-total.php?brand_id=0&&category_id=11"  class="main-menu">Máy Tính Bảng</a>
                <a href="product-total.php?brand_id=2&&category_id=11" class="main-menu">Samsung</a>
                <a href="product-total.php?brand_id=1&&category_id=11" class="main-menu">Apple</a>
              
                <a href="product-total.php?brand_id=9&&category_id=11" class="main-menu">Hawai</a>
            </strong>
        <?php }else if ($id_category==12){?>

        <strong>
                <a href="product-total.php?brand_id=0&&category_id=12"  class="main-menu">Lap-top</a>
                <a href="product-total.php?brand_id=1&&category_id=12" class="main-menu">Macbook</a>
                <a href="product-total.php?brand_id=2&&category_id=12" class="main-menu">Samsung</a>
                 <a href="product-total.php?brand_id=10&&category_id=12" class="main-menu">Dell</a>
               
            </strong>
        <?php }else if ($id_category==9){?>
        <strong>
                <a href="product-total.php?brand_id=0&&category_id=9" id="action" class="main-menu">Phụ Kiện</a>
                <a href="product-total.php?brand_id=1&&category_id=9" class="main-menu">Apple</a>
                <a href="product-total.php?brand_id=2&&category_id=9" class="main-menu">Sam sung</a>
                <a href="product-total.php?brand_id=4&&category_id=9" class="main-menu">Oppo</a>
                <a href="product-total.php?brand_id=5&&category_id=9" class="main-menu">Redmi</a>
            </strong>
        <?php }  else if ($id_category==13){?>
        <strong>
                <a href="product-total.php?brand_id=0&&category_id=13" id="action" class="main-menu">Máy Ảnh</a>
                <a href="product-total.php?brand_id=2&&category_id=13" class="main-menu">Sony</a>
                <a href="product-total.php?brand_id=6&&category_id=13" class="main-menu">Samsung</a>
               
            </strong>
        <?php }?>

    </div>
    <div class="main1-sp">


        <?php foreach ($product_all_brand as $item){ ?>
        <div class="colsp1">
            <a href="single-product.php?product_id=<?php echo $item['product_id'] ?>"><img src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item['product_img'];?>"></a>
            <p class="GG">-
                <?php echo $item['product_giamgia']?>%</p>
            <a href="single-product.php?product_id=<?php echo $item['product_id'] ?>">
                <p class="tsp">
                    <?php echo $item['product_name']?> – Hàng Chính Hãng</p>
            </a>
            <?php
                     $tienGiam=$item['product_giamgia'];
                     $tiengoc=$item['product_price'];
                     $tiencon=$tiengoc-($tiengoc*($tienGiam/100));
                ?>

                <?php if($tienGiam==0){ ?>

                <strong><p class="gia"><?php echo number_format($item['product_price'])?> đ</p></strong>

                <?php }else{?>
                <strong><p class="gia"><del><?php echo number_format($item['product_price'])?> đ</del> &emsp;<?php echo number_format($tiencon)?> đ</p></strong>
                <?php }?>
                <div class="ratting">
                    <?php
                      $pro_id=$item['product_id'];
                      $sql="select count(re_id) as c from review where product_id= $pro_id AND re_star=1";
                      $result=mysqli_query($conn, $sql);
                      if($result)
                         {
                            while($row=mysqli_fetch_assoc($result))
                          {
                                $s1=$row['c'];
                          }     
                         }      
                         
                           $pro_id=$item['product_id'];
                      $sql="select count(re_id) as c from review where product_id= $pro_id AND re_star=2";
                      $result=mysqli_query($conn, $sql);
                      if($result)
                         {
                            while($row=mysqli_fetch_assoc($result))
                          {
                                $s2=$row['c'];
                          }     
                         }      
                          
                           $pro_id=$item['product_id'];
                      $sql="select count(re_id) as c from review where product_id= $pro_id AND re_star=3";
                      $result=mysqli_query($conn, $sql);
                      if($result)
                         {
                            while($row=mysqli_fetch_assoc($result))
                          {
                                $s3=$row['c'];
                          }     
                         }      
                         
                           $pro_id=$item['product_id'];
                      $sql="select count(re_id) as c from review where product_id= $pro_id AND re_star=4";
                      $result=mysqli_query($conn, $sql);
                      if($result)
                         {
                            while($row=mysqli_fetch_assoc($result))
                          {
                                $s4=$row['c'];
                          }     
                         }      

                           $pro_id=$item['product_id'];
                      $sql="select count(re_id) as c from review where product_id= $pro_id AND re_star=5";
                      $result=mysqli_query($conn, $sql);
                      if($result)
                         {
                            while($row=mysqli_fetch_assoc($result))
                          {
                                $s5=$row['c'];
                          }     
                         }      
                         $s0=0;
                       $array = [$s0,$s1,$s2,$s3,$s4,$s5];
                           
                          $max = null;
                          $position = null;
                           
                          for ($i = 0; $i < count($array); $i++)
                          {
                              if ($max == null){
                                  $max = $array[$i];
                                  $position = $i;
                              }
                              else {
                                  if ($array[$i] > $max){
                                      $max = $array[$i];
                                      $position = $i;
                                  }
                              }
                          }
                          if ($position==0) {
                           ?>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        <?php
                          }elseif ($position==1) {
                            ?>

                            <span class="fa fa-star  checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <?php
                          }elseif ($position==2) {
                            ?>

                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <?php
                          }elseif ($position==3) {
                            ?>

                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <?php
                          }
                          elseif ($position==4) {
                            ?>

                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <?php
                          }
                          elseif ($position==5) {
                            ?>

                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star  checked"></span>
                                            <span class="fa fa-star  checked"></span>
                                            <?php
                          }
                      
                       ?>

                                                <span class="dg">(
                       <?php 
                      $pro_id=$item['product_id'];
                      $sql="select count(re_id) as c from review where product_id= $pro_id";
                      $result=mysqli_query($conn, $sql);
                      if($result)
                         {
                            while($row=mysqli_fetch_assoc($result))
                          {
                                echo $row['c'];
                          }     
                         }                    
                   ?>
                     đánh giá)
                    
                      
                   </span>
                </div>
        </div>
        <?php } ?>


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