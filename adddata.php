<?php
	session_start();
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$pnumber = $_POST['pnumber'];
	if(!empty($firstname) && !empty($lastname) && !empty($pnumber)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "joan";
		
		// create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT pnumber From addata Where pnumber = ? Limit 1";
			$INSERT = "INSERT Into addata (firstname, lastname, pnumber) values(?, ?, ?)";
			
			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $pnumber);
			$stmt->execute();
			$stmt->bind_result($pnumber);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum==0) {
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sss", $firstname, $lastname, $pnumber);
				$stmt->execute();
				$_SESSION['message'] = "You are now logged in";
				$_SESSION['firstname'] = $firstname;
				header("location: index.php");
			}else {
				echo "<script>alert('Someone already have this number.') </script>";
				
			}
			$stmt->close();
			$conn->close();
		}
	}else {
		echo "All field are required";
		die();
	}

?>