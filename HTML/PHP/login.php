<html>
    <head>
        <style>
            .tieude {
                padding-right: 50px;
            }
            ::placeholder {
            color: red;
            }
        </style>
        <script lang="JavaScript">
            function xuliloiLogin(){
                var errorNoUsername = document.getElementById("errorNoUsername");
                var errorNoPass = document.getElementById("errorNoPass");
                var username = document.getElementById("user_name").value;
                var pass = document.getElementById("pass").value;
                if (username == '') {
                    document.getElementById("user_name").placeholder="Hay nhap ten dang nhap";
                }
                else {
                    document.getElementById("user_name").placeholder="";
                }
                if (pass == '') {
                    document.getElementById("pass").placeholder="Hay nhap mat khau";
                }
                else {
                    document.getElementById("pass").placeholder="";
                }

                 }
            function xulireset(){
                document.getElementById("user_name").placeholder="";
                document.getElementById("pass").placeholder="";
                document.getElementById("user_name").value = "";
                document.getElementById("pass").value = "";
            }
        </script>
    </head>
    <body onload="document.getElementById('user_name').focus()">
        <form action="xulilogin.php" method="post" target="_top">
            <div style="display: flex;justify-content: center;align-items: center;height: 100%;">
                <div style="background-color: #98FB98;padding: 50px ;border-radius:10px;">
                <table>
                    <caption style="padding-left: 10px ;">Login</caption>
                    <tr>
                        <td class="tieude">Username</td>
                        <td ><input type="text" name="username" id="user_name" placeholder=""></td>
                    </tr>
                    <tr>
                        <td class="tieude">Password</td>
                        <td><input type="password" name="password" id="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: center;">
                            <input type="submit" value="Login" onclick="xuliloiLogin()">
                            <input type="reset" value="Reset" onclick="xulireset()"  >
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </form>
    </body>
</html>