<?php 
session_start();
?>
<?php
  
        $dau = isset($_GET['giadau']) ? (int)$_GET['giadau'] : '';
        $cuoi = isset($_GET['giacuoi']) ? (int)$_GET['giacuoi'] : '';

         $giadau = addslashes($dau);
        $giacuoi = addslashes($cuoi);

        $conn = mysqli_connect('localhost:3307', 'root', '123456', 'dienthoai');
 
   
        
        
       
       if($giacuoi!=0){
         $result = mysqli_query($conn, "SELECT * FROM product Where  (product_price > '$dau') and (product_price < '$cuoi')
         ");
        
       }
       if($_GET["search"] != ''){
        $search1 = $_GET['search'];
         $result = mysqli_query($conn, "SELECT * FROM product Where 
          (product_name like '%".$search1."%')
         ");
         
       }
        $result1 = array();
        if ($result){
            while ($row = mysqli_fetch_assoc($result)){
                $result1[] = $row;
            }
        }
            
?>
<html>

<head>
    <meta charset='utf-8'>
     <link rel="shortcut icon" href="images/favicon.ico" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main-index.css'>
    <script src='main.js'></script>
    <link href="product/total.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<style type="text/css">
   
</style>

</head>

<body>
 
   
<?php include("head.php");?>



<div class="container2" style="background-color: white;height: auto;float: left;;padding:10px 0px">
    <div class="main1-sp">
        <?php 
        if ($result1) {
          foreach ($result1 as $item){
                
                
              
                ?>
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

        <?php
              }
         }else{
            echo "Không có sản phẩm";
         }
            ?>
    </div>
</div>

<?php include('footer.php')?>
</body>

</html>