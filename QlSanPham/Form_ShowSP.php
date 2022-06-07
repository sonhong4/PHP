<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="product_table" style="padding: 20px;">
        <p style="font-size: 25px; font-weight: 700; margin-bottom: 16px; text-align: center;">Bảng quản lý sản phẩm</p>
        <div>
            <a href="Form_NhapSP.php">
                <button class="btn btn-primary">Thêm sản phẩm</button>
            </a>
        </div>
        <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">Mã SP</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Loại SP</th>
                    <th scope="col">Thương Hiệu</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Mô Tả</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
<?php
    include("Connect.php");
    $sql = "select * from sanpham";
    $result = mysqli_query($conn, $sql);
    while($r = mysqli_fetch_assoc($result)){
        $type = $r['type'];
        $sql1 = "select * from loaisp where id = '$type'";
        $re = mysqli_query($conn, $sql1);
        if(mysqli_num_rows( $re) > 0){
            $nameType = mysqli_fetch_assoc($re)['name'];
        }
        else{
            $nameType = "";
        }
?>
            
            <tr>
                <td  scope="row"><?=$r['id']?></td>
                <td><?=$r['name']?></td>
                <td><?=$nameType?></td>
                <td><?=$r['brand']?></td>
                <td><?=$r['price']?></td>
                <td><?=$r['quantity']?></td>
                <td><?=$r['description']?></td>
                <td>
                    <img style="width:50px; height: 50px;" src=<?=$r['image']?> />
                </td>
                <td>
                    <a href="Form_UpdateSP.php?id=<?=$r['id']?>">
                        <button class="btn btn-primary">Sửa</button>
                    </a>
                </td>
                <td>
                    <a href="javascript:confirmDelete('Form_DeleteSP.php?id=<?=$r['id']?>')">
                        <button class="btn btn-primary">Xóa</button>
                    </a>
                </td>
            </tr>
<?php
    }
?>
            </tbody>
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