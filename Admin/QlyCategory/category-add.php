 <?php
//như include;
require '../libs/connect.php';

// Nếu người dùng submit form
if (!empty($_POST['add_category_name']))
{
    // Lay data
    $data1['name'] = isset($_POST['name_category']) ? $_POST['name_category'] : '';
  
    
    // Validate thong tin
    $errors = array();
    if (empty($data1['name'])){
        $errors['name'] = 'Chưa nhập tên Hãng';
    }
    
    
    // Neu ko co loi thi insert
    if (!$errors){
        add_category($data1['name']);
        // Trở về trang danh sách
        header("location: category-list.php");
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
                    
                    <form method="post" action="category-add.php">
                        
                            <tr>
                                <td><p>Category Name</p></td>
                                <td>
                                    <input class="input" type="text" name="name_category"/>
                                  <span style="color:red;margin-left: 10px">  
                                    <?php if (!empty($errors['name'])) echo $errors['name']; ?>  
                                  </span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <p></p>
                                <td>
                                    <input class="btn-luu" type="submit" name="add_category_name" value="Lưu" />
                                </td>
                            </tr>
                        
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