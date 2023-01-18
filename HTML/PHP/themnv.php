<?php
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"SELECT * FROM nhanvien ");
$row = mysqli_fetch_array($rs,MYSQLI_BOTH);
?>
<html>
<body>
<form action="xulithemNV.php?IDNV=<?php echo $row['IDNV'];?>" method="post">
        <table width="100%" border="0" >
            <tr>
                <td>Mã nhân viên</td>
                <td>
                    <input type="text" size="20" name="txtIDNV" >
                </td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td>
                    <input type="text" size="20"  name="txtHoTen" >
                </td>
            </tr>
            <tr>
                <td>Mã phòng ban</td>
                <td>
                    <input type="text" size="20" name="txtIDPB" >
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input type="text" size="20" name="txtDiaChi" >
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                    <a href="xemthongtinNV.php">
                        <input type="button" value="Xem Nhân Viên">    
                    </a>
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>