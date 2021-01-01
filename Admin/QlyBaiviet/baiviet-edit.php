<?php

require '../libs/connect.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_bv($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: baiviet-list.php");
}


// Nếu người dùng submit form
if (!empty($_POST['edit_cafe']))
{
    // Lay data
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
   
    $data['td']          = isset($_POST['td']) ? $_POST['td'] : '';
    $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
     $data['img']          = isset($_POST['img']) ? $_POST['img'] : '';
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên name';
    }
    
   
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_bv($data['id'],$data['td'], $data['name'],$data['img']);
        // Trở về trang danh sách
        header("location: baiviet-list.php");
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
     <link href="../css/bt.css" rel="stylesheet">
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
                                    
                                     <form action="baiviet-edit.php"  method="post">
                                   
                                        <thead>
                                            <tr>
                                                <p></p>
                                <td class="name-edit"><p>Tên bài viết</p></td>
                                <td>
                                    <input class="input" type="text" name="td" value="<?php echo $data['baiviet_td']; ?>" />
                                  
                                </td>
                            </tr>
                            <tr><p></p>
                                <td class="name-edit"><p>Ảnh bài viết</p></td>
                                <td>
                                    <input class="input" type="text" name="img" value="<?php echo $data['img']; ?>" />
                                  
                                </td>
                            </tr>
                             <tr><p></p>
                                <td class="name-edit"><p>Bài viết chi tiết</p></td>
                                <textarea name="name" id="name"><?php echo $data['baiviet_name']?></textarea>
                                    <script>
                                        CKEDITOR.replace('name');
                                    </script>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $data['baiviet_id']; ?>" />
                                    <input class="btn-luu" type="submit" name="edit_cafe" value="Lưu" />
                                </td>
                            </tr>
                        
                    </thead>
              
                 </form>
                </div>
            </div>
        </div>
    </div>

                   
               
        </div>
    </div>

      <?php include("../footer.php");?>  
        
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