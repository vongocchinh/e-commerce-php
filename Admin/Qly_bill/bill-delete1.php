<?php

require '../libs/connect.php';

$id = isset($_POST['bill_id']) ? (int)$_POST['bill_id'] : '';
if ($id){
    delete_bill($id);
   
}
header("location: bill-list.php");
?>