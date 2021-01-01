<?php
require '../libs/connect.php';
global $conn;

$id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : '';
if ($id){
    $item = get_product($id);
}


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


                       
                       
                       
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Product</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                             <tr style="font-size: 14px">
                                       <td style="width: 10px">STT</td>
                           
                            
                                      <td style="width: 100px;">name</td>
                                      <td style="width: 200px;">Cam truoc</td>
                                       <td style="width: 150px;">Cam sau</td>
                                        <td style="width: 200px;">Man hinh</td>
                                        <td style="width: 100px;">Ram</td>
                                        <td style="width: 100px;">Rom</td>
                               
                                        <td style="width: 300px;">He dieu hanh</td>
                                       <td style="width: 200px;">Phien ban</td>
                                       <td style="width: 100px;">Size</td>
                                      <td style="width: 100px;">Mota</td>
                                     <td style="width: 150px;">ho tro</td>
                                      <td style="width: 200px;">chuc nang</td>
                           
                           
                           
                                          </tr>
                       
                                        <tr >
                                            <td>
                                                <?php echo $x=1;?>
                                            </td>
                                          
                                           
                                            <td>
                                                <?php echo $item['product_name']; ?>
                                            </td>
                                           
                                             <td>
                                                <?php echo $item['cam_truoc']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['cam_sau']; ?>
                                            </td>

                                             <td>
                                                <?php echo $item['man_hinh']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['ram']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['rom']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['hdh']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['phien_ban']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['size']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['mo_ta']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['ho_tro']; ?>
                                            </td>
                                             <td>
                                                <?php echo $item['chuc_nang']; ?>
                                            </td>
                                        </tr>
                                        </thead>
                                      </table>  
                                          
                            </div>


                         </div>
                  </main>
                   <?php include("../footer.php");?>
                </div>

    </div>
      
</body>

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