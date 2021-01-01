<?php

require '../libs/connect.php';
$cafe_xuat = get_all_contact();

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
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Brand</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                
                                              
                                                <th>Name</th>
                                                <th>Mail</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                
                                                                      
                                            </tr>
                                        </thead>
                                        
                                          <?php 
                                            $i=1;
                                            foreach ($cafe_xuat as $item){ ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i++; ?> </td>
                                           
                                          
                                                <td>
                                                    <?php echo $item['ct_name']; ?>
                                                </td>
                                                 <td>
                                                    <?php echo $item['ct_mail']; ?>
                                                </td>
                                                 <td>
                                                    <?php echo $item['ct_massage']; ?>
                                                </td>
                                                 <td>
                                                    <?php echo $item['ct_date']; ?>
                                                </td>
                                                
                                           
                                            </tr>
                                          </tbody>
                                           <?php }?>
                                    </table>
                                </div>
                            </div>


                         </div>
                  </main>
                   <?php include("../footer.php");?>
                </div>

    </div>
      
</body>

</html>
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

   