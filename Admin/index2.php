<?php 
 session_start();
   require 'libs/connect.php';

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
    <style type="text/css">
      
      .chart_div{
        width: 500px;
        margin-left: 50px;
        float: left;
      }
      .massage{
        width: 500px;
        margin-left: 50px;
        height: 500px;
        float: left;
      
      }
      td,th{
         border: 1px solid black;
         font-family: cursive;
      }
      
    </style>
</head>

<body class="body-nav">
    <?php include("head.php");?>
      <div class="ctn">
        <div class="container-left-index2">
           <?php include("banner.php");?>
           </div>
        <div class="container-right-index2">
          <h3 style="text-align: center;font-family: cursive;">Trang Quản Lý Của Admin</h3>

          <div style="z-index: -100" class="chart_div" id="vis_div"></div>
          <div class="massage">
            <h3 style="text-align: center;font-family: cursive;">Contact here user</h3>
             <div style="overflow: auto;height: 400px">
            <table >
             
              <tr>
                <th width="100px">name</th>
                <th width="300px">massage</th>
                <th width="100px">date</th>
              </tr>
              <?php

                $variable=get_all_contact();
                 foreach ($variable as $contact) {?>
              <tr>

                <td><?php echo $contact['ct_name']?></td>
                <td><?php echo $contact['ct_massage']?></td>
                <td><?php echo $contact['ct_date']?></td>
              
              </tr>
                <?php   }?>
            
            </table>
              </div>
          </div>
          <div class="massage" style="margin-top: -90px;">
            <h3 style="text-align: center;font-family: cursive;">Thong ke</h3>
             <div style="overflow: auto;height: 400px">
            <table >
             
              <tr>
                <th width="100px">danh muc/th>
                <th width="200px">so luong thong ke</th>
                
              </tr>
              <?php
                   global $conn;
                   $sql = "select * from count where id=1";
                  $query = mysqli_query($conn, $sql);
                   $result = array();
    
                      
                        if (mysqli_num_rows($query) > 0){
                            $row = mysqli_fetch_assoc($query);
                            $result = $row;
                        }
                         $count=$result;
                         $user=get_all_user();
                          $u=count($user);
                          $bill=get_all_bill();
                          $b=count($bill);
               ?>
              <tr style="text-align: center;">

                <td>Tổng Sản phẩm đã bán</td>
                <td><?php echo  $count['count_dem']?></td>
               
              
              </tr>
               <tr style="text-align: center;">

                <td>Tổng user</td>
                <td><?php echo  $u?></td>
               
              
              </tr>
               <tr style="text-align: center;">

                <td>Tổng Hoa don</td>
                <td><?php echo  $b?></td>
               
              
              </tr>
               <tr style="text-align: center;">

                <td>Tổng luot truy cap</td>
                <td>
                  <?php 
                global $conn;
    
                $sql="select * from  tables_posts WHERE id = 1";
                 $query = mysqli_query($conn, $sql);

                  $result = array();
    
   
                    if (mysqli_num_rows($query) > 0){
                        $row = mysqli_fetch_assoc($query);
                        $result = $row;
                    }
                      $dem=$result;
                      ?>
                        <?php echo $dem['views']?>
                      </td>
               
              
              </tr>
                
            
            </table>
              </div>
          </div>
        </div>

    </div>
    
      <?php include("footer.php");?>  
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<?php

          $product=get_all_product();
          $p=count($product);
          $user=get_all_user();
          $u=count($user);
          $bill=get_all_bill();
          $b=count($bill);
          $new=get_all_newservlet();
          $n=count($new);
          $brand=get_all_cafe_1();
          $br=count($brand);
          $sale=get_all_product_sale();
          $s=count($sale);
          ?>
<script type="text/javascript">
    google.charts.load('current'); // Don't need to specify chart libraries!
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
            chartType: 'ColumnChart',
            dataTable: [
                ['', 'product', 'user','bill','newservlet','brand','sale'],
                ['', <?php echo $p?>, <?php echo $u?>,<?php echo $b?>,<?php echo $n?>,<?php echo $br?>,<?php echo $s?>]
            ],
            options: {
                'title': 'Thống kê shop'
            },
            containerId: 'vis_div'
        });
        wrapper.draw();
    }
</script>

</html>