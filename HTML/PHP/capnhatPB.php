<style>
    caption {
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
    $db_selected = mysqli_select_db($link,'DULIEU');
    $rs = mysqli_query($link,'SELECT * FROM PHONGBAN');
    ////
    echo '<form action="xulicapnhatPB.php">';
    echo '<table border="1" width="100%">';
    echo '<caption> Dữ liệu bảng phòng ban </caption>';
    echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><TH>Cập nhật</TH></TR>';
    while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH))
    {
    echo 
    '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['tenPB'].'</TD><TD>'.$row['MoTa'].'</TD>
    <TD align="center"><A HREF="form_capnhatPB.php?IDPB='.$row['IDPB'].'">xxx</A></TD></TR>';
    
    }
    
    echo '</table>';
    echo '</form>';
    
    mysqli_free_result($rs);
    mysqli_close($link);
} else {
    header("Location: login.php");
}
?>