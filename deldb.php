<?php
	$con = mysqli_connect("localhost","root","","joan");
	
	if (mysqli_connect_errno()) {
		echo "Failedto connect to MySQL: " . mysqli_connect_error();
	}
?>