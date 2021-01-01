 <?php
//như include;
require '../libs/connect.php';

// Nếu người dùng submit form
if (!empty($_POST['add_cafe']))
{
    // Lay data
    $data['cafe_name'] = isset($_POST['name']) ? $_POST['name'] : '';
  
    
    // Validate thong tin
    $errors = array();
    if (empty($data['cafe_name'])){
        $errors['cafe_name'] = 'Chưa nhập tên Hãng';
    }
    
    
    // Neu ko co loi thi insert
    if (!$errors){
        add_brand($data['cafe_name']);
        // Trở về trang danh sách
        header("location: brand-list.php");
    }
}

disconnect_db();
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
                    <form method="post" action="brand-add.php">
                        
                            <tr>
                                <td><p class="name-text">Brand Name</p></td>
                                <td>
                                    <input class="input" placeholder="brand_name..." type="text" name="name" value="<?php echo !empty($data['cafe_name']) ? $data['cafe_name'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['cafe_name'])) echo $errors['cafe_name']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                            
                                <td></td>
                                <p></p>
                                <td>
                                    <input class="btn-luu" type="submit" name="add_cafe" value="Lưu" />
                                </td>
                            </tr>
                        
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</main>
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