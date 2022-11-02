<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
		a{
			text-decoration: none;
		}
		button{
			background-color: red;
			width: 100px; height:100px;
		}
	</style>
</head>
<body style="text-align: center;margin:150px; padding:50px;">
<div style="background-color: Brown;padding:30px;font-size:30px;>
	<h1 style="font-weight:20px bold;margin:30px;border:2px;">Product Information</h1>
	</div>
	<table style="margin:50px auto;width: 50%;" cellpadding="10px" border="2px">
				<tr style=background-color:red;
				
        
		
	<?php
		$server = "localhost";
		$user = "root";
		$pass = "";
		$db = "shop";

		$con = new mysqli($server,$user,$pass,$db);
		if($con->connect_error){
			die("Connection Failed: ".$con->connect_error);
		}
		$sql = "SELECT * FROM tbl_user";
		$data = $con->query($sql);
		if($data!=false && $data->num_rows > 0){
	?>
			<table style="margin:50px auto;width: 50%;" cellpadding="10px" border="2px">
				<tr style=background-color:red;
				
        
		<th style=background:10px;></th>
		<th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Expired_Date</th>
        <th>Update</th>
	    <th>Delete</th>
				</tr>
				<?php while ($row = $data->fetch_assoc()) { ?>
					<tr>
						<td style="text-align: left;"><?php echo $row['Name'] ?></td>
						<td><?php echo $row['Description'] ?></td>
						<td><?php echo $row['Quantity'] ?></td>
						<td><?php echo $row['Price'] ?></td>
						<td><?php echo $row['Expired_date'] ?></td>
						<td><a href="update.php?id=<?php echo $row['id']; ?>">edit</a></td>
						<td><a href="delete.php?id=<?php echo $row['id']; ?>">&#10060;</a></td>
					</tr>
				
				<?php } ?>
			</table>
	<?php
		}
	?>
	<button><a href="insert.php" style="color: white;">ADD</a></button>
</body>
</html>
