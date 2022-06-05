<?php
    if(isset($_POST)){
        include("Connect.php");
        $name = $_POST["name"];
        $type = $_POST["type"];
        $brand = $_POST["brand"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $description = $_POST["description"];
        $path = 'images/';
        $file = $path.basename($_FILES['image']['name']);
        if(!file_exists($file)){
            $rs = move_uploaded_file($_FILES['image']['tmp_name'], $file);
        }
        $sql = "insert into sanpham (name, type, brand, image, price, quantity, description) values('$name', '$type', '$brand', '$file', '$price', '$quantity', '$description')";
        mysqli_query($conn, $sql);
        echo "<script>setTimeout(\"location.href = 'Form_ShowSP.php?id=$ma';\",500);</script>";
        echo "<script>alert('Thêm thành công.')</script>";
    }
?>