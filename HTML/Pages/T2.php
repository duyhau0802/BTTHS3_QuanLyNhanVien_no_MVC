<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>side bar</title>
    <link rel="stylesheet" href="../Pages/Pages.css">
    <style>
        * {
            padding: 0;
        }
    </style>
</head>
<body bgcolor="#106cb2">
    <table class="sidebar"  bgcolor="white" style="border-radius: 20px;" >
        <tr><td><a href="./T3.html" target="T3">Trang chủ</a></td></tr><br>
        <?php
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
            echo '<tr><td><a href="../PHP/login.php" target="T3" >Log In</a></td></tr>';
            echo '<tr><td><a href="../PHP/xemthongtinNV.php" target="T3" >Xem nhân viên</a></td></tr>';
            echo '<tr><td><a href="../PHP/xemthongtinPB.php" target="T3" >Xem phòng ban</a></td></tr>';
            echo '<tr><td><a href="../PHP/timkiem.php" target="T3" >Tìm kiếm</a></td></tr>';
        }
        else if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<tr><td><a href="../PHP/dangnhapthanhcong.php" target="T3" >Log Out</a></td></tr>';
            echo '<tr><td><a href="../PHP/xemthongtinNV.php" target="T3" >Xem nhân viên</a></td></tr>';
            echo '<tr><td><a href="../PHP/xemthongtinPB.php" target="T3" >Xem phòng ban</a></td></tr>';
            echo '<tr><td><a href="../PHP/timkiem.php" target="T3" >Tìm kiếm</a></td></tr>';
            echo '<tr><td><a href="../PHP/capnhatPB.php" target="T3" >Cập nhật phòng ban</a></td></tr>';
            echo '<tr><td><a href="../PHP/capnhatNV.php" target="T3" >Cập nhật nhân viên</a></td></tr>';
            echo '<tr><td><a href="../PHP/themnv.php" target="T3" >Thêm nhân viên</a></td></tr>';
            echo '<tr><td><a href="../PHP/xoa.php" target="T3" >Xóa</a></td></tr>';
            echo '<tr><td><a href="../PHP/xoatatca.php" target="T3" >Xóa tất cả</a></td></tr>';
        }
        ?>
    </table>
</body>
</html>