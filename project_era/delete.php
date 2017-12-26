<?php
	$con = mysqli_connect('localhost', 'root', '', 'project');
	if($con->connect_error){
		die("connection failed ".$con->connect_error);
	}
	$id = $_GET['id_del'];
	$brand = $_GET['brand_d'];
	$price = $_GET['price_d'];
	$query = "DELETE FROM object WHERE `object`.`id`='".$id."'OR `object`.`brand`='".$brand."'OR `object`.`price='".$price."'";
	if($con->query($query)==TRUE){
		header('Location: http://localhost/project_era/main.php#');
		$con->close();
		exit;
	}
	else{
		echo "ERROR";
	}	
?>
DELETE FROM `object` WHERE `object`.`id` = 6