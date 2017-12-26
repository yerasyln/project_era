<?php
	$con = mysqli_connect('localhost', 'root', '', 'project');
	if($con->connect_error){
		die("connection failed ".$con->connect_error);
	}
	$category = $_GET['category'];
	$brand = $_GET['brand'];
	$price = $_GET['price'];
	$year = $_GET['year'];
	$photo = "C:/xampp/htdocs/project_era/src/".$_GET['f'];
	$query = "INSERT INTO object (category, brand, price, year,photo)
	VALUES('$category','$brand','$price','$year','$photo')";	
	if($con->query($query)==TRUE){
		header('Location: http://localhost/project_era/main.php#');
		$con->close();
		exit;
	}
	else{
		echo "ERROR";
	}	
?>