<style>
    caption {
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
<?php 
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,'SELECT * FROM NHANVIEN');
echo '<table border="1" width="100%">';
echo '<caption> Dữ liệu bảng nhân viên </caption>';
echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Mô tả</TH></TR>';
while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH)) {
echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['DiaChi'].'</TD></TR>';}
echo '</table>';
mysqli_free_result($rs);
mysqli_close($link);
?>