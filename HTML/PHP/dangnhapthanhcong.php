<?php 
session_start();
function runMyFunction() {
    unset($_SESSION['loggedin']);
    header("Location: ../../index.html");
    // header("refresh: 5; ");
  }
  if (isset($_GET['logout'])) {
    runMyFunction();
  }
?>
<html>
    <body>
            <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                <div style="background-color: #98FB98;padding: 50px ;border-radius:10px; text-align:center">
                <h2>Đăng nhập thành công</h2>
                
                    <a href='dangnhapthanhcong.php?logout=true' target="_top">
                    <button>Logout</button>
                    </a>
                
                </div>
            </div>
    </body>
</html>