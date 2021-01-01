<?php
 require '../libs/connect.php';
$product_xuat = get_all_cafe_1();
$category_xuat = get_all_category();
// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : '';
if ($id){
    $data = get_product($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: product-list.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_product']))
{
    // Lay data
    
   
    $data['product_id']          = isset($_POST['product_id']) ? $_POST['product_id'] : '';
     $data['brand_id']        = isset($_POST['brand_id']) ? $_POST['brand_id'] : '';
     $data['product_name']        = isset($_POST['product_name']) ? $_POST['product_name'] : '';
      $data['product_price']        = isset($_POST['product_price']) ? $_POST['product_price'] : '';
       $data['product_img']        = isset($_POST['product_img']) ? $_POST['product_img'] : '';
        $data['product_img2']        = isset($_POST['product_img2']) ? $_POST['product_img2'] : '';
         $data['product_giam_gia']        = isset($_POST['product_giam_gia']) ? $_POST['product_giam_gia'] : '';

  $data['category_id'] = isset($_POST['category_id']) ? $_POST['category_id'] : '';
           $data['cam_truoc'] = isset($_POST['ct']) ? $_POST['ct'] : '';
          $data['cam_sau'] = isset($_POST['cs']) ? $_POST['cs'] : '';
           $data['hdh'] = isset($_POST['hdh']) ? $_POST['hdh'] : '';
            $data['ram'] = isset($_POST['ram']) ? $_POST['ram'] : '';
             $data['rom'] = isset($_POST['rom']) ? $_POST['rom'] : '';
              $data['phien_ban'] = isset($_POST['pb']) ? $_POST['pb'] : '';
              $data['size'] = isset($_POST['size']) ? $_POST['size'] : '';
                $data['ho_tro'] = isset($_POST['ht']) ? $_POST['ht'] : '';
                 $data['chuc_nang'] = isset($_POST['cn']) ? $_POST['cn'] : '';
                  $data['mo_ta'] = isset($_POST['mt']) ? $_POST['mt'] : '';
                   $data['man_hinh'] = isset($_POST['mh']) ? $_POST['mh'] : '';
    
    
 
   
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_product($data['product_id'], $data['brand_id'],$data['category_id'],$data['product_name'],$data['product_price'],$data['product_giam_gia'],$data['cam_truoc'],$data['cam_sau'],$data['man_hinh'],$data['ram'],$data['rom'],$data['hdh'],$data['phien_ban'], $data['size'],$data['ho_tro'],$data['chuc_nang'],$data['mo_ta'],$data['product_img'], $data['product_img2']);
        // Trở về trang danh sách
        header("location: product-list.php");
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
                                   <form action="product-edit.php"  method="post">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                    <td>Tên Category</td>
                                    <td><select class="input" name="category_id" >
                                    <?php

                                     foreach ($category_xuat as $item1){
                                    ?>
                                        <option value="<?php echo $item1['category_id'] ?>"><?php echo $item1['category_name'] ?>
                                            
                                        </option>
                                        <?php
                                    }
                                        ?>
                                    </select></td>
                                 </tr>
                            <tr>
                                    <td class="name-edit">Tên Hãng</td>
                                    <td><select class="input" name="brand_id">
                                    <?php
                                     foreach ($product_xuat as $item){
                                    ?>
                                        <option value="<?php echo $item['brand_id'] ?>"><?php echo $item['brand_name'] ?>
                                            
                                        </option>
                                        <?php
                                    }
                                        ?>
                                    </select></td>
                                 </tr>
                             <tr>
                                <td class="name-edit">Tên SanPham</td>
                                <td>
                                    <input class="input" type="text" name="product_name" value="<?php echo $data['product_name']; ?>" />
                                    <?php if (!empty($errors['product_name'])) echo $errors['product_name']; ?>
                                </td>
                            </tr>
                             <tr>
                                <td class="name-edit">Gia</td>
                                <td>
                                    <input class="input"type="text" name="product_price" value="<?php echo $data['product_price']; ?>" />
                                    <?php if (!empty($errors['product_price'])) echo $errors['product_price']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="name-edit">Giam Gia</td>
                                <td>
                                    <input class="input" type="text" name="product_giam_gia" value="<?php echo $data['product_giamgia']; ?>(%)" />
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>
                                </td>
                            </tr>
                             <tr>
                                <td class="name-edit">Ảnh đại diện</td>
                                <td>
                                    <input class="input" type="text" name="product_img" value="<?php echo $data['product_img']; ?>" />
                                    <?php if (!empty($errors['product_img'])) echo $errors['product_img']; ?>
                                </td>
                            </tr>
                             <tr>
                                <td class="name-edit">Ảnh mặt sau</td>
                                <td>
                                    <input class="input" type="text" name="product_img2" value="<?php echo $data['product_img2']; ?>" />
                                    <?php if (!empty($errors['product_mota'])) echo $errors['product_mota']; ?>
                                </td>
                            </tr>
                             <tr>
                                 <td>Cam trước</td>
                                <td>
                                    <input class="input" type="text" name="ct" value="<?php echo $data['cam_truoc'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Cam sau</td>
                                <td>
                                    <input class="input" type="text" name="cs" value="<?php echo $data['cam_sau'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Man Hình</td>
                                <td>
                                    <input class="input" type="text" name="mh" value="<?php echo $data['man_hinh'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Ram</td>
                                <td>
                                    <input class="input" type="text" name="ram" value="<?php echo $data['ram'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Rom</td>
                                <td>
                                    <input class="input" type="text" name="rom" value="<?php echo $data['rom'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Hệ Điều Hành</td>
                                <td>
                                    <input class="input" type="text" name="hdh" value="<?php echo $data['hdh'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Phiên bản</td>
                                <td>
                                    <input class="input" type="text" name="pb" value="<?php echo $data['phien_ban']?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Size</td>
                                <td>
                                    <input class="input" type="text" name="size" value="<?php echo $data['size'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Hộ trợ</td>
                                <td>
                                    <input class="input" type="text" name="ht" value="<?php echo $data['ho_tro'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Chức năng</td>
                                <td>
                                    <input class="input" type="text" name="cn" value="<?php echo $data['chuc_nang'] ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                            
                            <tr>
                                 <td>Mo ta</td>
                                <td>
                                    <textarea  name="mt" id="mt" rows="30" cols="80"><?php echo $data['mo_ta']?></textarea>

                                    <script>
                                        CKEDITOR.replace('mt');
                                    </script>
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_mota'])) echo $errors['product_mota']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="hidden" name="product_id" value="<?php echo $data['product_id']; ?>" />
                                    <input class="btn-luu" type="submit" name="edit_product" value="Lưu" />
                                </td>
                            </tr>
                        </table>
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