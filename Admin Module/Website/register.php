<?php 
include('server.php');
	if (isset($_POST['register'])) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$userName = mysqli_real_escape_string($conn, $_POST['username']);
		$password1 = mysqli_real_escape_string($conn, $_POST['psw']);
		$password2 = mysqli_real_escape_string($conn, $_POST['psw-repeat']);
		$accType = mysqli_real_escape_string($conn, $_POST['accType']);

		$sql = "SELECT username from accounts where username = '$userName' ";
		$result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);

        if($count != 1) {
			if($password1==$password2){

				$password = md5($password1);
				$sql = "INSERT INTO accounts (name, username, password, accType)
							VALUES ('$name', '$userName', '$password', '$accType')";
				mysqli_query($conn,$sql);
				echo "<script type='text/javascript'>alert('Successfully Registered!');
					window.location.replace(\"http://soundsystemrentalservices.com/signup.php\");
					</script>";
			}else{
				echo "<script type='text/javascript'>alert('Passwords do not match!');
					window.location.replace(\"http://soundsystemrentalservices.com/signup.php\");</script>";
			}
		}else {
          echo "<script type='text/javascript'>alert('Username Already Exists!');
          	   window.location.replace(\"http://soundsystemrentalservices.com/signup.php\");
          	  </script>";
      }

	}
?>