<?php
require '../libs/connect.php';
global $conn;

$product_xuat = get_all_product_1();
  
        
 
   
        $result = mysqli_query($conn, 'select count(product_id) as total from product');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
      
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
 
       
        $total_page = ceil($total_records / $limit);
 
     
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        
        $start = ($current_page - 1) * $limit;
 
        
        $Result= mysqli_query($conn, "select * from product,brand,category where product.brand_id=brand.brand_id  and product.category_id=category.category_id LIMIT $start, $limit");

disconnect_db();
?>

    
    <!DOCTYPE html>
    <html>

    <head>
        <title>Danh sách </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset='utf-8'>
    
    <link href="../css/head1.css" rel="stylesheet">
    <link href="../public/style.css" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet">
    <title>Trang chủ admin...</title>
    <script src="index.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
    </head>
    <body class="sb-nav-fixed">
  <?php include("../head.php");?>
   <div id="layoutSidenav">
    <?php include("../head1.php");?>
     <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid">

        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                       
                       
                       
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Product</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               <th width="10px">STT</th>
                                               <th style="width: 30px;">category</th>
                                                <th style="width: 30px;">brand</th>
                                                <th style="width: 100px">name</th>
                                                <th>price</th>
                                                <th style="width: 30px;">giam(%)</th>
                                                <th>img</th>
                                                <th>img2</th>
                                                <th>mota</th>
                            
                                                <th style="text-align: center;">Options</th>
                                                                      
                                            </tr>
                                        </thead>
                                        
                                           <?php 
                        $x=1;
                      while ($item = mysqli_fetch_assoc($Result)){ ?>
                                        <tbody>
                                            <tr>
                                                <td>
                                <?php echo $x++;?>
                            </td>
                             <td>
                                <?php echo $item['category_name']; ?>
                            </td>
                            <td>
                                <?php echo $item['brand_name']; ?>
                            </td>
                            <td>
                                <?php echo $item['product_name']; ?>
                            </td>
                             <td>
                                <?php echo number_format($item['product_price']); ?>
                            </td>
                            <td style="width: 30px;">
                                <?php echo number_format($item['product_giamgia']); ?>(%)
                            </td>
                             <td>
                               <img style="width: 100px;height: 100px" class="img-bottom" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item['product_img'];?>"/>
                               
                               

                            </td>
                             <td>
                               <img style="width: 100px;height: 100px" class="img-bottom" src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $item['product_img2'];?>"/>
                               
                               

                            </td>
                             <td>
                               <a href="product-mota.php?product_id=<?php echo $item['product_id'] ?>">Chi tiết</a>
                            </td>

                            
                            <td style="background-color: white">
                                <form class="form-right" method="post" action="product-delete.php">
                                     <a style="background-color: white" href="product-edit.php?product_id=<?php echo $item['product_id']; ?>"><img style="width: 23px;" src="../images/edit.png"></a>
                                  <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>" />
                                    <input class="btn-right" onclick="return confirm('Bạn có chắc muốn xóa không?');" type="image" name="delete" alt="submit" src="../images/delete.png" style="width: 23px;"  />
                                    
                                </form>
                            </td>
                                            </tr>
                                          </tbody>
                                           <?php }?>
                                    </table>
                                     <div   style="clear: both;text-align: center;font-family: cursive;margin-top: 20px;">
                                        <?php 
                                        if ($current_page > 1 && $total_page > 1){
                                            echo '<a href="product-list.php?page='.($current_page-1).'">Prev</a> | ';
                                        }
                                        for ($i = 1; $i <= $total_page; $i++){
                                           
                                            if ($i == $current_page){
                                                echo '<span>'.$i.'</span> | ';
                                            }
                                            else{
                                                echo '<a href="product-list.php?page='.$i.'">'.$i.'</a> | ';
                                            }
                                        }
                                        if ($current_page < $total_page && $total_page > 1){
                                            echo '<a href="product-list.php?page='.($current_page+1).'">Next</a> | ';
                                        }
                                       ?>
                                        </div>
                <h3>Tong San Pham la:<?php echo  $total_records ?></h3>
                                </div>
                            </div>


                         </div>
                  </main>
                   <?php include("../footer.php");?>
                </div>

    </div>
      
</body>


 <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<script type="text/javascript">
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

</script>

   </html>


