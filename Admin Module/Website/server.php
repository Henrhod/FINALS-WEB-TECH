<?php 

#http://www.tutorialspoint.com/php/php_mysql_login.htm

session_start();
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
        
        $sql = "SELECT username from accounts where username = '$userName' ";
		$result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
      
        $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
        if($password1==$password2){
                    $password = md5($password1);
                    $sql = "INSERT INTO accounts (name, username, password) VALUES ('$name', '$userName', '$password')";
                    mysqli_query($conn,$sql);
                    echo "<script type='text/javascript'>alert('Successfully Registered!');</script>";
                    header('Location:signup.php');
                    exit;
                }else{
                    echo "<script type='text/javascript'>alert('Passwords do not match!');</script>";
                }
          
      }else {
          echo "<script type='text/javascript'>alert('Username Already Exists!');</script>";
      }
        
         

	}


?>