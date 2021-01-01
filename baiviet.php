<?php 
session_start();
?>
<?php
  require './Admin/libs/connect.php';

  $id = isset($_GET['baiviet_id']) ? (int)$_GET['baiviet_id'] : '';
if ($id){
  $data=get_bv($id);
        
        }     
?>
<html>
<head>
    <meta charset='utf-8'>
     <link rel="shortcut icon" href="images/favicon.ico" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="product/total.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<style type="text/css">  
</style>
</head>
<body>
<?php include("head.php");?>
     <div class="container2">
        <?php echo $data['baiviet_name']?>
    </div>

<?php include('footer.php')?>
</body>
</html>