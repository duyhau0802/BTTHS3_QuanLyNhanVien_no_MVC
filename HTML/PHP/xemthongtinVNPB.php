<style>
    caption {
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
<?php 
$mapb=$_REQUEST['IDPB'];
$link = mysqli_connect('localhost','root','') 
or die('Could not connect: '.mysqli_error($link));
$db_selected= mysqli_select_db($link,'DULIEU');
//$db_selected = mysql_select_db('DULIEU',$link);
if($mapb=="")
    $rs = mysqli_query($link,'SELECT * FROM NHANVIEN');
else
    $rs = mysqli_query($link,"SELECT * FROM NHANVIEN WHERE IDPB='$mapb'");
echo '<table border="1" width="100%">';
echo '<caption> Dữ liệu bảng nhân viên </caption>';
echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Mô tả</TH></TR>';
while ($row=mysqli_fetch_array($rs)) {
echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['DiaChi'].'</TD></TR>';}
echo '</table>';
echo '<BR>';
echo '<div style="width:100%;heigh:150px;text-align: center;"><button style=""><A HREF="xemthongtinPB.php">BACK</A></button>
</div>
';
mysqli_free_result($rs);
mysqli_close($link);
?>