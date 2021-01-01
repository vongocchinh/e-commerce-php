
<?php
   session_start();
   require '../libs/connect.php';


    if (isset($_SESSION['user_name'])) {
        $login_id=$_SESSION['user_name'];
         $login_id1=$_SESSION['login_id'];
   
    }
    // if(!$login_id1){
    //   header("location: login.php");
    // }
    $data44=get_admin($_SESSION['login_id']);
     ?>
     <?php
  
   if (!empty($_POST['edit_login']))
{
    // Lay data
    
   
    $data['login_id']          = isset($_POST['login_id']) ? $_POST['login_id'] : '';
            
     $data['login_name']        = isset($_POST['login_name']) ? $_POST['login_name'] : '';
     
         $data['login_pass']        = isset($_POST['login_pass']) ? $_POST['login_pass'] : '';

         $data['login_sdt']        = isset($_POST['sdt']) ? $_POST['sdt'] : '';

         $data['login_chuccu']        = isset($_POST['chuc_vu']) ? $_POST['chuc_vu'] : '';

         $data['login_role']        = isset($_POST['login_role']) ? $_POST['login_role'] : '';

         $data['login_ten']        = isset($_POST['login_ten']) ? $_POST['login_ten'] : '';

         $data['login_diachi']        = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : '';


    
    // Validate thong tin
    $errors = array();
    
    if (empty($data['login_name'])){
        $errors['erro'] = 'kiểm tra lại ';
    }
    if (empty($data['login_pass'])){
        $errors['login_pass'] = 'Chưa nhập pass ';
    }
   
    
   
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_admin($data['login_id'],$data['login_name'], $data['login_pass'],$data['login_ten'],$data['login_diachi'],$data['login_chuccu'],$data['login_role'],$data['login_ten']);
        // Trở về trang danh sách
        header("location: myAdmin.php");
    }
}

disconnect_db();
?>
<!DOCTYPE html>

<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
                                   
                 
            <form method="post" action="myAdmin.php?login_id=<?php echo $data44['login_id']?>" >
                <div>

                 
                   <p class="name">Username: </p>
                   <p><input class="nhap"  type="text" name="login_name" value="<?php echo $data44['login_name']?>" /></p>

                   
                   
                  <p class="name">UserPass:</p>
                   <p> <input class="nhap" type="text" name="login_pass" value="<?php echo $data44['login_pass']?>" /></p>

                   <p class="name">Phone:</p>
                   <p> <input class="nhap" type="text" name="sdt" value="<?php echo $data44['sdt']?>" /></p>

                   <p class="name">Address:</p>
                   <p> <input class="nhap" type="text" name="dia_chi" value="<?php echo $data44['dia_chi']?>" /></p>

                   <p class="name">Chuc vu:</p>
                   <p> <input class="nhap" type="text" name="chuc_vu" value="<?php echo $data44['chuc_vu']?>" /></p>

                   <p class="name">Role:</p>
                   <p> <input class="nhap" type="text" name="login_role" value="<?php echo $data44['login_role']?>" /></p>

                   <p class="name">Ho_ten:</p>
                   <p> <input class="nhap" type="text" name="login_ten" value="<?php echo $data44['login_ten']?>" /></p>

                 <p>   
                  <input type="hidden" name="login_id" value="<?php echo $data44['login_id']; ?>" />
                  <!--  <input style="background-color: white;color: white;width: 25px;" class="btn-luu" type="image" name="edit_login" alt="submit" src="../images/u.png"  /> -->
                  <input class="nhap" type="submit" name="edit_login" value="Thêm">

                  </p>

                  <p style="color:red;margin-left: 10px">  
                      <?php if (!empty($errors['erro'])) echo $errors['erro']; ?>  
                  </p>
                    
                </div>
            </form>
         </div>
       </div>
     </div>
   </div>
   </main>
          

            <div class="clear"></div>
       </div>
    </div>

      <?php include("../footer.php");?>  

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
</body>
</html>