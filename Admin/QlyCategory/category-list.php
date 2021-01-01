<?php

require '../libs/connect.php';
$cafe_xuat = get_all_category();
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
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Category</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                
                                               
                                                <th>Hãng</th>
                                                
                                                <th style="text-align: center;">Options</th>
                                                                      
                                            </tr>
                                        </thead>
                                        
                                          <?php 
                                            $i=1;
                                            foreach ($cafe_xuat as $item){ ?>
                                            <tr class="tr-bottom" >
                                                <td>
                                                     <?php echo $i++; ?>
                                                </td>
                                               
                                                <td>
                                                    <?php echo $item['category_name']; ?>
                                                </td>
                                                
                                                <td style="background-color: white" >
                                                    <form class="form-right" method="post" action="category-delete.php">
                                                         <a style="background-color: white" href="category-edit1.php?id=<?php echo $item['category_id']; ?>"><img style="width: 25px;" src="../images/edit.png"></a>
                                                        <input type="hidden" name="id" value="<?php echo $item['category_id']; ?>" />
                                                        <input class="btn-right" onclick="return confirm('Bạn có chắc muốn xóa không?');" type="image" name="delete" alt="submit" src="../images/delete.png" style="width: 25px;"  />
                                                        
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                    </table>
                                </div>
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