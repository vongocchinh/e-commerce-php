<?php 
session_start();
?>
<?php

require './Admin/libs/connect.php';
global $conn;
connect_db();
$id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : '';
if ($id){
    $data = get_product($id);
    $data1=get_cafe_name_product($id);
     $data22=get_category_name_product($id);
    $data2=get_all_product_brand_Random_4($data['brand_id']);
}



if (!empty($_POST['save']))
    {
    // Lay data
         $date=date("Y:m:d h:i:s");
           if (isset($_SESSION['user_name'])) {
        $re_name=$_SESSION['user_name'];
        }else{
            $re_name="Người dùng";
        }

           $data['re_date']=isset($date)? $date : '';
    $data['re_name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['re_product_id'] = isset($id)? $id : '';
     $data['re_cmt'] = isset($_POST['massage']) ? $_POST['massage'] : '';
      $data['re_mail'] = isset($_POST['mail']) ? $_POST['mail'] : '';
       $data['re_star'] = isset($_POST['rating']) ? $_POST['rating'] : '';

  
    
    // Validate thong tin
    $errors = array();
    if (empty($data['re_cmt'])){
        $errors['re_cmt'] = 'Chưa nhập bình luận';
    }
    
     $re_name = addslashes($data['re_name']);
      $re_cmt = addslashes($data['re_cmt']);
       $re_date = addslashes($data['re_date']);
       $re_product_id = addslashes($data['re_product_id']);
        $re_mail = addslashes($data['re_mail']);
         $re_star = addslashes($data['re_star']);
    // Neu ko co loi thi insert
    if (!$errors){
       $sql2 = "
            INSERT INTO review(re_name,re_mail,re_star,product_id,re_cmt,re_date) VALUES
            ('$re_name','$re_mail','$re_star','$re_product_id','$re_cmt','$re_date') ";
  
     $query = mysqli_query($conn, $sql2);
        // Trở về trang danh sách
        
    }
}
    $sql3="select * from count_product where id_product = {$id} ";
      $query3 = mysqli_query($conn, $sql3);

    $result3 = array();
    
   
    if (mysqli_num_rows($query3) > 0){
        $row3 = mysqli_fetch_assoc($query3);
        $result3 = $row3;
    }
    if(!$result3){
            $sql4 = "INSERT INTO count_product(id_product,count) VALUES ('$id',1)";
            $query = mysqli_query($conn, $sql4);
    }else if($result3['id_product']!=0){ 
       
            $sql4 = "UPDATE count_product SET  count=count+1 WHERE id_product = '$id' ";
            $query = mysqli_query($conn, $sql4);
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
       <link rel='stylesheet' type='text/css' media='screen' href='css/use.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/conn.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/main-index.css'>
          <link rel='stylesheet' type='text/css' media='screen' href='css/menu-top.css'>
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
  
  
 div.middle div.bar-5 { height: 18px; background-color: #4CAF50;}
 div.middle  div.bar-4 { height: 18px; background-color: #2196F3;}
  div.middle div.bar-3 { height: 18px; background-color: #00bcd4;}
  div.middle div.bar-2 { height: 18px; background-color: #ff9800;}
  div.middle div.bar-1 { height: 18px; background-color: #f44336;}
    
</style>
</head>

<body>
	 <?php include('head.php')?>
<div class="container">
    <h3 class="product_name"><a href="index.php">Trang Chủ</a> /
        <a href="">
            <?php echo $data1['category_name']?>
        </a> /
        <a href="">
            <?php echo $data1['brand_name']?>
        </a>
    </h3>
</div>


<div class="container">
    <?php include('banner.php')?>


    <div class="pr-main-right">
        <div class="container-min">
            <form method="post" action="cart_update.php">
                <?php 

                  $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                ?>
                <div class="img-pt">
                    <a href="/dienthoai/Admin/QlyProduct/uploads/<?php echo $data['product_img'];?>"> <img id="product-big" class="product-img-big" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $data['product_img'];?>"></a>
                    <div class="img-pt-left">
                        <img id="product-small" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $data['product_img2'];?>">
                        <img id="product-small" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $data['product_img'];?>">
                        <img id="product-small" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $data['product_img2'];?>">
                    </div>
                </div>


                <div class="like">
                    <a href="">SHARE</a>
                    <a href="index.html">LIKE</a>

                </div>
                <?php
                     $tienGiam=$data['product_giamgia'];
                     $tiengoc=$data['product_price'];
                     $tiencon=$tiengoc-($tiengoc*($tienGiam/100));
                ?>
                    <div class="img-pt-right">
                        <p><strong><?php echo $data['product_name']?> – Hàng Chính Hãng</strong></p>
                        <h3 class="gia">
                            <?php echo number_format($tiencon)?> đ</h3>

                        <a class="a">Thiết kế by: <span class="ncc"><?php echo $data1['brand_name']?></span> </a>
                        <a class="a">Màn hình :<?php echo $data['man_hinh']?> inch, độ phân giải <?php echo $data['man_hinh']?> pixels</a>
                        <a class="a">Camera Trước/Sau: Camera Trước/Sau: <?php echo $data['cam_truoc']?>MP/<?php echo $data['cam_sau']?>MP</a>
                        <a class="a">CPU: <?php echo $data['phien_ban']?></a>
                        <a class="a">Bộ Nhớ :<?php echo $data['rom']?>GB</a>
                        <a class="a">RAM :<?php echo $data['ram']?>GB</a>
                        <a class="a">Hổ trợ:<?php echo $data['ho_tro']?></a>
                        <a class="a">Chức năng:<?php echo $data['chuc_nang']?></a>

                        <input class="qty" value="1" min="0" max="30" type="number" name="product_qty" min="0">
                        <input class="submit" type="submit" value="THÊM VÀO GIỎ HÀNG">
                        <input type="hidden" name="product_id" value="<?php echo $data['product_id']?>" />
                        <input type="hidden" name="type" value="add" />
                        <input type="hidden" name="return_url" value="<?php echo $current_url?>" />
            </form>
            <a style="float: left;margin-top: 10px" class="mtg">Mua Trả Góp</a>
            </div>
            <hr>
        </div>
        <div class="clear"></div>
        <div class="container-min">
            <div class="danhgia">
                <h2>Thông số kĩ thuật</h2>
            </div>
            <div class="mota">

                <?php echo $data['mo_ta']?>

            </div>
            <p class="xxtt">Xêm thêm cấu hình chi tiết</p>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="container container14 ">
    <p class="spch">Sản Phẩm Cùng Hãng</p>
    <div class="main1-sp2 ">
        <?php foreach ($data2 as $item){ ?>
        <div class="slide">
            <a style="outline: none;" href="single-product.php?product_id=<?php echo $item['product_id'] ?>"><img style="width: 150px;height: 160px" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item['product_img'];?>"></a>
            <p class="GG">-
                <?php echo $item['product_giamgia']?>%</p>
            <a href="single-product.php?product_id=<?php echo $item['product_id'] ?>">
                <p class="tsp">
                    <?php echo $item['product_name']?> </p>
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
                     đánh giá)</span>
                </div>
        </div>
        <?php } ?>
    </div>
</div>


<div class="container container21">
    <div class="danhgia">
        <p>Hãy là người đầu tiên đánh giá <u style="color: #288AD6;"><?php echo $data['product_name']?></u></p>
    </div>
    <div class="container-min1">
        <div class="formdanhgia">
            <form method="post" action="single-product.php?product_id=<?php echo $data['product_id']?>">
                <div class="form1">
                    <p>Đánh Giá Của Bạn</p>
                    <div class="stars">
                        <input class="star star-5" id="star-5" type="radio" value="5" name="rating" />
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" value="4" name="rating" />
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" value="3" name="rating" />
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" value="2" name="rating" />
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" value="1" name="rating" />
                        <label class="star star-1" for="star-1"></label>
                    </div>
                    <p>Nhận xét của bạn</p>
                    <textarea name="massage"></textarea>
                    <p>Tên Của bạn:</p>
                    <input class="name-review" type="text" name="name">
                    <p>Mail Của bạn:</p>
                    <input class="name-review " type="text" name="mail">
                    <p></p>
                    <input class="sb" type="submit" value="Gửi" name="save">
                </div>
            </form>
        </div>
    </div>
</div>



<div class="container container22">
    <div class="use-rating">
        <span class="heading">User Rating</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p>4.1 average based on 254 reviews.</p>
        <hr style="border:3px solid #f1f1f1">

        <div class="row">
            <div class="row-use">
                <div class="side">
                    <div>5 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-5"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>
                        <?php echo $s5?>
                    </div>
                </div>
            </div>
            <div class="row-use">
                <div class="side">
                    <div>4 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-4"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>
                        <?php echo $s4?>
                    </div>
                </div>
            </div>
            <div class="row-use">
                <div class="side">
                    <div>3 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-3"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>
                        <?php echo $s3?>
                    </div>
                </div>
            </div>
            <div class="row-use">
                <div class="side">
                    <div>2 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-2"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>
                        <?php echo $s2?>
                    </div>
                </div>
            </div>
            <div class="row-use">
                <div class="side">
                    <div>1 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-1"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>
                        <?php echo $s1?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="danhgia ">
        <p>Phản hồi từ khách hàng.</p>
    </div>
    <div>


        <?php
                $id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : '';
                     $sql = "select re_name,product_id,re_cmt,re_date,re_star from review where product_id = {$id} order by RAND()  LIMIT 0,3 ";
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
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="review-block-title">
                        <?php echo $result111['re_cmt'] ?>.</div>
                    <div class="review-block-description">
                        <?php echo $result111['re_cmt'] ?>
                    </div>
                </div>
            </div>
            <?php } }?>
            <a class="xthem" href="review_total.php?product_id=<?php echo $result111['product_id']?>"><u>Đọc Thêm</u></a>

    </div>
</div>

<?php include('footer.php')?>
<script src="js/topPage.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
<script src="js/slider.js "></script>
<script type="text/javascript">
    document.getElementById("bar-5").style.width = "<?php echo $s1?>%";
    document.getElementById("bar-4").style.width = "<?php echo $s2?>%";
    document.getElementById("bar-3").style.width = "<?php echo $s3?>%";
    document.getElementById("bar-2").style.width = "<?php echo $s4?>%";
    document.getElementById("bar-1").style.width = "<?php echo $s5?>%";
</script>
   
</body>
</html>