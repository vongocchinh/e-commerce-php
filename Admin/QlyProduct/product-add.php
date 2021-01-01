 <?php
//như include;
require '../libs/connect.php';
 $brand_xuat = get_all_cafe_1();
 $category_xuat = get_all_category();
// Nếu người dùng submit form
if (!empty($_POST['add_product']))
{
    // Lay data
    $data['product_name'] = isset($_POST['name']) ? $_POST['name'] : '';
     $data['brand_id'] = isset($_POST['brand_id']) ? $_POST['brand_id'] : '';
       $data['category_id'] = isset($_POST['category_id']) ? $_POST['category_id'] : '';
      $data['product_price'] = isset($_POST['product_price']) ? $_POST['product_price'] : '';
      $data['product_giam_gia'] = isset($_POST['product_giam_gia']) ? $_POST['product_giam_gia'] : '';
       $data['product_img'] = isset($_POST['product_img']) ? $_POST['product_img'] : '';
        $data['product_img2'] = isset($_POST['product_img2']) ? $_POST['product_img2'] : '';
          
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
    
    // Validate thong tin
    $errors = array();
    if (empty($data['product_name'])){
        $errors['product_name'] = 'Chưa nhập tên Sản Phẩm';
    }
    
    
    // Neu ko co loi thi insert
    if (!$errors){
        add_product($data['brand_id'],$data['category_id'],$data['product_name'],$data['product_price'],$data['product_giam_gia'],$data['cam_truoc'],$data['cam_sau'],$data['man_hinh'],$data['ram'],$data['rom'],$data['hdh'],$data['phien_ban'], $data['size'],$data['ho_tro'],$data['chuc_nang'],$data['mo_ta'],$data['product_img'],$data['product_img2']);
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
         <link href="../css/head1.css" rel="stylesheet">
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
                                    
                  
                    <form method="post" action="product-add.php" >
                        <table width="100%" border="1" cellspacing="0" cellpadding="10">
                           
                                <tr>
                                    <td>Tên Category</td>
                                    <td><select name="category_id"  class="input">
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
                                    <td>Tên Hãng</td>
                                    <td><select name="brand_id"  class="input">
                                    <?php

                                     foreach ($brand_xuat as $item){
                                    ?>
                                        <option value="<?php echo $item['brand_id'] ?>"><?php echo $item['brand_name'] ?>
                                            
                                        </option>
                                        <?php
                                    }
                                        ?>
                                    </select></td>
                                 </tr>
                                <tr>
                                 <td>Tên Sản Phẩm</td>
                                <td>
                                    <input class="input" type="text" name="name" value="<?php echo !empty($data['cafe_name']) ? $data['cafe_name'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['cafe_name'])) echo $errors['cafe_name']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                 <td>Price</td>
                                <td>
                                    <input class="input" type="text" name="product_price" value="<?php echo !empty($data['product_price']) ? $data['product_price'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_price'])) echo $errors['product_price']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                 <td>Giam Gia (%)</td>
                                <td>
                                    <input class="input" type="text" name="product_giam_gia" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Cam trước</td>
                                <td>
                                    <input class="input" type="text" name="ct" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Cam sau</td>
                                <td>
                                    <input class="input" type="text" name="cs" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Man Hình</td>
                                <td>
                                    <input class="input" type="text" name="mh" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Ram</td>
                                <td>
                                    <input class="input" type="text" name="ram" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Rom</td>
                                <td>
                                    <input class="input" type="text" name="rom" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Hệ Điều Hành</td>
                                <td>
                                    <input class="input" type="text" name="hdh" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Phiên bản</td>
                                <td>
                                    <input class="input" type="text" name="pb" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Size</td>
                                <td>
                                    <input class="input" type="text" name="size" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Hộ trợ</td>
                                <td>
                                    <input class="input" type="text" name="ht" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                             <tr>
                                 <td>Chức năng</td>
                                <td>
                                    <input class="input" type="text" name="cn" value="<?php echo !empty($data['product_giam_gia']) ? $data['product_giam_gia'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_giam_gia'])) echo $errors['product_giam_gia']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                 <td>Img</td>
                                <td>
                                    <input class="input" type="file" name="product_img" value="<?php echo !empty($data['product_img']) ? $data['product_img'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_img'])) echo $errors['product_img']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                 <td>Img2</td>
                                <td>
                                    <input class="input" type="file" name="product_img2" value="<?php echo !empty($data['product_img2']) ? $data['product_img2'] : ''; ?>" />
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_img2'])) echo $errors['product_img2']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                 <td>Mo ta</td>
                                <td>
                                   <textarea  name="mt" id="mt" rows="30" cols="80"></textarea>

                                    <script>
                                        CKEDITOR.replace('mt');
                                    </script>
                                    <!-- <input type="text" name="mt" value="<?php echo !empty($data['product_mota']) ? $data['product_mota'] : ''; ?>" /> -->
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['product_mota'])) echo $errors['product_mota']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input class="btn-luu" type="submit" name="add_product" value="Lưu" />
                                </td>
                            </tr>
                        </table>
                    </form>
               <div style="margin-top: 30px;clear: both;">
                <hr style="width: 100%">
                     <?php

                    if(isset($_POST['sumbit'])){
                         $image=$_FILES['product_img']['name']; 
                         $imageArr=explode('.',$image); //first index is file name and second index file type
                        
                        
                         $uploadPath="uploads/". basename($_FILES["product_img"]["name"]);
                         $isUploaded=move_uploaded_file($_FILES["product_img"]["tmp_name"],$uploadPath);
                         
                     }
                    ?>
                   
                   <div style="margin-left: ;border-color: black;border-width: 1px;border-style: solid;
                   padding-left:5px;width: 500px">
                     <h3>Upload file</h3>
                    <form action="product-add.php" method="post" enctype="multipart/form-data" >
                        <p>Chọn file để upload:
                          (Cỡ lớn nhất mà PHP đang cấu hình cho phép upload là
                          <?=ini_get('upload_max_filesize')?>)</p>
                     <p></p>   <input class="input" name="product_img" type="file" multiple="multiple" /></p>
                     <p>   <input class="btn-luu" type="submit" value="Đăng ảnh" name="sumbit"></p>
                    </form>
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