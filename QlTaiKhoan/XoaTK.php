<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $local="localhost";
    $uname="root";
    $upass="";
    $dtb="n9php";
    $con=mysqli_connect($local,$uname,$upass,$dtb);
    $id=$_GET['id'];
    $sql = "DELETE FROM taikhoan WHERE Id = $id";
	mysqli_query($con,$sql);
	header("Location: QLTaiKhoan.php");
?>
</body>
</html>