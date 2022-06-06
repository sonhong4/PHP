<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        button{
            margin-left: 10px;
        }
        td,th{
            min-width: 100px;
            text-align: justify;
            border: 1px solid black;
        }
    </style>
</head>
<body>
        
    <?php
        $local="localhost";
        $uname="root";
        $upass="";
        $dtb="n9php";
        $con=mysqli_connect($local,$uname,$upass,$dtb);
       
        if(!$con)
        {
            echo "Ket noi CSDL that bai";
        }
        else{
           $sql="SELECT * FROM taikhoan";
           $re=mysqli_query($con,$sql);
           echo"<table>";
            //    tao tieu de
            echo"<tr>";
            echo"<th>";
            echo "MaKH";
            echo" </th>";
            echo"<th>";
            echo "Ten KH";
            echo" </th>";
            echo"<th>";
            echo "Mat khau";
            echo" </th>";
            echo'<th>';
            echo "Adress";
            echo'</th>';
            echo'<th>';
            echo "Phone";
            echo'</th>';
            echo'<td>Chuc nang</td>';
            echo" </tr>";
           $res=mysqli_query($con,$sql);
           while($db=mysqli_fetch_row($res)){
           
            // ban du lieu
               echo"<tr>";
               echo"<td>";
               echo $db[0];
               echo" </td>";
               echo"<td>";
               echo $db[1];
               echo" </td>";
               echo"<td>";
               echo $db[2];
               echo" </td>";
               echo'<td>';
               echo $db[3];
               echo'</td>';
               echo'<td>';
               echo $db[4];
               echo'</td>';
               ?>
               <td><a  href="javascript:xacnhan('XoaTK.php?id=<?=$db[0]?>')">Xóa</a></td>
               </tr>
               <?php
           }
          
           echo"</table>";
          
        }
        ?>
    <script>
        function xacnhan(url){
            if(confirm("Ban co muon xoa khong?")){
                document.location=url;
            }
        }
    </script>
</body>
</html>