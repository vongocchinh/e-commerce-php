<?php 
 session_start();
 
   require 'libs/connect.php';

if (isset($_SESSION['username1'])) {
        $login_id=$_SESSION['username1'];
   
    }
    if(!$login_id){
      header("location: QlyAdmin/login.php");
    }
    $bill_xuat = get_all_bill();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link href="css/css_main.css" rel="stylesheet">
    <link href="css/head1.css" rel="stylesheet">
    <link href="css/css_main1.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <title>Trang chủ admin...</title>
    <script src="index.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>

<body class="sb-nav-fixed">
  <?php include("head.php");?>
   <div id="layoutSidenav">
    <?php include("head1.php");?>
     <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">


                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Đơn Hàng:</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Khách Hàng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Sản Phẩm</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Đánh Giá</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Đơn Hàng</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Qity</th>
                                                <th>Money</th>
                                                <th>Mail</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                 <th>Phone</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>STT</th>
                                                <th>Qity</th>
                                                <th>Money</th>
                                                <th>Mail</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                 <th>Phone</th>
                                            </tr>
                                        </tfoot>
                                           <?php 
                                          $i=1;
                                          foreach ($bill_xuat as $item){ ?>
                                        <tbody>
                                            <tr>
                                                <td> <?php echo $i++;?></td>
                                                <td><?php echo $item['bill_sl']; 
                                               $_SESSION['bill_sl'] = $item['bill_sl'];
                                              ?></td>
                                                <td><?php echo number_format( $item['bill_tongtien']); ?> vnđ</td>
                                                <td><?php echo $item['login_mail']; ?></td>
                                                <td><span><?php echo $item['tinh']; ?>,
                                               <?php echo $item['huyen']; ?>,
                                                <?php echo $item['xa']; ?>,
                                                <?php echo $item['so_nha']; ?>
                                                  
                                                </span></td>
                                                <td><?php echo $item['bill_ngay']; ?></td>
                                                <td><?php echo $item['bill_name']; ?></td>
                                                <td>  <?php echo $item['login_sdt']; ?></td>
                                            </tr>
                                          </tbody>
                                           <?php }?>
                                    </table>
                                </div>
                            </div>


                    </div>
                  </main>
                   <?php include("footer.php");?>
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