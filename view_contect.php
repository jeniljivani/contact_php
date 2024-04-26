<?php  
	// session_start();
 include 'dashboard.php';

 // echo $_SESSION['username']['id'];
 // if(isset($_SESSION['username']))
 // {
 	$contact_data = "select * from `contect` where `user_id`=".$_SESSION['username']['id'];
 	$data =  mysqli_query($con,$contact_data);
 // }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
 		
 		.table {
 			margin-top: 20px;
 			margin-left: 20px;
 			padding: 5px;
 			font-size: 18px;
 			border: 1px solid black;
 			box-shadow: 2px 2px 5px gray , 0px 0px 0px transparent;
 		}
 		.th {
 			border: 1px solid gray;
 			padding: 2px 8px;
/* 			margin-bottom: 5px;*/
 		}
 		.td {
 			padding: 0px 10px;
 		}
 		
 	</style>
</head>
<body>

	<table class="table">
		<tr>
			<th class="th">ID</th>
			<th class="th">Name</th>
			<th class="th">Email</th>
			<th class="th">Contact</th>
			<th class="th">Address</th>
			<th class="th">Image</th>
		</tr>

		<?php $no=1;			
			while ($info = mysqli_fetch_assoc($data)) {
				if($no%2==0) {
				$color = "#EAECEE";
				$no++;
			}
			else {
				$color ="#FBFCFC";
				$no--;
			}
		 ?>
		 <tr style="background-color: <?php echo $color; ?> ; ">
		 	<td class="td"><?php echo @$info['id']; ?></td>
		 	<td class="td"><?php echo @$info['name']; ?></td>
		 	<td class="td"><?php echo @$info['email']; ?></td>
		 	<td class="td"><?php echo @$info['contect']; ?></td>
		 	<td class="td"><?php echo @$info['address']; ?></td>
		 	<td class="td"><img src="image/<?php echo @$info['image']; ?>" width="70px"  height="70px"> </td>
		 </tr>
		<?php } ?>

	</table>

</body>
</html>