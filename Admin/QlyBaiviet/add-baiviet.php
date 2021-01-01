 <?php
//như include;
session_start();
require '../libs/connect.php';

// Nếu người dùng submit form
if (!empty($_POST['add']))
{
    // Lay data
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';

$data['tieude'] = isset($_POST['tieude']) ? $_POST['tieude'] : '';  
$data['img'] = isset($_POST['img']) ? $_POST['img'] : '';  
    
    // Validate thong tin
   
    
    
     if (!$errors){
    
       add_bv($data['tieude'],$data['name'],$data['img']);
          header('Location: baiviet-list.php');
    
}
}

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Thêm sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="../public/style.css" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet">
     <link href="../css/ip.css" rel="stylesheet">
    <title>Trang chủ admin...</title>
    <script src="index.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="../ckeditor/ckeditor.js"></script>
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
                    <form method="post" action="add-baiviet.php">
                        <p>Tieu Đề</p>
                                    <input class="input" style="width: 300px;height: 40px" type="type" name="tieude">
                        <p>Img</p>
                                    <input  type="file" name="img" style="width: 300px;height: 40px">
                        <p>Baiviet</p>
                                    <textarea name="name" id="name"></textarea>
                                    <script>
                                        CKEDITOR.replace('name');
                                    </script>
                                  
                                
                           
                               <p></p>
                                <td>
                                    <input class="btn-luu" type="submit" name="add" value="Lưu" />
                                </td>
                         
                    </form>
                
        </div>
    </div>

      <?php include("../footer.php");?>  
        
        </body>
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