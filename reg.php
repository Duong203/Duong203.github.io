<?php
    require 'db/connect.php';
    if(isset($_POST['btn-reg'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if(!empty($fullname)&&!empty($username)&&!empty($email)&&!empty($pass)){
                $sql = "INSERT INTO `sql_account` (`fullname`,`username`,`email`,`pass`) 
                VALUES('$fullname','$username','$email','$pass')";

                if($conn->query($sql)===TRUE){
                    echo " Đăng Ký Tài Khoản Thành Công   ";
?>
                    <a href="index.php">  Đăng Nhâp</a>
<?php
                }else{
                    echo "lỗi {$sql}".$conn->error;
                }
        }else{
            echo "Bạn Cần Nhâp Đầy Đủ Thông Tin ";
        }
    }
?>
<a href="account.php">   Đăng Ký</a>