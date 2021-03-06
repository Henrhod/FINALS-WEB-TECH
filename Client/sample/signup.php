<?php 
include('server.php');
?>

<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
body{
    margin: 0;
    padding: 0;
    background: url(images/bg2.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 50%;
    height: 500px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;

}

.signupbtn {
  padding: 14px 20px;
  background-color: #4F91FF;
}


<!-- .cancelbtn, .signupbtn { 
  float: left;
  width: 50%;
}-->

<!-- @media screen and (max-width: 300px) { 
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}-->

.cancelbtn, .signupbtn{
   opacity: 1;
   transition: opacity .25s ease-in-out;
   -moz-transition: opacity .25s ease-in-out;
   -webkit-transition: opacity .25s ease-in-out;
   }

   .cancelbtn:hover {
      opacity: 0.5;
      }
	.signupbtn:hover {
      opacity: 0.5;
      }


</style>
    <body>
    <div class="login-box">
    <img src="images/user.png" class="avatar">
        <h1>Sign up Here</h1>
            <form method="POST" action="signup.php">
			      <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name" required>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>   

 <div class="clearfix">
		<button type="submit" class="signupbtn" name="register">Sign Up</button>
		<button type="button" class="cancelbtn">Cancel</button>
      
	<!-- <input type="submit" name="submit" value="Login"> -->

    </div>
            </form>
        
        
        </div>
    
    </body>
</html>