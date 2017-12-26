<?php
	$con = mysqli_connect('localhost', 'root', '', 'project');
	$category = $_GET['ccategory'];
	$brand = $_GET['cbrand'];
	$price = $_GET['cprice'];
	$year = $_GET['year'];

	$sql = "SELECT * FROM `object` WHERE `category`='".$category."'AND `brand` ='".$brand."'AND price<'".$price."'AND year ='".$year."'";
		
 ?>