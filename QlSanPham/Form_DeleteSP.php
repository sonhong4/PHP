<?php
    include("Connect.php");
    $ma = $_GET["id"];
    $sql = "delete from sanpham where id = '$ma'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>setTimeout(\"location.href = 'Form_ShowSP.php';\",5);</script>";
        echo "<script>alert('Xóa thành công.')</script>";
    }
?>