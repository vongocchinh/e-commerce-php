<?php

require '../libs/connect.php';

// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_brand($id);
}

// Trở về trang danh sách
header("location: brand-list.php");