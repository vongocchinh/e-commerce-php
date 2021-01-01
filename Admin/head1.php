<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="public/style.css" rel="stylesheet" />
        <link href="css/index.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
            a.nav-link{
                background-color: #212529;
                font-size: 14px;
                font-family: 'Source Sans Pro', sans-serif;
                color: white;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
       
       
            <div id="layoutSidenav_nav" class="layoutSidenav_nav12">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a  class="nav-link" href="/dienthoai/Admin/index.php"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Quản lý Danh Mục
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/dienthoai/Admin/QlyProduct/product-list.php">Quản Lý Products</a>
                                     <a class="nav-link" href="/dienthoai/Admin/QlyBrand/brand-list.php">Quản Lý Brand</a>
                                      <a class="nav-link" href="/dienthoai/Admin/QlyCategory/category-list.php">Quản Lý Category</a>
                                       <a class="nav-link" href="/dienthoai/Admin/Qly_bill/bill-list.php">Quản Lý Bill</a>
                                        <a class="nav-link" href="/dienthoai/Admin/QlyBaiviet/baiviet-list.php">Quản Lý Post</a>
                                         <a class="nav-link" href="/dienthoai/Admin/QlySlider/slider-list.php">Quản Lý Slider</a>
                                         <a class="nav-link" href="/dienthoai/Admin/Qlyuser/user-list.php">Quản Lý User</a>
                                         <a class="nav-link" href="/dienthoai/Admin/Qlyuser/newservlet-list.php">Quản Lý Newserletter</a>
                                          <a class="nav-link" href="/dienthoai/Admin/QlyContact/Contact-list.php">Quản Lý Contact</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                             <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="/dienthoai/Admin/QlyAdmin/logout.php">Logout</a><a class="nav-link" href="/dienthoai/Admin/QlyAdmin/dangki.php">Register</a><a class="nav-link" href="#">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Admin
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="/dienthoai/Admin/QlyAdmin/myAdmin.php">myAdmin</a>
                                            <a class="nav-link" href="/dienthoai/Admin/QlyAdmin/list-admin.php">ListAdmin</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError-1" aria-expanded="false" aria-controls="pagesCollapseError">Insert danh mục
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError-1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                           <a class="nav-link" href="/dienthoai/Admin/QlyProduct/product-add.php">Thêm Products</a>
                                     <a class="nav-link" href="/dienthoai/Admin/QlyBrand/brand-add.php">Thêm Brand</a>
                                      <a class="nav-link" href="/dienthoai/Admin/QlyCategory/category-add.php">Thêm Category</a>
                                     
                                        <a class="nav-link" href="/dienthoai/Admin/QlyBaiviet/add-baiviet.php">Thêm Post</a>
                                         <a class="nav-link" href="/dienthoai/Admin/QlySlider/slider-add.php">Thêm Slider</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            ><a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
           
                       
          
     
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
