<?php 
include('server.php');
	if (isset($_POST['login'])) {
		$userName = mysqli_real_escape_string($conn, $_POST['username']);
		$password1 = mysqli_real_escape_string($conn, $_POST['psw']);
		$accType = mysqli_real_escape_string($conn, $_POST['accType']);

		$password = md5($password1);
		$sql = "SELECT username, password from accounts where username = '$userName' AND password = '$password' AND accType = '$accType'";

		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		if ($count == 1) {
			echo "<script type='text/javascript'>alert('Successfully Log in!');
					window.location.replace(\"http://soundsystemrentalservices.com/index.php\");
					</script>";
		}else{
			echo "<script type='text/javascript'>alert('Incorrect Username, Password and Account type');
          	   window.location.replace(\"http://soundsystemrentalservices.com/signin.php\");
          	  </script>";
		}
	}
?>