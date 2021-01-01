<?php

require '../libs/connect.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_brand($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: brand-list.php");
}


// Nếu người dùng submit form
if (!empty($_POST['edit_cafe']))
{
    // Lay data
    $data['cafe_name']        = isset($_POST['name']) ? $_POST['name'] : '';
   
    $data['cafe_id']          = isset($_POST['id']) ? $_POST['id'] : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['cafe_name'])){
        $errors['cafe_name'] = 'Chưa nhập tên cafe_name';
    }
    
   
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_brand($data['cafe_id'], $data['cafe_name']);
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
        <link href="../css/head1.css" rel="stylesheet">
    <link href="../public/style.css" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/ip.css" rel="stylesheet">
     <link href="../css/bt.css" rel="stylesheet">
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
                                    <form action="brand-edit.php"  method="post">
                                    
                                        <thead>
                                            <tr>
                                               
                                                <td class="name-edit"><p>Tên Hãng</p></td>
                                                <td>
                                                    <input class="input" type="text" name="name" value="<?php echo $data['brand_name']; ?>" />
                                                    <?php if (!empty($errors['cafe_name'])) echo $errors['cafe_name']; ?>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td></td>
                                                <p></p>
                                                <td>
                                                    <input type="hidden" name="id" value="<?php echo $data['brand_id']; ?>" />
                                                    <input class="btn-luu" type="submit" name="edit_cafe" value="Lưu" />
                                                </td>
                                            </tr>
                                        </thead>
                                
                            </form>
                        </div>
                    </div>

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