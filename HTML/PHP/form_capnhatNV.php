<?php 
$myID = $_REQUEST['IDNV'];
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"SELECT * FROM nhanvien WHERE IDNV='$myID'");
$row = mysqli_fetch_array($rs,MYSQLI_BOTH);
?>

<html>
<body>
    <form action="xulicapnhatNV.php?IDNV=<?php echo $row['IDNV'];?>" method="post">
        <table width="100%" border="0" >
            <tr>
                <td>Mã nhân viên</td>
                <td>
                    <input type="text" size="20" name="txtIDNV" readonly value='<?php echo $row['IDNV'];?>'>
                </td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td>
                    <input type="text" size="20"  name="txtHoTen" value="<?php echo $row['Hoten'];?>">
                </td>
            </tr>
            <tr>
                <td>Mã phòng ban</td>
                <td>
                    <input type="text" size="20" name="txtIDPB" value="<?php echo $row['IDPB'];?>">
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input type="text" size="20" name="txtDiaChi" value="<?php echo $row['DiaChi'];?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                    <a href="capnhatNV.php">
                        <input type="button" value="Cancel">    
                    </a>
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>