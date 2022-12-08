
<?php
	// 	
	include("db/connect.php");
	if(isset($_POST['email']) and isset($_POST['pass']))
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
	
		//echo $user . " " . $pass;
		$sql = "SELECT * FROM sql_account WHERE email = '$email' and pass ='$pass'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0)
		{
			$_SESSION['email'] = $email ;			//Tạo phiên làm việc cho user
			header("Location: ../kt/trangchu.php");
		}
		else
			echo "email hoặc mật khẩu sai ";
?>
		<a href="index.php">Quay Lại</a>
<?php
	}
?>