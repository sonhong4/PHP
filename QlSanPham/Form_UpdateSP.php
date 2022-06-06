<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Form_NhapSP.css" />
    <title>Document</title>
</head>
<body>
<?php
include("Connect.php");
$ma = $_GET['id'];
$sql = "select * from sanpham where id = '$ma'";
$result = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($result);
?>
    <div class="form_input">
        <div class="overlay" style="bottom:-50.5%"></div>
        <div class="form_body">
            <a href="Form_ShowSP.php"><img class="close_image" src="../image_common/close.jpg" /></a>
            <form method="post" enctype="multipart/form-data" action="Update.php?id=<?=$ma?>">
                <p class="form_header">Form cập nhật sản phẩm</p>
                <div class="form-group">
                  <label>Tên SP:</label>
                  <input type="text" class="form-control name_input" placeholder="Enter name" value=<?php echo "'".$r["name"]."'"?> name="name">
                </div>
                <div class="form-group">
                    <label>Loại SP:</label>
                    <select name="type" class="form-control type_selection" >
                        <option value="1" <?php echo $r["type"] == 1 ? "selected" : "" ?>>Kính râm</option>
                        <option value="2" <?php echo $r["type"] == 2 ? "selected" : "" ?>>Kính cận</option>
                        <option value="3" <?php echo $r["type"] == 3 ? "selected" : "" ?>>Kính thời trang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Thương hiệu:</label>
                    <input type="text" class="form-control brand_input" placeholder="Enter brand"  name="brand"  <?=$r["description"] != "" ? "value=".$r['brand'] : ""?> />
                </div>
                <div class="form-group">
                    <label>Giá:</label>
                    <input type="text" class="form-control price_input" placeholder="Enter price" value=<?=$r["price"]?> name="price" />
                </div>
                <div class="form-group">
                    <label>Số lượng:</label>
                    <input type="number" class="form-control quantily_input" placeholder="Enter quantily" value=<?=$r["quantity"]?> name="quantity" />
                </div>
                <div class="form-group">
                    <label>Mô tả:</label>
                    <input type="text" class="form-control description_input" placeholder="Enter description" name="description" <?=$r["description"] != "" ? "value=".$r['description'] : ""?> />
                </div>
                <div class="form-group">
                    <label>Ảnh:</label>
                    <input type="file" name="image"  value=<?=$r["image"]?>/>
                </div>
                <div class="form_btn">
                    <button type="submit" class="btn btn-primary update_btn">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>