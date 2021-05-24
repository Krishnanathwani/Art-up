<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
		

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index2.php");
						die;
					}
				}
			}
			 
			echo "<center>"."<b>"."<font color=white font face='arial' size='10pt'>"."wrong username or password!"."</font>"."</b>"."</center>";
		}else
		{
		   	echo "<center>"."<b>"."<font color=white font face='arial' size='10pt'>"."wrong username or password!"."</font>"."</b>"."</center>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body style="background-image: url( ) );"> </div>>
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
  box-shadow: 0 15px 25px rgba(145, 92, 182, .4);

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
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 7px 60px 25px;
	}


	</style>

	<div id="box">
		
		<form  method="post">
			<div id="login"><center>Login</center></div><br><br>

			<input id="text" type="text" placeholder="Username " name="user_name"><br>
			<input id="text" type="password" placeholder="Password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<CENTER><a href="signup.php">New user? Signup</a></CENTER><br><br>
		</form>
	</div>
</body>
</html>