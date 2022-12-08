<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myweb";
 
// $conn = new mysqli($host,$username,$password,$dbname);

// if($conn->connect_error){
//     die("Kết Nối Thành Công:".$conn->connect_error);
// }
// echo "Kết Nối không thành Công :";
$conn = mysqli_connect("localhost","root","") or die("Không thể kết nối đến CSDL");
mysqli_select_db($conn, "myweb") or die ("Không thể kết nối đến myweb mang");
?>