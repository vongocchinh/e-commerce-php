<?php

require '../libs/connect.php';
$product_xuat = get_all_user();
disconnect_db();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Danh sách </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <td width="10px">STT</td>
                            <td>ID</td>
                            <td>user_name</td>
                             <td>user_mail</td>
                              <td>user_sdt</td>
                               <td>user_diachi</td>
                                <td>user_role</td>
                                 <td>user_ten</td>
                        </tr>
                        <?php 
                        $i=1;
                        foreach ($product_xuat as $item){ ?>
                        <tr class="tr-bottom">
                            <td>
                                <?php echo $i++;?>
                            </td>
                            <td>
                                <?php echo $item['login_id']; ?>
                            </td>
                            <td>
                                <?php echo $item['login_name']; ?>
                            </td>
                              <td>
                                <?php echo ucwords($item['login_mail']); ?>
                            </td>
                              <td>
                                <?php echo $item['login_sdt']; ?>
                            </td>
                              <td>
                                <?php echo $item['login_diachi']; ?>
                            </td>
                               <td>
                                <?php echo $item['login_role']; ?>
                            </td>
                               <td>
                                <?php echo ucwords($item['login_ten']); ?>
                            </td>
                            
                            
                        </tr>
                        <?php } ?>
                    </table>
                
               </div>
    </div>

      <?php include("../footer.php");?>  
        
        </body>
    </body>
    
<script type="text/javascript">
    (function($) {
    "use strict";
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

</script>
    </html>