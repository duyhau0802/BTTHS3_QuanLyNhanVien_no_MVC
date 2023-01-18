<style>
    caption {
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
<?php 
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected= mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,'SELECT * FROM PHONGBAN');
echo '<table border="1" width="100%">';
echo '<caption> Dữ liệu bảng phòng ban </caption>';
echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><TH>Xem nhân viên</TH></TR>';
while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH)) {
echo '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['tenPB'].'</TD><TD>'.$row['MoTa'].'</TD>
<TD align="center"><A HREF="xemthongtinVNPB.php?IDPB='.$row['IDPB'].'">xxx</A></TD></TR>';
}
echo '</table>';
mysqli_free_result($rs);
mysqli_close($link);
?>