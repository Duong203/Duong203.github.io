 <?php
session_start();
require("db/connect.php");
        $id = $_POST['id'];
        $hinhsp = $_POST['hinhsp'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        if(isset($_POST['sua'])){
            
            $sql = "UPDATE `anh` SET `tensp`='$tensp',`gia`='$gia' WHERE `id`='$id' ";
            $conn -> query($sql);
            include("from.php");
        }
        if(isset($_POST['xoa'])){

            $sql = "DELETE FROM `anh` WHERE `id`= '$id' ";
            $conn -> query($sql);
            include("from.php");
        }
        if(isset($_POST['themsp'])){
          
           
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
           
            $sql = "INSERT INTO `anh`(`hinhsp`, `tensp`, `gia`) VALUES ('$hinhsp','$tensp','$gia')";
            
            $conn->query($sql);
            include("from.php");        
        }
    ?>

