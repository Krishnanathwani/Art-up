<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<center>"."<b>"."<font color=white font face='courier' size='10pt'>"."Please enter some valid information!"."</font>"."</b>"."</center>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

	body
	{
		
        font-family: 'Ubuntu', sans-serif;
		background-image:url('img/samp2.jpg');
		background-repeat: no-repeat;
		background-size: 100% 120%;
		
		
	}
	
	#text{
		width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
	border: 2px solid rgba(0, 0, 0, 0.18) !important;
	}

	#button{
		cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
		
		
	}
    #button:hover{
		
  color: rgba(255, 255, 255, 1);
  box-shadow: 0 15px 25px rgba(145, 92, 182, .5);

	}

	#login{


		padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
	}

	#box{
		background-color: white ;
		
        width: 400px;
        height: 460px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 7px 60px 25px ;
	}
	</style>

	<div id="box">
		
		<form method="post">
		<div id="login"><center>Sign Up</center></div><br><br>


			<input id="text" type="text" placeholder="Username" name="user_name"><br>
			<input id="text" type="text" placeholder="E-mail" name="email"><br>
			<input id="text" type="password" placeholder="password" name="password"><br>
			<input id="text" type="password" placeholder="Re-type password" name="password"><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<center><a href="login.php">Already have an account? Login</a></center><br><br>
		</form>
	</div>
</body>
</html>