<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTURE SMARTSHOP</title>
    <script src="jquery_min.js"></script>
    <style>
        .wrapper{
    background: none;
    flex-grow: 3;
    width: auto;
    box-shadow: 0px 0px 30px 2px black;
}
body{
    width: 1300px;
    box-shadow: 0px 0px 18px 2px red;   
}
#header{
    background-image:linear-gradient(to right top, yellow, red) ;
    color: blue;
    /* position: fixed; */
    width: 1300px;
    top:0px;
    left: 0px;
    transition: all 1s ease;
}
#bacheader{
    margin: 0px 0px 0px 0px ;
    padding: 0px;
    height: 200px;
    margin-top: 0px;
}
 h1{
    font-size: 1.6em;
    margin: 2px 0px 0px 10px;
}
#header h2{
    font-size: 1.6em;
    margin: 0px 0px 0px 50px;
}
#header h3{
    font-size: 1.6em;
    text-align: center;
}

ul{
    list-style: none;
}
#menutop{
    height: 45px;
    
    width: 1300px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(to right top,yellow, orange);
    margin: 0px 0px 0px 0px ;
    /* position: fixed; */
    top: 120px;
    left: 0px;
    z-index: 1;
    top: 0;
}
#mainmenu{

    display: flex;
}
#menuinput{
    height: 30px;
    margin: 10px 25px;
    background: linear-gradient(to right top, red,blue);
    width: 90px;
    text-align: center;
    color: yellow;
    border: solid red;
}
#menuinput:hover{
    height: 30px;
    margin: 10px 25px;
    background: linear-gradient(to right top, blue,red);
    width: 90px;
    text-align: center;
    color: white;
    border: solid blue;
}


#them{
    background:blue;
    color: white;
    height: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 17px 2px yellowgreen;
    margin-top: 5px;
    margin-left: 10px;
    float: left;
    bottom: 5px;
}
#mua{
    margin-top: 5px;
    background:red;
    color: white;
    height: 30px;
    width: 80px;
    border-radius: 10px;
    box-shadow: 0px 0px 17px 2px yellowgreen;
    margin-right: 10px;
    float: right;
    bottom: 5px;
}
#them:hover{
    background:yellow;
    color: red;
    height: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 17px 2px blue;
    margin-left: 10px;
    float: left;
}
#mua:hover{
    background:blue;
    color: orange;
    height: 30px;
    width: 80px;
    border-radius: 10px;
    box-shadow: 0px 0px 17px 2px blue;
    margin-right: 10px;
    float: right;
}
b{
    margin-left: 10px;
}    
#table{
    width: 1300px;
    text-align: center;
}
#row{
    width: 430px;
}
#row2{
    width: 430px;
}
#logo{
    text-align: center;
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
#container input{
    width: 160px;
    margin-left: 40px;
    background: linear-gradient(to right top,red,blue);
    font-size: 16px;
    border: solid yellow;
    color: white;
    border-radius: 3px;
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
</style>
</head>
<body>

    <div id="header">
        <table id="table">
            <tr>
                <td id="row">
                <h1>TRANG THƯƠNG MẠI ĐIỆN TỬ</h1>
                <h2>HANG ĐÂU VIÊT NAM</h2>
                </td>
                <td ><h3>FUTURE SMARTSHOP</h3> </td>
                <td id="logo" id="row2"><img src="imga/logo.jpg " width="120px" height="120px"></td>
            </tr>
        </table>
        
         
    </div>
    <div id="menutop">
        <ul id="mainmenu">
            <li>
                <a href=""><input type="submit" id="menuinput" value="Trang Chủ"></a>
            </li>
            <li>
                <a href="giohang.php"><input type="submit" id="menuinput" value="Giỏ Hàng"></a>
            </li>
            <li>
                <a href="from.php"><input type="submit" id="menuinput" value="Câp Nhật SP"></a>
            </li>
            <li>
                <a href="hotro.php"><input type="submit" id="menuinput" value="Hổ Trợ"></a>
            </li>
        </ul>
    </div>
<script>
    
        $(window).scroll(function(){
       if($(window).scrollTop()){
        
            $('#header').css('transform','translateX(-100%)');
            $('#menutop').css('position','fixed');
        }else {
            $('#header').css('transform','translateX(0%)');
            $('#menutop').css('position','static');
        }; 
    });
</script>
<?php  
        require 'db/connect.php';
        $sql="SELECT * FROM `anh` WHERE 1";
        $result = $conn->query($sql);
         while($row = $result->fetch_assoc()) {?>
    <div id="stron">
        <div id="container">
            <form action="themhang.php" method="post">
                <div id="hinh"><img src="imga/<?=$row['hinhsp']?>" ></div>     
                <div id="ten"><?=$row['tensp']?></div>              
                <div id="gia">Giá : <?=$row['gia']?></div> 
                <input type="hidden" name="tensp"  value="<?php echo $row['tensp']?>">
                <input type="hidden" name="hinhsp" value="<?php echo $row['hinhsp']?>">
                <input type="hidden" name="gia" value="<?php echo $row['gia']?>" >     
                <input type="submit"  name="them" value="Thêm Vào Giỏ Hàng">
            </form>
        </div>
        </div>
<?php }?>

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