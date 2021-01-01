
<?php

require '../libs/connect.php';
global $conn;
connect_db();

if (isset($_POST["login"])) {
        // lấy thông tin người dùng
        $username = $_POST["name"];
        $password = $_POST["pass"];

        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
      
       
            $sql = "select login_id,login_name,login_pass from login_admin where login_name = '$username' and login_pass = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
                $result = array();
              if (mysqli_num_rows($query) > 0){
           $row = mysqli_fetch_assoc($query);
            $result = $row;
                   }
    
                $data=$result;
            if ($num_rows==0) {
                 $errors = array();
                $errors['erro'] = 'Vui Long Dang nhap lai !';
            }else{

                session_start();
                $_SESSION['username1'] = $result['login_name'];
                 $_SESSION['login_id'] = $result['login_id'];
               
                
                
                header('Location: ../index.php');
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
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
   
    <link href="../css/css_login.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />



</head>

<body>
   <?php include("../head.php");?>

    
    <div class="container">

        <div class="login-form-1">
            <h3>Login for Admin</h3>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name *" value="" autocomplete="off" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Your Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" name="login" value="Login" />
                </div>
                <p style="color:red;margin-left: 10px">  
                      <?php if (!empty($errors['erro'])) echo $errors['erro']; ?>  
                  </p>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                    <a href="register.html" class="ForgetPwd">Register ?</a>
                </div>
            </form>
        </div>
    </div>
 
</body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/show-detail.js "></script>
    <script src="js/search.js "></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</html>