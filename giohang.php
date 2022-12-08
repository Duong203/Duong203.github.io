 <?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTURE SMARTSHOP</title>
    <style>
        ul{
            list-style: none;
        }
        #menu{
            height: 45px;
            background: linear-gradient(to right top, red,blue);
            width: 1300px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            top:0px;
            position: fixed;
            left: 0px;
        }
        #menutop{
            display: flex;
        }
        #menuinput{
            height: 30px;
            margin: 10px 25px;
            background: linear-gradient(to right top, red,blue);
            width: 90px;
            text-align: center;
            color: yellow;
        }
        #menuinput:hover{
            height: 30px;
            margin: 10px 25px;
            background: linear-gradient(to right top, blue,red);
            width: 90px;
            text-align: center;
            color: white;
        }
                
        .gioithieu{
            display: inline-block;
            width: 80%;
            height: auto;
            padding: 0% 10%;
            background-image:linear-gradient(to right top, red, yellow) ;
            
        }
        .gioithieu1{
            padding: 10px;
        }
        .gioithieu2{
            margin-left: 120px;
            padding: 10px;
        }
        .gioithieu1 h4{
            text-align: center;
            margin-top: 5px;
            font-size: 16px;
        }
        .gioithieu2 h5{
            text-align: center;
            margin-top: 5px;
            font-size: 16px;
        }
        #container{
             background-image: linear-gradient(to right top , orange ,white);
            width: 240px;
            height: 340px;
            margin: 10px;
            float: left;
            position: relative;
            box-shadow: 0px 0px 7px 5px black;
        }
        #hinh img{
            width: 200px;
            height: 200px;
            margin: 20px;
        }
        #ten{
            color: red;
            margin: 10px 20px;
        }
        #gia{
            color: blue;
            margin: 10px 20px;
        }
        a{
            margin-top:5px ;
            color: red;
        }
    </style>
</head>
<body>
    <div id="menu">
        <ul id="menutop">
            <li>
                <a href="trangchu.php"><input type="submit" id="menuinput" value="Trang Chủ"></a>
            </li>
            <li>
                <a href=""><input type="submit" id="menuinput" value="Gio Hàng"></a>
            </li>
            <li>
                <a href="from.php"><input type="submit" id="menuinput" value="Câp Nhật SP"></a>
            </li>
            <li>
            <a href="hotro.php"> <input type="submit" id="menuinput" value="Hổ Trợ"></a>
            </li>
        </ul>
    </div>
    <form action="" method="post">
        <?php
            require("db/connect.php");

            if(isset($_POST['tensp'])&&isset($_POST['hinhsp'])&&isset($_POST['gia'])){
                $tensp = ($_POST['tensp']);
                $hinhsp = ($_POST['hinhsp']);
                $gia = ($_POST['gia']);
                

                $sql = 'SELECT tensp, hinhsp, gia FROM sql_hanghoa';
               
                $result = $conn->query($sql);
               

                if ($result->num_rows > 0) {
                // Load dữ liệu lên website
                while($row = $result->fetch_assoc()) {
        ?>
            <div id="container">
                <div id="hinh"><img src="imga/<?=$row['hinhsp']?>" ></div>     
                <div id="ten"><?=$row['tensp']?></div>              
                <div id="gia">Giá : <?=$row['gia']?></div>   
            </div>
        <?php       
                }
                } else {
                echo "0 results";
                }
                $conn->close();
            }
            
        ?>
    <div class="gioithieu">
                <table>
                    <tr>
                        <td>
                        <div class="gioithieu1">
                            <h4>Biên Tâp - Xây Dựng - Thiết Kế Hệ Thống </h4>
                            <h4>Lê Nguyễn Nhật Dương - Nguyễn Thị Bão Ngân</h4>
                            <h4>SĐT : 0946744416 - ?????????</h4>
                            <h4>Email : lnnduong.tt115@Kgc.edu.vn - ntbngan.tt115@kgc.edu.vn</h4>
                        </div>
                        </td>
                        <td>
                        <div class="gioithieu2">
                            <h5>Quảm Trị - Thiết Kế CSDL</h5>
                            <h5>Châu Thế Hiển - Trần Minh Đức</h5>
                            <h5>SĐT : ???????? - ????????</h5>
                            <h5>Email : cthien.tt115@kgc.edu.vn - tmduc.tt115@kgc.edu.vn</h5>
                        </div>
                        </td>
                    </tr>
                </table>                
            </div>
</body>
</html>