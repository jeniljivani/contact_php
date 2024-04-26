<?php 

	session_start();
	$con = mysqli_connect("localhost","root","","register");
	if(!isset($_SESSION['username'])) 
	{
		header("location:index.php");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>

 	<style type="text/css">
 		h2 , h4 {
 			margin: 0px;
 			padding: 0px;
 		}
 		.header {
 			padding: 10px 5px ;
 		}
 		.header .topnev {
 			display: flex;
 		}
 		.header .topnev .logo {
 			width: 100px;
 			height: 100px;
 			border-radius: 50px;
 		}
 		.header .topnev .logo img {
 			width: 100%;
 			height: 100%;
 			border-radius: 50px;

 		}
 		.header .topnev .detel {
 			margin-left: 10px;
 			padding: 0px 20px;
 		}
 		.header .topnev .detel .page{
			margin-top: 25px;
		}
 		.header .topnev .detel .page .link {
			border: 1px solid #ABB2B9;
 			padding: 5px 10px;
 			font-weight: 700;
 			text-decoration: none;
 			font-size: 18px;
 			color: #17202A;
 			border-radius: 5px;
 			transition: 0.3s;
 		}
 		.header .topnev .detel .page .link:hover {
 			background-color: #F4F6F6;
 		}
 	</style>

 </head>
 <body>
 	
 	<div class="header">
 		<div class="topnev">
 			<div class="logo">
 				<img src="image/<?php echo $_SESSION['username']['image'] ?>">
 			</div>
 			<div class="detel">
 				<h2><?php echo $_SESSION['username']['name'] ?></h2>
 				<h4><?php echo $_SESSION['username']['email'] ?></h4>
 				<div class="page">
 					<a href="add_contect.php" class="link">Add contact</a>
 					<a href="view_contect.php" class="link">view contact</a>
 					<a href="regs_cheng.php" class="link">register cheng</a>
 					<a href="logout.php" class="link">logout</a>
 				</div>
 			</div>
 		</div> 		
 	</div>
<hr style="height: 0.001px; background: gray; width: 500px; left: 100px;" >
 </body>
 </html>
