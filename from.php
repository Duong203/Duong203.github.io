
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container{
            background: blue;
            width: 640px;
            margin-left: 320px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 3px 5px 10px 2px red;
        }
        h1{
            font-size: 24px;
            color: white;
            text-align: center;
        }
        #khung{
            width: 510px;
            margin-left: 5px;
        }
        #drop{
            border: 2px solid Black;
            background: white;
            height: 30px;
        }
        h2{
           font-size: 16px;
           text-align: center;
        }
        ul{
            list-style: none;
        }
        #text{
            border: none;
        }
        #ten{
            width: 180px;
            border: none;
        }
        #id{
            width: 20px;
            border: none;
        }
        #anh{
            width: 70px;
            border: none;
        }
        #sua{
            margin-left: 10px;
            border: 3px ;
            text-align: center;
        }
        #themsp{
            align-items: center;
            border:3px;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Cập Nhật Thông Tin Sản Phẩm</h1>
            <table id="khung" >
                <tr id="drop">
                    <td >
                        <h2>ID</h2>
                    </td>
                    <td >
                        <h2>Hinh Ảnh</h2>
                    </td>
                    <td >
                        <h2>Tên Sản Phẩm </h2>
                    </td>
                    <td >
                        <h2>Giá Sản Phảm </h2>
                    </td>
                    <td colspan="3">
                        <h2>Thao Tác</h2>
                    </td>
                    
                </tr>               
                        <?php
                            require("db/connect.php");
                           
                                $sql = 'SELECT `id`,`hinhsp`, `tensp`,  `gia` FROM `anh` WHERE 1';
                            
                                $result = $conn->query($sql);
                                ?>
                                    <form action="updext.php" method="post" >
                                        <tr id="drop">
                                            <td >
                                            <input type="text"  name="id" value="" id="id">
                                            </td>
                                            <td >
                                            <input type="text"  name="hinhsp" value="" id="anh">
                                            </td>
                                            <td>
                                            <input type="text" name="tensp" value="" id="ten">
                                            </td>
                                            <td>
                                            <input type="text" name="gia" value="" id="text">
                                            </td>
                                            <td colspan="3"><input type="submit" name="themsp" id="themsp" value="Thêm"></td>
                                            </tr>
                                        </form>
                                <?php
                                    while($row = $result->fetch_assoc()) {
                                        $sserid = $row['id'];
                                ?>
                                <form action="updext.php" method="post" >
                                    <tr id="drop">
                                    <td >
                                        <input type="text"  name="id" value="<?= $row['id'] ?>" id="id">
                                        </td>
                                        <td >
                                        <input type="text"  name="hinhsp" value="<?= $row['hinhsp'] ?>" id="anh">
                                        </td>
                                        <td>
                                        <input type="text" name="tensp" value="<?= $row['tensp'] ?>" id="ten">
                                        </td>
                                        <td>
                                        <input type="text" name="gia" value="<?= $row['gia'] ?>" id="text">
                                        </td>
                                        <td><input type="submit" name="sua" id="sua" value="Sữa"></td>
                                        <td><input type="submit" name="xoa" id="sua" value="Xóa"></td>
                                        <td><input type="submit" name="themsp" id="themsp" value="Thêm"></td>
                                    </tr>
                                    </form>
                                <?php              
                                    }
                                
                                    $conn->close();
                                    
                        ?>
                     
               
        </table>
    </div>
</body>
</html>