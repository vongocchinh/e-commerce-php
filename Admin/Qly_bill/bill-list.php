<?php
require '../libs/connect.php';
session_start();
$bill_xuat = get_all_bill();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Danh sách </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset='utf-8'>
    
    <link href="../css/head1.css" rel="stylesheet">
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
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Bill</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <td>Sô lượng</td>
                                                <td>Tổng tiền</td>
                                                <td>Mail</td>
                                                <td style="width: 500px">Địa chỉ</td>
                                                <td style="width: 200px">Ngày</td>
                                                <td>Name</td>
                                                <td>Phone</td>
                                                
                                                <th style="text-align: center;">Options</th>
                                                                      
                                            </tr>
                                        </thead>
                                        
                                          <?php 
                                      $i=1;
                                      foreach ($bill_xuat as $item){ ?>
                                      <tr class="tr-bottom">
                                          <td>
                                              <?php echo $i++;?>
                                          </td>
                                          
                                          <td>
                                              <?php echo $item['bill_sl']; 
                                               $_SESSION['bill_sl'] = $item['bill_sl'];
                                              ?>
                                          </td>
                                           <td>
                                              <?php echo number_format( $item['bill_tongtien']); ?> vnđ
                                          </td>
                                          <td >
                                              <?php echo $item['login_mail']; ?>
                                          </td>
                                           <td style="width: 500px">
                                              <span><?php echo $item['tinh']; ?>,
                                               <?php echo $item['huyen']; ?>,
                                                <?php echo $item['xa']; ?>,
                                                <?php echo $item['so_nha']; ?></span>
                                          </td>
                                           <td >
                                              <?php echo $item['bill_ngay']; ?>
                                          </td>
                                           <td >
                                              <?php echo $item['bill_name']; ?>
                                          </td>
                                           <td >
                                              <?php echo $item['login_sdt']; ?>
                                          </td>
                                          
                                          
                                          
                                          <td>
                                              <form class="form-right" method="post" action="bill-delete1.php">
                                                  <input   onclick="window.location='bill_detail_list.php?bill_id=<?php echo $item['bill_id']; ?>'" type="button"  value="Xem" />

                                                  <input type="hidden" name="bill_id" value="<?php echo $item['bill_id']; ?>" />
                                                  <input   onclick="return confirm('Bạn có chắc muốn xóa không?');" type="image" name="delete" src="../images/huy.jpg" style="width: 20px;position: absolute;margin-left: 5px;margin-right: 15px" alt="submit" alt="Submit"  />
                                              </form>
                                          </td>
                                      </tr>
                                      <?php } ?>
                                    </table>
                                </div>
                            </div>


                         </div>
                  </main>
                   <?php include("../footer.php");?>
                </div>

    </div>
      
</body>

    </html>