
<link rel="stylesheet" href="../QlSanPham/Form_ShowSP.css" />
    <div class="product_table">
        <div>
            <a href="../QlSanPham/Form_NhapSP.html">
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
                    <a href="../QlSanPham/Form_UpdateSP.php?id=<?=$r['id']?>">
                        <button>Sửa</button>
                    </a>
                    <a href="javascript:confirmDelete('../QlSanPham/Form_DeleteSP.php?id=<?=$r['id']?>')">
                        <button>Xóa</button>
                    </a>
                </td>
            </tr>
<?php
    }
?>         
        </table>
    </div>
  
   
    
    
   