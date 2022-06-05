<?php
    if(isset($_POST)){
        include("Connect.php");
        $ma = $_GET["id"];
        $name = $_POST["name"];
        $type = $_POST["type"];
        $brand = $_POST["brand"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $description = $_POST["description"];
        if($name == "" || $type == "" || $brand == "" || $price == "" || $quantity == "" || $description == ""){
            echo "<script>setTimeout(\"location.href = 'Form_UpdateSP.php?id=$ma';\",5);</script>";
            echo "<script>alert('Các trường không được để trống.')</script>";
        }
        else{
            if(!is_numeric($price)){
                echo "<script>setTimeout(\"location.href = 'Form_UpdateSP.php?id=$ma';\",500);</script>";
                echo "<script>alert('Giá phải là số.')</script>";
            }
            else{
                if(basename($_FILES['image']['name']) != null){
                    $path = 'images/';
                    $file = $path.basename($_FILES['image']['name']);
                    if(!file_exists($file)){
                        $rs = move_uploaded_file($_FILES['image']['tmp_name'], $file);
                    }
                    $sql = "update sanpham set name='$name', type = '$type', brand = '$brand', image = '$file', price='$price', quantity='$quantity', description='$description' where id = '$ma'";
                }
                else{
                    $sql = "update sanpham set name='$name', type = '$type', brand = '$brand', price='$price', quantity='$quantity', description='$description' where id = '$ma'";
                }
                mysqli_query($conn, $sql);
                echo "<script>setTimeout(\"location.href = 'Form_ShowSP.php';\",5);</script>";
                echo "<script>alert('Cập nhật thành công.')</script>";
            }
        }
    }
?>