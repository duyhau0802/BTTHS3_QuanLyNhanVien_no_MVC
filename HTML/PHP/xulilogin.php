<?php
session_start();
// nhan lai user va pass tu trang login.php
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
if ($user=="" || $pass=="") {header("Location:login.php");}
else {
    $link = mysqli_connect('localhost','root','') or die('Could not connect : '.mysqli_error($link));
    $db_selected = mysqli_select_db($link,'DULIEU');
    $rs = mysqli_query($link,"SELECT * from admin WHERE username='$user' and password='$pass'");
    if(mysqli_num_rows($rs)==0) 
        header("Location: login.php");
    else 
        {
        $_SESSION['loggedin'] = true;
        // header('Window-target: _top');
        header('Location: ../../index.html');
        
    }
    mysqli_free_result($rs);
    mysqli_close($link);
}
?>