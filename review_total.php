
<?php 
session_start();
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/show-banner.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <style type="text/css">
     .fa-star {
      margin-top:11px;
      margin-left: -10px;
      margin-right: 10px;
      padding-top: 5px;
      padding-bottom: 5px;
        }
   </style>

</head>
<body>
    <?php include('head.php')?>

<div class="container">
    <?php include('banner.php')?>
    <div class="pr-main-right">
        <br>
        <br>
        <?php
            $id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : '';
                 $sql = "select re_name,product_id,re_cmt,re_date,re_star from review where product_id = {$id} ";
                        $query = mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($query);
                         $result = array();
                
              
                          if ($query){
                            while ($row = mysqli_fetch_assoc($query)){
                                $result[] = $row;
                                    }
                                }
                    $data=$result;
                    if ($result) {
                        foreach ($result as $result111) {
                          
                       
                        ?>
            <div class="row-cmt">
                <div class="col-sm-3">
                    <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                    <div class="review-block-name">
                        <a href="#axa">
                            <?php echo ucwords($result111['re_name'])?>
                        </a>
                    </div>
                    <div class="review-block-date">
                        <?php echo $result111['re_date']?><br/>1 day ago</div>
                </div>
                <div class="col-sm-9">
                    <div class="review-block-rate">
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


                        </div>
                    </div>
                    <div class="review-block-title">
                        <?php echo $result111['re_cmt'] ?>.</div>
                    <div class="review-block-description">
                        <?php echo $result111['re_cmt'] ?>
                    </div>
                </div>
            </div>
            <?php } }?>

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