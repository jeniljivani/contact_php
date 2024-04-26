<?php 
	session_start();

	$con = mysqli_connect("localhost","root","","register");
	if(isset($_SESSION['username'])) {
		header("location:index.php");
	}


	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$image = $_FILES['image']['name'];

		$path = 'image/'.$image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);

		$sql = "insert into `login`(`name`,`email`,`password`,`image`)values('$name','$email','$password','$image')";
		mysqli_query($con,$sql);
	}	
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.form {
			width: 360px;
			margin: auto;
			background-color: #EAECEE;
			height: 300px;
			padding-top: 5px;
			padding-left: 10px;
			border: 4px black double;
		}
		.table {
			font-weight: 800;
		}
		.subbtn
		{
			margin-top: 5px;
			background-color: #A9DFBF;
			padding: 5px 10px;
			color: #0B5345;
			font-weight: 700;
			font-size: 17px;
			border: 1px solid #1B4F72;
		}
		.loginbtn {
			position: absolute;
			margin-top: 3%;
			margin-left: 18%;
			font-size: 18px;
			border: 1px solid black;
			padding: 5px 10px;
			background-color: #A9CCE3;
			color: #154360;
			text-decoration: none;
		}
		.text {
			height: 20px;
			margin: 5px 0px;
			margin-left: 5px;
		}
		
	</style>
	
</head>
<body>

<form method="post" enctype="multipart/form-data" class="form">
	<table class="table" >
		<tr>
			<td>Name :-</td>
			<td><input type="text" name="name" class="text"></td>			
		</tr>
		<tr>
			<td>Email :-</td>
			<td><input type="text" name="email" class="text"></td>
		</tr>
		<tr>
			<td>Password :-</td>
			<td><input type="text" name="password" class="text"></td>
		</tr>
		<tr>
			<td>Image :-</td>
			<td><input type="file" name="image" class="text"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" class="subbtn"></td>			
		</tr>
	</table>	
	<a href="index.php" class="loginbtn">Login user</a>
</form>

</body>
</html>
