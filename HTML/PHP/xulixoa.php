<?php
    $IDNV = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost","root","") or die("ko the ket noi");
    mysqli_select_db($link,"dulieu");
    $sql = "DELETE from nhanvien Where IDNV = '$IDNV'";
    $rs = mysqli_query($link,$sql);
    header("Location:xoa.php");
?>