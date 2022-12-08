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
        body{
            background: pink;
        }
        #header{
            background: gold;
            width: 100%;
            height: 50px;
            box-shadow: 0px 0px 0px 20px 3px yellow;
            color: blue;
        }
        h1{
            float: left;
            font-size: 1.5em;
            margin-left: 20px;
            margin-top: 10px;
        }
        h2{
            float: right;
            font-size: 1.5em;
            margin-right: 20px;
            margin-top: 10px;
        }
        h3{
            font-size: 1.4em;
        }
        #input{
            width: 1040px;
            margin-top: 0px;
            margin-left: 60px;
            background: blue;
            height: 50px;
            padding-top: 12px;
            padding-left: 90px;
        }
        #menuinput{
            background-color: yellow;
            height: 40px;
            text-align: center;
            align-items: center;
            border-radius: 5px;
            margin-right: 35px;
            width: 200px;
            box-shadow: 0px 0px 20px 4px red;
            font-size: 18px;
        }
        #menuinput:hover{
            background-color: yellow;
            height: 40px;
            text-align: center;
            align-items: center;
            border-radius: 5px;
            margin-right: 35px;
            width: 200px;
            box-shadow: 0px 0px 20px 4px white;
            font-size: 18px;
        }
        #menuinput2{
            background-color: white;
            height: 40px;
            text-align: left;
            align-items: center;
            border-radius: 5px;
            padding-left: 50px;
            width: 90%;
            margin-left: 60px;
            box-shadow: 0px 0px 10px 1px red;
            font-size: 18px;
            margin-bottom: 4px;
        }
        #menuinput2:hover{
            background-color: white;
            height: 40px;
            text-align: left;
            align-items: center;
            border-radius: 5px;
            padding-left: 50px;
            width: 90%;
            margin-left: 60px;
            box-shadow: 0px 0px 10px 1px yellow;
            font-size: 18px;
            margin-bottom: 4px;
        }
        #input3{float: right;}
        #menuinput3{
            background-color: blue;
            height: 40px;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px red;
        }
        #menuinput3:hover{
            background-color: blue;
            height: 40px;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px Yellow;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>
            Trung Tâm Hổ Trợ Future SMARTSHOP
        </h1>
        <h2>
            Các Chính Sách VÀ Quy Tắc Future SMARTSHOP
        </h2>
    </div>
    <div id="container">
        <h3>Danh Mục</h3>
        <div id="input">
            <input type="submit" id="menuinput" value="Thanh Toán ">
            <input type="submit" id="menuinput" value="Trả Hàng & Hoàn Tiền">
            <input type="submit" id="menuinput" value="Đơn Hàng Và Vận Chuyển">
            <input type="submit" id="menuinput" value="Khuyến Mãi & Uư Đãi"> 
        </div>
        <h3>Các Câu Hỏi Thường Gặp</h3>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Thông Tin Vận Chuyển] Làm sao để liên hệ Đơn vị vận chuyển/ tra cứu thông tin vận chuyển/ hối giao hàng ?">
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Thành Viên Mới] Cách theo dõi tình trạng vận chuyển của đơn hàng?">
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Voucher/ Mã Giảm Giá] Tôi có thể tìm Voucher/Mã giảm giá ở đâu ?">
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Đơn Vị Vận Chuyển] Tổng hợp đơn vị vận chuyển trên shopshop"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Lỗi] Tại sao tôi không dùng được Voucher/Mã giảm giá ?"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Chat] Hướng dẫn chat/Nhắn tin voi người bán hàng ?"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Voucher/Mã Giảm Giá] Hướng dẫn sử dụng mã giảm giá"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Gioa/Nhận Hàng] Đơn vị vận chuyển giao hàng cho người mua như thế nào ?"> 
        </div>
        <div id="input2">
            <input type="submit" id="menuinput2" value="[Vận Chuyển] Tôi có thể thay đổi thông tin số điện thoại/địa chỉ nhận hàng sau khi đặt hàng không ?"> 
        </div>
    </div>
    <div id="input3">
        <a href="trangchu.php"><input type="submit" id="menuinput3" value="Quay Lại Trang Chủ"> </a>
    </div>
</body>
</html>