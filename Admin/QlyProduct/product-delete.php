<?php

require '../libs/connect.php';

// Thực hiện xóa
$id = isset($_POST['product_id']) ? (int)$_POST['product_id'] : '';
if ($id){
    delete_product($id);
}

// Trở về trang danh sách
header("location: product-list.php");