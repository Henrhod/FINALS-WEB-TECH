<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'accounts';

	$conn = mysqli_connect($host,$user,$pass,$dbname) or die('Cannot connect to db');

	if (isset($_POST['register'])) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$userName = mysqli_real_escape_string($conn, $_POST['username']);
		$password1 = mysqli_real_escape_string($conn, $_POST['psw']);
		$password2 = mysqli_real_escape_string($conn, $_POST['psw-repeat']);

		if($password1==$password2){

			$password = md5($password1);
			$sql = "INSERT INTO accounts (name, username, password)
						VALUES ('$name', '$userName', '$password')";
			mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>alert('Successfully Registered!');</script>";
			header('Location:signup.php');
			exit;
			
		}else{
			echo "<script type='text/javascript'>alert('Passwords do not match!');</script>";
		}

	}


?>