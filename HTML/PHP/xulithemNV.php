<?php 
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');

$IDNV = $_REQUEST['txtIDNV'];
$tennv = $_REQUEST['txtHoTen'];
$IDPB = $_REQUEST['txtIDPB'];
$DiaChi = $_REQUEST['txtDiaChi'];

$idnv = mysqli_query($link,"SELECT IDNV FROM nhanvien");
while($rowid = mysqli_fetch_row($idnv)){
    if ($IDNV === $rowid)
        echo "<h1>ERROR<h1>";
}




$rs = mysqli_query($link,"INSERT INTO nhanvien (IDNV,Hoten,IDPB,DiaChi) VALUES ('$IDNV','$tennv', '$IDPB', '$DiaChi' )") ;
// if ( $rs === false ){
//     echo "Error";
// }
// header("Location:themnv.php");
?>