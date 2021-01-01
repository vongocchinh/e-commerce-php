<?php

require '../libs/connect.php';
global $conn;
session_start();
if (isset($_SESSION['bill_sl'])) {
	$dem=$_SESSION['bill_sl'];
}
$id = isset($_POST['bill_id']) ? (int)$_POST['bill_id'] : '';
if ($id){
    delete_bill($id);
   
}


$sql1 = "select * from count where id=1 ";
  $query1 = mysqli_query($conn, $sql1);
  $result1 = array();
    if (mysqli_num_rows($query1) > 0){
        $row1 = mysqli_fetch_assoc($query1);
        $result1 = $row1;
    }
    
$count=$result1;

// $dem=$count['count_dem'];


$dem=$dem+$count['count_dem'];
 
 $data['count'] = isset($dem) ? $dem : '';
   $count_nhap = addslashes($data['count']);
  $sql = "UPDATE count SET  count_dem = '$count_nhap' WHERE id = 1";
 $query = mysqli_query($conn, $sql);


header("location: bill-list.php");
?>