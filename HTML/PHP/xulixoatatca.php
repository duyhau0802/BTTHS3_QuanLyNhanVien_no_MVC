<?php 
$myID = $_REQUEST['IDNV'];
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"SELECT IDNV FROM nhanvien");
while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH)) {
    $myID = $_REQUEST[$row['IDNV']];
    $rsl = mysqli_query($link,"DELETE FROM nhanvien WHERE IDNV='$myID'");
}
mysqli_free_result($rs);
mysqli_close($link);
header("Location:xoatatca.php");
?>