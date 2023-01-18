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
$row = mysqli_fetch_array($rs,MYSQLI_BOTH);

echo '<table border="1" width="100%">';
echo '<caption> Dữ liệu bảng nhân viên </caption>';
echo '<TR><TH>Mã nhân viên</TH><TH>Tên nhân viên</TH><TH>Mã PB</TH><TH>Địa chỉ</TH><TH>Xóa</TH></TR>';
while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
{
    echo  
    "<TR>
        <TD style = 'text-align:center'>".$row['IDNV']."</TD><TD style = 'text-align:center'>".$row['Hoten']."</TD><TD style = 'text-align:center'>".$row['IDPB']."</TD><TD style = 'text-align:center'>".$row['DiaChi']."</TD><TD style = 'text-align:center'><a href = 'xulixoa.php?IDNV=".$row['IDNV']."'> Xóa </a></TD>
    </TR>" ;
}
echo '</table>';

mysqli_free_result($rs);
mysqli_close($link);

?>