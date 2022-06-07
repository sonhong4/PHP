<?php
    include("Connect.php");
    $ma = $_GET["id"];
    $sql = "delete from loaisp where id = '$ma'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>setTimeout(\"location.href = 'Form_ShowLoaiSP.php';\",5);</script>";
        echo "<script>alert('Xóa thành công.')</script>";
    }
?>