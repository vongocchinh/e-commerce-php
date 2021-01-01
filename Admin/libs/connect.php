<?php
// Biến kết nối toàn cục
//giống import connect
global $conn;


function connect_db()
{
    global $conn;
    
    
    if (!$conn){
        $conn = mysqli_connect('localhost:3307', 'root', '123456', 'dienthoai')

         or die ('Can\'t not connect to database');
	
        mysqli_set_charset($conn, 'utf-8');
    }

}
function get_all_slider(){
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from slider,product where product.product_id=slider.product_id";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_all_admin(){
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from login_admin";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_star($pro_id , $level){
    global $conn;
    
    
    connect_db();
    
   
     $sql="select count(re_id) as c from review where product_id= $pro_id and re_star= $level";
          $result=mysqli_query($conn, $sql);
          if($result)
             {
                while($row=mysqli_fetch_assoc($result))
              {
                    $result=$row['c'];
              }     
             }   

    return $result;
}


                     
                                      
                  
function get_all_baiviet(){
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from bai_viet";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}


function disconnect_db()
{
   
    global $conn;
    
   
    if ($conn){
        mysqli_close($conn);
    }
}


function get_all_brand()
{
    
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from brand";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_all_contact()
{
    
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from contact";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_all_user()
{
   
    global $conn;
    
    
    connect_db();
    
    
    $sql = "select * from login_user";
    
   
    $query = mysqli_query($conn, $sql);
    
  
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
  
    return $result;
}
function get_all_newservlet()
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from newserletter";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
 
    return $result;
}

function get_all_cafe_1()
{
   
    global $conn;
    
  
    connect_db();
    
    
    $sql = "select * from brand";
    
 
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    
    return $result;
}
function get_all_category()
{
    
    global $conn;
    
   
    connect_db();
    
  
    $sql = "select * from category ";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    
    return $result;
}
function get_all_bill()
{
    
    global $conn;
    
   
    connect_db();
    
  
    $sql = "select * from bill ";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    
    return $result;
}
function get_all_bill_detail($bill_id)
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from bill_detail where bill_id={$bill_id} ";
    
  
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_sp_noi_bat(){
      global $conn;
    
    
    connect_db();
     $sql7="SELECT * FROM count_product,product where product.product_id=count_product.id_product  ORDER BY count DESC limit 10 ";
                    $query7= mysqli_query($conn, $sql7);
                       $result7 = array();
                    
                    if ($query7){
                        while ($row7 = mysqli_fetch_assoc($query7)){
                            $result7[] = $row7;
                        }
                    }
                    return $result7; 
}
function get_sp_km(){
      global $conn;
    
    
    connect_db();
     $sql7="SELECT * FROM count_product,product  ORDER BY product_giamgia !=0 DESC limit 10 ";
                    $query7= mysqli_query($conn, $sql7);
                       $result7 = array();
                    
                    if ($query7){
                        while ($row7 = mysqli_fetch_assoc($query7)){
                            $result7[] = $row7;
                        }
                    }
                    return $result7; 
}
function get_cafe_name_product($product_id){
     global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from product,brand,category where product_id = {$product_id} AND product.brand_id=brand.brand_id AND product.category_id=category.category_id";
    
   
    $query = mysqli_query($conn, $sql);
    
  
    $result = array();
    
   
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
  
    return $result;
}
function get_category_name_product($product_id){
     global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from product,category where product_id = {$product_id} AND product.category_id=category.category_id ";
    
   
    $query = mysqli_query($conn, $sql);
    
  
    $result = array();
    
   
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
  
    return $result;
}
function get_brand($brand_id)
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from brand where brand_id = {$brand_id}";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
  
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    
    return $result;
}
function get_bv($baiviet_id)
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from bai_viet where baiviet_id = {$baiviet_id}";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
  
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    
    return $result;
}
function get_category($category_id)
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from category where category_id = {$category_id}";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
  
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    
    return $result;
}
function get_User($login_id)
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from login_user where login_id = {$login_id}";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
  
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    
    return $result;
}
function add_category1($category_name)
{
 
    global $conn;
    
   
    connect_db();
    
   
    $category_name = addslashes($category_name);
   
    
    
    $sql = "INSERT INTO category(category_name) VALUES
            ('$category_name')";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_bv($tieude,$name,$img)
{
 
    global $conn;
    
   
    connect_db();
    
   
    $name = addslashes($name);
     $tieude = addslashes($tieude);
      $img = addslashes($img);
   
    
    
    $sql = "
            INSERT INTO bai_viet(baiviet_td,baiviet_name,img) VALUES
            ('$tieude','$name','$img')
    ";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_brand($brand_name)
{
 
    global $conn;
    
   
    connect_db();
    
   
    $brand_name = addslashes($brand_name);
   
    
    
    $sql = "
            INSERT INTO brand(brand_name) VALUES
            ('$brand_name')
    ";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_admin($login_name,$login_pass,$sdt,$chuc_vu,$dia_chi,$login_role,$login_ten)
{
 
    global $conn;
    
   
    connect_db();
    
   
    $login_name = addslashes($login_name);
      $login_pass = addslashes($login_pass);
        $sdt = addslashes($sdt);
          $chuc_vu = addslashes($chuc_vu);
            $dia_chi = addslashes($dia_chi);
              $login_role = addslashes($login_role);
                $login_ten = addslashes($login_ten);
   
    
    
    $sql = "
            INSERT INTO login_admin(login_name,login_pass,sdt,chuc_vu,dia_chi,login_role,login_ten) VALUES
            ('$login_name','$login_pass','$sdt','$chuc_vu','$dia_chi','$login_role','$login_ten')
    ";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_slider($product_id,$img_slider)
{
 
    global $conn;
    
   
    connect_db();
    
   
    $product_id = addslashes($product_id);
    $img_slider=addslashes($img_slider);
   
    
    
    $sql = "
            INSERT INTO slider(product_id,img_slider) VALUES
            ('$product_id','$img_slider')
    ";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_newservlet($ser_mail)
{
    
    global $conn;
    
 
    connect_db();
    
   
    $ser_mail = addslashes($ser_mail);
   
    
   
    $sql = "
            INSERT INTO newserletter(ser_mail) VALUES
            ('$ser_mail')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_category($name)
{
    
    global $conn;
    
 
    connect_db();
    
   
    $category_name = addslashes($name);
   
    
   
    $sql = "
            INSERT INTO category(category_name) VALUES
            ('$category_name')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function bill($bill_id,$login_id,$bill_sl,$bill_tongtien,$login_mail1,$login_diachi1,$bill_ngay,$bill_name1,$login_sdt1,$tinh,$huyen,$xa,$so_nha)
{
   
    global $conn;
    
   
    connect_db();
    
   
    $login_id = addslashes($login_id);
     $bill_sl = addslashes($bill_sl);
      $bill_tongtien = addslashes($bill_tongtien);
       $login_mail = addslashes($login_mail1);
        $login_diachi = addslashes($login_diachi1);
         $bill_ngay = addslashes($bill_ngay);
          $bill_name = addslashes($bill_name1);
           $login_sdt = addslashes($login_sdt1);
           $tinh=addslashes($tinh);
           $huyen=addslashes($huyen);
           $xa=addslashes($xa);
           $so_nha=addslashes($so_nha);
            $bill_id = addslashes($bill_id);
           
   
    
   
    $sql = "
            INSERT INTO bill(bill_id,login_id,bill_sl,bill_tongtien,login_mail,login_diachi,bill_ngay,bill_name,login_sdt,tinh,huyen,xa,so_nha) VALUES
            ('$bill_id','$login_id','$bill_sl','$bill_tongtien','$login_mail','$login_diachi','$bill_ngay','$bill_name',
            '$login_sdt','$tinh','$huyen','$xa','$so_nha')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function bill_detail($bill_id,$product_id,$product_name,$bill_detail_price,$bill_detail_soluong)
{
   
    global $conn;
    
   
    connect_db();
    
  
    $product_id = addslashes($product_id);
     $product_name = addslashes($product_name);
     $bill_id = addslashes($bill_id);
      $bill_detail_price = addslashes($bill_detail_price);
       $bill_detail_soluong = addslashes($bill_detail_soluong);
      
       
           
   
    
   
    $sql = "
            INSERT INTO bill_detail(bill_id,product_id,product_name,bill_detail_price,bill_detail_soluong,bill_detail_size) VALUES
            ('$bill_id','$product_id','$product_name','$bill_detail_price','$bill_detail_soluong')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function add_user($login_name,$login_mail,$login_sdt,$login_diachi,$login_pass,$login_role,$login_ten)
{
    
    global $conn;
    
   
    connect_db();
    
   
    $login_name = addslashes($login_name);
     $login_mail = addslashes($login_mail);
      $login_sdt = addslashes($login_sdt);
       $login_diachi = addslashes($login_diachi);
     $login_pass = addslashes($login_pass);
        $login_role = addslashes($login_role);
           $login_ten = addslashes($login_ten);

   
    
    
    $sql = "
            INSERT INTO login_user(login_name,login_mail,login_sdt,login_diachi,login_pass,login_role,login_ten) VALUES
            ('$login_name','$login_mail','$login_sdt','$login_diachi','$login_pass','$login_role','$login_ten')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}

function edit_category($category_id, $category_name)
{
    
    global $conn;
    
   
    connect_db();
    
   
    $category_name= addslashes($category_name);
      $category_id= addslashes($category_id);
   
    
   
    $sql = "UPDATE category SET  category_name = '$category_name' WHERE category_id = $category_id";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function edit_brand($brand_id, $brand_name)
{
    
    global $conn;
    
   
    connect_db();
    
   
    $brand_name= addslashes($brand_name);
   
    
   
    $sql = "UPDATE brand SET  brand_name = '$brand_name' WHERE brand_id = $brand_id";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function edit_bv($baiviet_id,$baiviet_td, $baiviet_name,$img)
{
    
    global $conn;
    
   
    connect_db();
    
   
    $brand_name= addslashes($brand_name);
      $baiviet_td= addslashes($baiviet_td);
        $img= addslashes($img);
   
    
   
    $sql = "UPDATE bai_viet SET  baiviet_td = '$baiviet_td', baiviet_name='$baiviet_name',img='$img' WHERE baiviet_id = $baiviet_id";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}


function delete_category($category_id)
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = " DELETE FROM category WHERE category_id = $category_id";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function delete_brand($brand_id)
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = " DELETE FROM brand WHERE brand_id = $brand_id";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function delete_bv($baiviet_id)
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = " DELETE FROM bai_viet WHERE baiviet_id = $baiviet_id";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}

function delete_slider($id)
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = " DELETE FROM `slider` WHERE slider_id = $id";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function delete_bill($bill_id)
{
  
    global $conn;
    
    
    connect_db();
    
    
    $sql = " DELETE FROM bill WHERE bill_id = $bill_id";
    
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function get_all_product()
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from product ";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_all_bv()
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from bai_viet ";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_all_product_sale()
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from product where product_giamgia !=0";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_all_product_1()
{
    
    global $conn;
    
   
    connect_db();
    
   
    $sql = "select * from product,brand where product.brand_id=brand.brand_id and  product.category_id=category.category_id ";
    
    
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}

function get_all_product_rand()
{
   
    global $conn;
    
  
    connect_db();
    
    
    $sql = "select * from product order by RAND()  LIMIT 0,4";
    
  
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
   
    return $result;
}
function get_tsp($brand_id)
{
  
    global $conn;
    
   
    connect_db();
    
   
    $sql = "select * from brand where brand_id={$brand_id}";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    return $result;
}
function get_tsp_category($category_id)
{
  
    global $conn;
    
   
    connect_db();
    
   
    $sql = "select * from category where category_id={$category_id}";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
    
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    return $result;
}
function xuat_bill()
{
    
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from bill";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
 
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
   
    return $result;
}function get_all_product_brand_category($brand_id,$category_id)
{
   
    global $conn;
    
    
    connect_db();
    
    
    $sql = "select * from product WHERE brand_id={$brand_id} AND category_id={$category_id} ";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
 
    return $result;
}
function get_all_product_brand($brand_id)
{
   
    global $conn;
    
    
    connect_db();
    
    
    $sql = "select * from product where brand_id={$brand_id} ";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
 
    return $result;
}
function get_all_product_category($category_id)
{
   
    global $conn;
    
    
    connect_db();
    
    
    $sql = "select * from product where category_id={$category_id} ";
    
   
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
 
    return $result;
}
function get_all_product_brand_Random_15($category_id)
{
    
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from product where category_id={$category_id} order by RAND()  LIMIT 0,15";
    
    
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    

    return $result;
}
function get_all_product_brand_Random_5($category_id)
{
    
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from product where category_id={$category_id} order by RAND()  LIMIT 0,5";
    
    
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    

    return $result;
}

function get_all_product_brand_Random_10($category_id)
{
    
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from product where category_id={$category_id} order by RAND()  LIMIT 0,10";
    
    
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    

    return $result;
}
function get_all_product_brand_Random_3($brand_id)
{
    
    global $conn;
    
    
    connect_db();
    
   
    $sql = "select * from product where brand_id={$brand_id} order by RAND()  LIMIT 0,3";
    
    
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
    
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    

    return $result;
}
function get_all_product_brand_Random_4($brand_id)
{
    
    global $conn;
    
   
    connect_db();
    
  
    $sql = "select * from product where brand_id={$brand_id} order by RAND()  LIMIT 0,10";
    
    
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
   
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
  
    return $result;
}

function get_product($product_id)
{
  
    global $conn;
    
  
    connect_db();
    
   
    $sql = "select * from product where product_id = {$product_id}";
    
 
    $query = mysqli_query($conn, $sql);
    
    
    $result = array();
    
   
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    
    return $result;
}


function add_product($brand_id,$category_id,$product_name,$product_price,$product_giamgia,$cam_truoc,$cam_sau,$man_hinh,$ram,$rom,$hdh,$phien_ban,$size,$ho_tro,$chuc_nang,$mo_ta,$product_img,$product_img2)
{
    
    global $conn;
    
    
    connect_db();
    
   
   $brand_id= addslashes($brand_id);
    $category_id= addslashes($category_id);
    $product_name= addslashes($product_name);
    $product_price= addslashes($product_price);
     $product_giamgia= addslashes($product_giamgia);
      $cam_truoc= addslashes($cam_truoc);
       $cam_sau= addslashes($cam_sau);
        $man_hinh= addslashes($man_hinh);
         $ram= addslashes($ram);
          $rom= addslashes($rom);
           $hdh= addslashes($hdh);
            $phien_ban= addslashes($phien_ban);
             $size= addslashes($size);
              $ho_tro= addslashes($ho_tro);
               $chuc_nang= addslashes($chuc_nang);
                $mo_ta= addslashes($mo_ta);
    $product_img= addslashes($product_img);
    $product_img2= addslashes($product_img2);
    
   
    
   
    $sql = "
            INSERT INTO product(brand_id,category_id,product_name,product_price,product_giamgia,cam_truoc,cam_sau,man_hinh,ram,rom,hdh,phien_ban,size,ho_tro,chuc_nang,mo_ta,product_img,product_img2) VALUES
            ('$brand_id','$category_id','$product_name','$product_price','$product_giamgia','$cam_truoc','$cam_sau','$man_hinh','$ram','$rom','$hdh','$phien_ban','$size','$ho_tro','$chuc_nang','$mo_ta','$product_img','$product_img2')
    ";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}



function edit_product($product_id,$brand_id,$category_id,$product_name,$product_price,$product_giamgia,$cam_truoc,$cam_sau,$man_hinh,$ram,$rom,$hdh,$phien_ban,$size,$ho_tro,$chuc_nang,$mo_ta,$product_img,$product_img2)
{
   
    global $conn;
    
   
    connect_db();
    
   $brand_id= addslashes($brand_id);
      $category_id= addslashes($category_id);
    $product_name= addslashes($product_name);
    $product_price= addslashes($product_price);
     $product_giamgia= addslashes($product_giamgia);
      $cam_truoc= addslashes($cam_truoc);
       $cam_sau= addslashes($cam_sau);
        $man_hinh= addslashes($man_hinh);
         $ram= addslashes($ram);
          $rom= addslashes($rom);
           $hdh= addslashes($hdh);
            $phien_ban= addslashes($phien_ban);
             $size= addslashes($size);
              $ho_tro= addslashes($ho_tro);
               $chuc_nang= addslashes($chuc_nang);
                $mo_ta= addslashes($mo_ta);
    $product_img= addslashes($product_img);
    $product_img2= addslashes($product_img2);
     
     $product_id= addslashes($product_id);
   
    
    
    $sql = "UPDATE product SET brand_id='$brand_id',category_id='$category_id' ,product_name = '$product_name',product_price='$product_price',product_giamgia='$product_giamgia',
    cam_truoc='$cam_truoc',cam_sau='$cam_sau',man_hinh='$man_hinh',ram='$ram',rom='$rom',hdh='$hdh',phien_ban='$phien_ban',size='$size',ho_tro='$ho_tro',chuc_nang='$chuc_nang',mo_ta='$mo_ta'
    ,product_img='$product_img',product_img2='$product_img2' WHERE product_id = $product_id";
  
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}



function delete_product($product_id)
{
    
    global $conn;
    
   
    connect_db();
    
   
    $sql = " DELETE FROM product WHERE product_id = '$product_id'";
    
   
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function edit_user($login_id, $login_name,$login_mail,$login_sdt,$login_diachi,$login_pass,$login_role,$login_ten)
{
   
    global $conn;
    
   
    connect_db();
    
   
    
    $login_name = addslashes($login_name);
     $login_mail = addslashes($login_mail);
      $login_sdt = addslashes($login_sdt);
       $login_diachi = addslashes($login_diachi);
     $login_pass = addslashes($login_pass);
      $login_role = addslashes($login_role);
       $login_ten = addslashes($login_ten);
     
      $login_id= addslashes($login_id);
   
    
   
    $sql = "UPDATE login_user SET  login_name = '$login_name' ,login_mail='$login_mail',login_sdt='$login_sdt',login_diachi='$login_diachi', login_pass='$login_pass' ,login_role='$login_role',login_ten='$login_ten' WHERE login_id = $login_id";
    
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
function edit_admin($login_id, $login_name,$login_pass,$sdt,$chuc_vu,$dia_chi,$login_role,$login_ten)
{
    
    global $conn;
    
  
    connect_db();
    
   
    
    $login_name = addslashes($login_name);
  
     $login_pass = addslashes($login_pass);
      $sdt = addslashes($sdt);
       $chuc_vu = addslashes($chuc_vu);
        $dia_chi = addslashes($dia_chi);
         $login_role = addslashes($login_role);
          $login_ten = addslashes($login_ten);
     
      $login_id= addslashes($login_id);
   
    
    
    $sql = "UPDATE login_admin SET  login_name = '$login_name' , login_pass='$login_pass',sdt='$sdt',chuc_vu='$chuc_vu',dia_chi='$dia_chi',login_role='$login_role',login_ten='$login_ten' WHERE login_id = $login_id ";
    

    $query = mysqli_query($conn, $sql);
    
    return $query;
}


function get_admin($login_id)
{
   
    global $conn;
    
   
    connect_db();
    
    
    $sql = "select * from login_admin WHERE login_id={$login_id} ";
    
    
    $query = mysqli_query($conn, $sql);
    
   
    $result = array();
    
   if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
   
    return $result;
}
function bill_detail1($bill_id,$product_id,$product_name,$bill_detail_price,$bill_detail_soluong){


    global $conn;
    
   
    connect_db();

    $bill_id = addslashes($bill_id);

    $product_id = addslashes($product_id);

    $product_name = addslashes($product_name);

    $bill_detail_price = addslashes($bill_detail_price);

    $bill_detail_soluong = addslashes($bill_detail_soluong);


    $sql = "
            INSERT INTO bill_detail(bill_id,product_id,product_name,bill_detail_price,bill_detail_soluong) VALUES(
            '$bill_id','$product_id','$product_name','$bill_detail_price','$bill_detail_soluong')";

    $query = mysqli_query($conn, $sql);
    
    return $query;
}