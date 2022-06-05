<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Form_ShowSP.css" />
    <title>Document</title>
</head>

<body>
    <div class="product_table">
        <div>
            <a href="Form_NhapSP.html">
                <button class="add_btn">Thêm sản phẩm</button>
            </a>
        </div>
        <table class="table">
            <caption class="table_caption">Bảng quản lý sản phẩm</caption>
            <tr class="table_row">
                <th>Mã SP</th>
                <th>Tên SP</th>
                <th>Loại SP</th>
                <th>Thương Hiệu</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Mô Tả</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
            </tr>
<?php
    include("Connect.php");
    $sql = "select * from sanpham";
    $result = mysqli_query($conn, $sql);
    while($r = mysqli_fetch_assoc($result)){
?>
            <tr class="table_row">
                <td><?=$r['id']?></td>
                <td><?=$r['name']?></td>
                <td><?=$r['type']?></td>
                <td><?=$r['brand']?></td>
                <td><?=$r['price']?></td>
                <td><?=$r['quantity']?></td>
                <td><?=$r['description']?></td>
                <td>
                    <img src=<?=$r['image']?> />
                </td>
                <td>
                    <a href="Form_UpdateSP.php?id=<?=$r['id']?>">
                        <button>Sửa</button>
                    </a>
                    <a href="javascript:confirmDelete('Form_DeleteSP.php?id=<?=$r['id']?>')">
                        <button>Xóa</button>
                    </a>
                </td>
            </tr>
<?php
    }
?>
            
        </table>
    </div>
    <script>
        function confirmDelete(delUrl) {
            if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")) {
                document.location = delUrl;
            }
        }
    </script>
</body>

</html>