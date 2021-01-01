 <?php
//như include;
require '../libs/connect.php';

// Nếu người dùng submit form
if (!empty($_POST['edit_login']))
{
    // Lay data
   
   
            
     $data['login_name']        = isset($_POST['login_name']) ? $_POST['login_name'] : '';
     
         $data['login_pass']        = isset($_POST['login_pass']) ? $_POST['login_pass'] : '';

         $data['login_sdt']        = isset($_POST['sdt']) ? $_POST['sdt'] : '';

         $data['login_chuccu']        = isset($_POST['chuc_vu']) ? $_POST['chuc_vu'] : '';

         $data['login_role']        = isset($_POST['login_role']) ? $_POST['login_role'] : '';

         $data['login_ten']        = isset($_POST['login_ten']) ? $_POST['login_ten'] : '';

         $data['login_diachi']        = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : '';
    
    // Validate thong tin
   
    if (!$errors){
          add_admin($data['login_name'], $data['login_pass'],$data['login_ten'],$data['login_diachi'],$data['login_chuccu'],$data['login_role'],$data['login_ten']);
        // Trở về trang danh sách
        header("location: list-admin.php");
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
                                    
                   
                    <form method="post" action="dangki.php">
                          <div class="left">
                               <p class="name">Username: </p>
                               <p><input class="input"  type="text" name="login_name"  /></p>

                               
                               
                              <p class="name">UserPass:</p>
                               <p> <input class="input" type="text" name="login_pass"  /></p>

                               <p class="name">Phone:</p>
                               <p> <input class="input" type="text" name="sdt"  /></p>

                               <p class="name">Address:</p>
                               <p> <input class="input" type="text" name="dia_chi"  /></p>
                          </div>
                          <div class="left">
                                <p class="name">Chuc vu:</p>
                               <p>
                                 <select class="input" name="chuc_vu">
                                   <option value="0">Admin</option>
                                   <option value="1">Nhân Viên</option>
                                 </select>
                               </p>
                                 <p class="name">Role:</p>
                                 <p> <input class="input" type="text" name="login_role"  /></p>

                                 <p class="name">Ho_ten:</p>
                                 <p> <input class="input" type="text" name="login_ten" /></p>
                          </div>
                 

                   <p>   
                  <input class="sb" type="submit" name="edit_login" value="Thêm">

                  </p>
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