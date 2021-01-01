<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link href="css/css_main.css" rel="stylesheet">
    <link href="css/css_main1.css" rel="stylesheet">
    <title>Trang chủ admin...</title>
    <script src="index.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
        
        .panel li a{
            font-family: sans-serif;
        }
        *{
            font-family: sans-serif;
        }
    </style>
</head>

<body class="body-nav">
	 <div class="clear"></div>
<div class="menu">

    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <h4 class="menu-text">MENU</h4>

    <div class="table-menu">
        <ul id="myMenu">
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/USER_MOI.png">Admin</a>
                <a class="icon"><img class="icon-mt" src="/Giay/Admin/images/mmt.png"></a>
            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/index.php">Trang Chủ</a></li>
                <li><a href="/dienthoai/Admin/QlyAdmin/myAdmin.php">Quản Ly Admin</a></li>
                <li><a href="/dienthoai/Admin/QlyAdmin/dangki.php">ADD Admin</a></li>
                <li><a href="/dienthoai/Admin/QlyAdmin/list-admin.php">List Admin</a></li>
                <li><a href="/dienthoai/Admin/QlyAdmin/logout.php">Đăng Xuất</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/CATEGORY_moi.png">Quản lý danh mục</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>
            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/QlyBrand/brand-list.php">Danh Sách</a></li>
                <li><a href="/dienthoai/Admin/QlyBrand/brand-add.php">Thêm Danh Mục</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/PRODUCT.png">Quản lý sản phẩm</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/QlyProduct/product-list.php">Sản Phẩm</a></li>
                <li><a href="/dienthoai/Admin/QlyProduct/product-add.php">Thêm Sản Phẩm</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/PRODUCT.png">Quản lý Category</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/QlyCategory/category-list.php">category</a></li>
                <li><a href="/dienthoai/Admin/QlyCategory/category-add.php">Thêm category</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/tb11.png">Quản lý user</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/Qlyuser/user-list.php">Danh Sách User</a></li>

            </div>

            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/form.png">add-shop</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/QlyBrand/brand-add.php">danh mục</a></li>
                <li><a href="/dienthoai/Admin/QlyProduct/product-add.php">sản phẩm</a></li>
                <li><a href="/dienthoai/Admin/QlyBaiviet/add-baiviet.php">Bai viết</a></li>
                <li><a href="/dienthoai/Admin/QlySlider/slider-add.php">Slider</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/USER_MOI.png">Pages</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a href="/dienthoai/Admin/Qlyuser/newservlet-list.php">List newsletter</a></li>
                <li><a href="/dienthoai/Admin/Qly_bill/bill-list.php">List-bill</a></li>
                <li><a href="/dienthoai/Admin/QlySlider/slider-list.php">List-slider</a></li>
                <li><a href="/dienthoai/Admin/QlyBaiviet/baiviet-list.php">List-baiviet</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/BRAND_Moi.png">App</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a>App-1</a></li>
                <li><a>App-2</a></li>
                <li><a>App-3</a></li>
            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/icon.png">Icons</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a>Icons-1</a></li>
                <li><a>Icons-2</a></li>
                <li><a>Icons-3</a></li>
            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/map.png">Map</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a href="map.html">Map-1</a></li>

            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/m_3.png">chart</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a>chart-1</a></li>
                <li><a>chart-2</a></li>
                <li><a>chart-3</a></li>
            </div>
            <li class="acc">
                <a class="text"><img src="/dienthoai/Admin/images/menu.png">Menu level</a>
                <a class="icon"><img class="icon-mt" src="/dienthoai/Admin/images/mmt.png"></a>

            </li>
            <div class="panel">
                <li><a>level-1</a></li>
                <li><a>level-2</a></li>
                <li><a>level-3</a></li>
            </div>
        </ul>
    </div>
</div>

<div class="menu2">
    <h4 class="menu-text2">FEATURES</h4>
    <div class="table-menu">
        <ul id="myMenu">


        </ul>
    </div>
</div>
</body>
<script>
    var acc = document.getElementsByClassName("acc");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            var pan = this.nextElementSibling;
            this.classList.toggle("active");
            if (pan.style.maxHeight) {
                pan.style.maxHeight = null;
            } else {

                pan.style.maxHeight = pan.scrollHeight + "px";
            }
        });
    }


    function myFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
</html>