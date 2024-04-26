<?php 
	// session_start();	
	include 'dashboard.php';
	// $con = mysqli_connect("localhost","root","","register");

	if (isset($_POST['submit'])) {

		$user_id = $_SESSION['username']['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$image = $_FILES['image']['name'];
		$path = 'image/'.$image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);


		$sql = "insert into `contect`(`user_id`,`name`,`email`,`contect`,`address`,`image`)values('$user_id','$name','$email','$contact','$address','$image')";

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
 			margin-top: 20px;
 			margin-left: 20px;
 			font-size: 18px;
 		}
 		.text-link
 		{
 			margin: 4px;
 			padding: 2px;
 		}
 		.subbtn {
			color: #145A32;
			background-color: #A9DFBF;
			padding: 3px 5px;
			font-size: 17px ;
			margin-top: 5px ;
			border: 1px solid #145A32;
		}
 	</style>

 </head>
 <body> 	
 	<form method="post" enctype="multipart/form-data" class="form">
 		<table>
 			<tr>
 				<td>Name :-</td>
 				<td><input type="text" name="name" class="text-link"></td>
 			</tr>
 			<tr>
 				<td>Email :-</td>
 				<td><input type="email" name="email" class="text-link"></td>
 			</tr>
 			<tr>
 				<td>Contact :-</td>
 				<td><input type="number" name="contact" class="text-link"></td>
 			</tr>
 			<tr>
 				<td>Address:-</td>
 				<td><input type="textarea" name="address" class="text-link"></td>
 			</tr>
 			<tr>
 				<td>Image :-</td>
 				<td><input type="file" name="image" class="text-link"></td>
 			</tr>
 			<tr>
 				<td><input type="submit" name="submit" class="subbtn"></td>
 			</tr>
 		</table>
 	</form>

 </body>
 </html>

