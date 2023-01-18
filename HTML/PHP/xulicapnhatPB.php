<?php 
$myID = $_REQUEST['IDPB'];
$tenpb = $_REQUEST['txtTenpb'];
$mota = $_REQUEST['txtMota'];
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"UPDATE PHONGBAN SET Tenpb='$tenpb', Mota='$mota' WHERE IDPB='$myID'");
header("Location:capnhatPB.php");
?>