<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Đăng Ký Tài Khoảng</title>
</head>
<body>
    <div id="wrapper">
        <form action="reg.php" id="form-account" method="post">
            <h1 class="form-heading">ĐĂNG KÝ</h1>
            <div class="form-group">
                <input type="text" class="form-input" name="fullname" placeholder="fullname">
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="username" placeholder="Username">
            </div>
            <div class="form-group">  
                <input type="text" class="form-input" name="email" placeholder="Email">
            </div>
            <div class="form-group"> 
                <input type="password" class="form-input" name="pass" placeholder="Password">
            </div>
            <input type="submit" name="btn-reg" value="account" class="form-submit">
        </form>
    </div>
</body>
</html>