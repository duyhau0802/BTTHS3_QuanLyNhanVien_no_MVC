<?php 
$myID = $_REQUEST['IDPB'];
$link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
$db_selected = mysqli_select_db($link,'DULIEU');
$rs = mysqli_query($link,"SELECT * FROM phongban WHERE IDPB='$myID'");
$row = mysqli_fetch_array($rs,MYSQLI_BOTH);
?>

<html>
<body>
    <form action="xulicapnhatPB.php?IDPB=<?php echo $row['IDPB'];?>" method="post">
        <table width="100%" border="0" >
            <tr>
                <td>Mã phòng ban</td>
                <td>
                    <input type="text" size="20" name="txtIDPB" readonly value='<?php echo $row['IDPB'];?>'>
                </td>
            </tr>
            <tr>
                <td>Tên phòng ban</td>
                <td>
                    <input type="text" size="20"  name="txtTenpb" value="<?php echo $row['tenPB'];?>">
                </td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td>
                    <input type="text" size="20" name="txtMota" value="<?php echo $row['MoTa'];?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                    <a href="capnhatPB.php">
                        <input type="button" value="Cancel">    
                    </a>
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>