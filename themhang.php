<?php
session_start();
    require 'db/connect.php';
    if(isset($_POST['them'])){
        $tensp = $_POST['tensp'];
        $hinhsp = $_POST['hinhsp'];
        $gia = $_POST['gia'];
       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        $sql = "INSERT INTO `sql_hanghoa` (`tensp`,`hinhsp`,`gia`) 
                VALUES('$tensp','$hinhsp','$gia')";
        if($conn->query($sql)===TRUE){
             echo "";
        }else{
            echo "lỗi {$sql}".$conn->error;
        }
        
    }
    include ("giohang.php");
    
?>