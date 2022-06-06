<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin-Website</h1>
    </header>
    <div class="main">
        <nav>
            <ul class="menu">
                <li ><a class="active" href="#">Quản lí sản phẩm</a></li>
                <li><a href="#">Quản lí loại sản phẩm</a></li>
                <li><a href="#">Quản lí tài khoản</a></li>
                <li><a href="#">Quản lí đơn hàng</a></li>
                <li><a href="#">1111111111</a></li>
            </ul>
        </nav>
        <div class="content">
            <?php 
               
                // include '../QlSanPham/Form_ShowSP.php';
                include "../QlSanPham/Form_ShowSP.php"; 
            ?>
        </div>
    </div>
</body>

<script  type="text/javascript">
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    const li = $$(".menu >li>a");
    li.forEach((item) => {
        item.addEventListener("click", () => { 
            $('.active').classList.remove("active");
            item.classList.add("active");
            let tmp = item.textContent; 
            switch (tmp) {
                case 'Quản lí sản phẩm':
                    $('.content').innerHTML = `<?php
                                                include '../QlSanPham/Form_ShowSP.php'
                                                ?>`
                    break;
                case 'Quản lí loại sản phẩm':   
                    $('.content').innerHTML = `<?php
                                                include '../QlLoaiSP/test.php'
                                                ?>`
                    break;
            }
        })
    })

    function confirmDelete(delUrl) {
            if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")) {
                document.location = delUrl;         
            }
        }
</script>
</html>