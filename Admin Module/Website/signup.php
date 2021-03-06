<?php 
include('server.php');
include('register.php');
?>

<html>
<head>
    <title> Transparent signup Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
body{
    margin: 0;
    padding: 0;
    background-image: url(img/en.png);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.signup-box{
    width: 40%;
    height: auto;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
	border-radius: 10px;
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
.signup-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.signup-box input{
    width: 100%;
    margin-bottom: 20px;
}
.signup-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.signup-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.signup-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}



.signup-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.signup-box a:hover
{
    color: #39dc79;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: rgb(224, 153, 94);


}

.signupbtn {
  padding: 14px 20px;
  background-color: #7d9b41;
}


.button{
padding: 14px 20px;
  background-color: #7d9b41;
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
   color: white;
   -moz-transition: opacity .25s ease-in-out;
   -webkit-transition: opacity .25s ease-in-out;
   }

   .cancelbtn:hover {
      opacity: 0.5;
      }
	.signupbtn:hover {
      opacity: 0.5;
      }
	  
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color:#6a6a6b;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color:#6a6a6b;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color:#6a6a6b;
}

<!---BUTTON STYLE-->

input[type="checkbox"], 
input[type="radio"],
input.radio,
input.checkbox {
    vertical-align:text-top;
    width:13px;
    height:13px;
    padding:5px;
    margin:0;
    position:relative;
    overflow:hidden;
    top:2px;
}

table tr td{
  padding: 30px;
  color: white;
}
}
</style>
    <body>
    <div class="signup-box">
    <a href="index.php"><img src="img/avatar.png" class="avatar"></a>
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
			
			<div>
			<p>Sign up as:</p>
          <table method="POST" action="signup.php">
            <tr>
              <td>
                <label for="one">ADMIN</label>
                <input type="radio" id="one" name="accType" value="admin" required>
              </td>
              <td>
                <label for="one">CLIENT</label>
                <input type="radio" id="one" name="accType" value="client" required>
              </td>
              <td>
                <label for="one">SERVICE PROVIDER</label>
                <input type="radio" id="one" name="accType" value="serviceProvider" required>
              </td>
            </tr>
          </table>
				  
				  
          
			</div>
			<br>
	
			
			<!---->


	<div class="clearfix">
		<button type="submit" class="signupbtn" name="register">Sign Up</button>
		<button type="reset" class="cancelbtn">Cancel</button>
    
	</div>
			
			
            </form>
        
        
        </div>
    
    </body>
</html>