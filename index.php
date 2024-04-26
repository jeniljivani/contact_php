<?php 


	$con=  mysqli_connect("localhost","root","","register");
	session_start();

	if(@$_SESSION['username']) {
		header("location:dashboard.php");		
	}
	if(isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from `login` where `email`='$email' and `password`='$password'";
		$res = mysqli_query($con,$sql);
		$cnt = mysqli_num_rows($res);
		if($cnt>=1) {
			$data = mysqli_fetch_assoc($res);
			$_SESSION['username'] = $data;	
			header("location:dashboard.php");
 		}
 		else
 		{
 			$mag ="email and password are wrong ! ";
 		}
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>

	<style type="text/css">
			
		.from {
			width: 350px;
			height: 300px;
			margin: auto;
			border: 2px solid #7B7D7D;
			background-color: #F8F9F9;
			padding-top:20px ;
			border-radius: 20px;
			transition: 0.3s;
		}
		.from:hover, .loginbtn:hover, .regbtn:hover {
			box-shadow: 5px 5px 10px gray;		
		}
		.table{
			margin: auto;
			padding: 5px;
		}
		.loginbtn {
			color: #145A32;
			background-color: #A9DFBF;
			padding: 3px 5px;
			font-size: 17px ;
			margin-top: 5px ;
			border: 1px solid #145A32;
		}
		.regbtn {
			position: absolute;
			border: 1px solid black;
			margin-top: 10%;
			margin-left: 15%;
			padding: 5px 10px;
			background-color: #A9CCE3;
			color: #154360;
			text-decoration: none;
		}		
		.text {
			height: 20px;
			margin: 5px 0px;
		}

	</style>

</head>
<body>
	<h1 style="text-align: center; color: red"><?php echo @$mag; ?></h1>
	<form method="post" class="from">
		<table class="table">
			<tr>
				<td>Email :- </td>
				<td><input  type="text" name="email" class="text"></td>
			</tr>
			<tr>
				<td>Password :- </td>
				<td><input  type="text" name="password" class="text"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login" name="submit" class="loginbtn"></td>
			</tr>
		</table>

		<a href="register.php" class="regbtn">Register for user</a>
	</form>


</body>
</html>