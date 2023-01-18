<?php 
$IDNV = $_REQUEST['txtIDNV'];
$tennv = $_REQUEST['txtHoTen'];
$IDPB = $_REQUEST['txtIDPB'];
$DiaChi = $_REQUEST['txtDiaChi'];
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"UPDATE nhanvien SET IDNV='$IDNV', Hoten='$tennv', IDPB='$IDPB', DiaChi='$DiaChi'  WHERE IDNV='$IDNV'");
header("Location:capnhatNV.php");
?>