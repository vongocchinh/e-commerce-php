<html>

<head>
    <title> Trang chu template</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/star.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main-index.css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/show-banner.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/topPage.js"></script>

</head>
<body>
    
<div class="container">
      
        <div class="main-top">
            <div class="main-top1">
                <a href="product-total.php?brand_id=0&&category_id=8" id="dienthoai" class="menu"><img src="images/dt.png">Điện Thoại <i class='fas fa-angle-right'></i></a>
                <a href="product-total.php?brand_id=0&&category_id=12"  class="menu"><img src="images/lp.png">Laptop <i class='fas fa-angle-right'></i></a>
                <a href="product-total.php?brand_id=0&&category_id=11" class="menu"><img src="images/tb.png">Ipad <i class='fas fa-angle-right'></i></a>
                <a  href="product-total.php?brand_id=0&&category_id=9" class="menu"><img src="images/pk.png">Phụ Kiện <i class='fas fa-angle-right'></i></a>
                <a href="product-total.php?brand_id=0&&category_id=13" class="menu"><img src="images/dgd.png">Máy Ảnh</a>
                <a class="menu"><img src="images/tv.png">Tivi âm thanh</a>
                <a class="menu"><img src="images/tl.png">Tủ lạnh</a>
                <a class="menu"><img src="images/dh.png">Điều hòa</a>
                <a class="menu"><img src="images/tbvp.png">Thiết bị Văn phòng</a>
                <a href="sale.php" class="menu"><img src="images/mt.png">Sale</a>
            </div>
            <div class="main-top2">
                   <?php foreach ($slider as $key ) {?>
                <div class="myslider">
                 <a href="single-product.php?product_id=<?php echo $key['product_id']?>"><img src="/dienthoai/Admin/QlyProduct/uploads/<?php echo $key['img_slider'];?>""></a>
                </div>
                <?php }?>
                <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
                <a class="next" onclick="plusDivs(1)">&#10095;</a>
            </div>
            <div class="main-top3">
                <h3>Hệ Thống Cửa Hàng</h3>
                <p><img src="images/dc.png"><strong>Số 1174 Đường Láng, P. Láng thượng, Q. Đống Đa, Tp. Hà Nội</strong></p>
                <div class="p1"> <img src="images/dc.png"><strong>Số 159 Thái Hà, P. Láng Hạ, Q. Đống Đa, Tp. Hà Nội</strong></div>
                <div class="main-top-qc">
                    <img class="qc1" src="images/b2.png">
                </div>
                <div class="main-top-qc">
                    <img class="qc1" src="images/b1.png">
                </div>
            </div>

        </div>
    </div>

</body>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("myslider");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3000);
    }
</script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("myslider");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }

    function validateFormsearch() {
        var search = document.forms["myForm_search"]["search"].value;

        if (search == "") {
            alert("Nhập tên sản phẩm tìm");
            return false;
        }


    }
    </script>
</html>