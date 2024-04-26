<?php 
 
	include 'dashboard.php';

	$id =$_SESSION['username']['id'];

	if(isset($_SESSION['username']))
	{
		$id = $_SESSION['username']['id'];
		$rec = "select * from `login` where `id`=".$id;
		$res = mysqli_query($con,$rec);
		$data = mysqli_fetch_assoc($res);
		// echo "<pre>";
		// print_r($data);
	}

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$image = $_FILES['image']['name'];

		$path = 'image/'.$image ;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);
		if($image=="")
		{
			$image = $data['image'];
		}


		$sql = "update `login` set `name`='$name' , `email`='$email',`image`='$image' where `id`=".$id;
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
 			font-weight: 800;
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
 		<table class="table">
 			<tr>
 				<td>Name :-</td>
 				<td><input type="text" value="<?php echo $data['name'] ?>" name="name" class="text-link"></td>
 			</tr>
 			<tr>
 				<td>Email :-</td>
 				<td><input type="email" value="<?php echo $data['email'] ?>" name="email" class="text-link"></td>
 			</tr>
 			<tr>
 				<td>Image :-</td>
 				<td><input type="file" value="<?php echo $data['image'] ?>" name="image" class="text-link"></td>
 			</tr>
 			<tr>
 				<td colspan="2"><input type="submit" value="Update" name="submit" class="subbtn"></td>
 			</tr>
 		</table>
 	</form>

 	<a href="password.php">chang  password</a>


 </body>
 </html>
