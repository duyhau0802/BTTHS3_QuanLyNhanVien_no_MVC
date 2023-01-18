<html>
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="../Pages/Pages.css"> -->
    <style>
        .search-button {
        cursor:pointer;
        background: transparent;
        border: none;
        margin-left: -40px;
        }
        .search-button img {
        width: 20px;
        height: 20px;
        object-fit: cover;
        margin-bottom: -5px;
        }
        .search-field {
        width: 300px; 
        padding: 7px;
        border: 1px solid black;
        border-radius: 100px;
        clear: left;
        }
        caption {
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="xulitimkiem.php" method="POST">
        <table width="100%" >
            <tr align="center">
                <td>Nhập input</td>
                <td colspan="3">
                <!-- <input type="text" name="txtTimkiem" value="">
                <input type="submit" value="Tìm kiếm"> -->
                <input  type="text" class="search-field" placeholder="Tìm kiếm thông tin" name="txtTimkiem">
                <button type="submit" class="search-button" >
                    <img src="../../IMG/search_icon.png">
                </button>
                </td>
            </tr>
            <tr align="center">
                <td>Chọn loại tìm kiếm</td>
                <td><input type="radio" name="chonloai" value="tenNV" id="tenNV" checked>Tìm theo tên NV</td>
                <td><input type="radio" name="chonloai" value="diadiem" id="diadiem">Tìm theo tên địa điểm</td>
                <td><input type="radio" name="chonloai" value="phongban" id="phongban">Tìm theo tên phòng ban</td>
            </tr>
        </table>
        <hr>
    </form>
    <?php 
    $link = mysqli_connect('localhost','root','') or die('Could not connect: '.mysqli_error($link));
    $db_selected = mysqli_select_db($link,'DULIEU');
    $rs = mysqli_query($link,'SELECT * FROM NHANVIEN');
    echo '<table border="1" width="100%">';
    echo '<caption> Dữ liệu bảng nhân viên </caption>';
    echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Mô tả</TH></TR>';
    while ($row=mysqli_fetch_array($rs,MYSQLI_BOTH)) {
    echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['DiaChi'].'</TD></TR>';}
    echo '</table>';
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
</body>
</html>