<?php

require '../libs/connect.php';

// Thực hiện xóa
$id = isset($_POST['slider_id']) ? (int)$_POST['slider_id'] : '';
if ($id){
    delete_slider($id);
}

// Trở về trang danh sách
header("location: slider-list.php");