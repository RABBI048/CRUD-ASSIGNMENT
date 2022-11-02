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