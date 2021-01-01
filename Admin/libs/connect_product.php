<?php

global $conn;



function add_bill($login_id1,$bill_sl1,$bill_tongtien1,$login_mail1,$login_diachi1,$bill_ngay1,$bill_name1,$login_sdt1,$tinh,$huyen,$xa,$so_nha)
{
    
    global $conn;
    
   
    connect_db();
    
    $login_id1 = addslashes( $login_id1);
     $bill_sl1 = addslashes( $bill_sl1);
      $bill_tongtien1 = addslashes($bill_tongtien1);
       $login_mail1 = addslashes( $login_mail1);
     $login_diachi1= addslashes($login_diachi1);
      $bill_ngay1= addslashes($bill_ngay1);
       $bill_name1 = addslashes($bill_name1);
        $login_sdt1 = addslashes($login_sdt1);
         $tinh = addslashes($tinh);
          $huyen = addslashes($huyen);
           $xa = addslashes($xa);
            $so_nha = addslashes($so_nha);
        

   
    
   
    $sql = "
            INSERT INTO bill(login_id,bill_sl,bill_tongtien,login_mail,login_diachi,bill_ngay,bill_name,login_sdt,tinh,huyen,xa,so_nha) VALUES
            ('$login_id1','$bill_sl1,'$bill_tongtien1','$login_mail1','$login_diachi1','$bill_ngay1','$bill_name1','$login_sdt1','$tinh','$huyen','$xa','$so_nha')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function get_name($product_id){

  global $conn;
   
    connect_db();
    
  
    $sql = " select * from product where product_id={$product_id} ";
    
 
    $query = mysqli_query($conn, $sql);
    
  
    $result = array();
    
   
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
  
    return $result;
}


                      // $sql="select count(re_id) AS total from review ";
                      // $result=mysqli_query($conn, $sql);
                      // $values=mysqli_fetch($result);
                      // $num_row=$values['total'];
                      // echo $num_row;