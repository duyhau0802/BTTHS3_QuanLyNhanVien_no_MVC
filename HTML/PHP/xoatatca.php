<style>
    caption {
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
<?php 
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"SELECT * FROM nhanvien");

echo '<form method="post" action="xulixoatatca.php">';
echo '<table border="1" width="100%">';
echo '<caption> Dữ liệu bảng nhân viên </caption>';
echo '<TR><TH>Mã nhân viên</TH><TH>Tên nhân viên</TH><TH>Địa chỉ</TH><TH>Chọn</TH></TR>';
while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
{
echo 
'<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['DiaChi'].'</TD>
<TD align=center><input type="checkbox" name="'.$row['IDNV'].'" value="'.$row['IDNV'].'"></TD></TR>';
}
echo '<tr><td align="right" colspan="4"><input type="submit" value="Xóa các nhân viên"></td></tr>';
echo '</table>';
echo '</form>';

mysqli_free_result($rs);
mysqli_close($link);

?>