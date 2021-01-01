
<?php


?>
<html>

<head>
    <title> Trang chu template</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/star.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main-index.css'>
         <link rel='stylesheet' type='text/css' media='screen' href='css/menu-top.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <style type="text/css">
       a{
        border: none;
        outline: none;
       }
    </style>
</head>

<body>
    <div style="margin-top: 20px;"></div>
    <div class="clear"></div>
  
     <div class="container container13">
       <div class="main1-top">
            <strong>
               <p style="text-align: center;color: red;font-size: 20px">Sản Phẩm Nổi Bật</p>
               
            </strong>
        </div>
        <div class="main1-sp2" >
            <?php foreach ($product_nb as $item){ ?>
            <div class="slide" style="margin-top: 15px">
               <a  href="single-product.php?product_id=<?php echo $item['product_id'] ?>"><img src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item['product_img'];?>"></a>
                <p class="GG">Giảm <?php echo $item['product_giamgia']?> %</p>
                <a href="single-product.php?product_id=<?php echo $item['product_id'] ?>">
                    <p class="tsp"><?php echo $item['product_name']?> </p>
                </a>

                <?php
                     $tienGiam=$item['product_giamgia'];
                     $tiengoc=$item['product_price'];
                     $tiencon=$tiengoc-($tiengoc*($tienGiam/100));
                ?>
               <?php if($tienGiam==0){ ?>
                   
                    <strong><p class="gia"><?php echo number_format($item['product_price'])?> đ</p></strong>
                
                <?php }else{?>
                    <strong><p class="gia"><?php echo number_format($tiencon)?> đ &emsp; <del><?php echo number_format($item['product_price'])?> đ</del></p></strong>
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
                     đánh giá)</span>
                    </div>
            </div>
              <?php } ?>

            
        </div>
    </div>
  
 <script src="js/topPage.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
    <script src="js/slider.js "></script>
</body>
</html>