<?php
	include('session.php');
	
	if(!isset($_SESSION['login_user'])) {
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHONEBOOK</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <link rel ="stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  
  
  
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
  <img style="width: 9%;height: 80px;"  src="images/img1.jpg" />
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link fa fa-home" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-plus" href="add.php">Add List <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-eye" href="view.php">View  <span class="sr-only">(current)</span></a>
      </li> 
    </ul>
	
	<form class="form-inline">
		
		&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="desc"><b id="logout"><a href="log_out.php">Log Out</a></b></div>
	</form>
  </div>
</nav>

<br><br>

  <section class="jumbotron">
    <div class="container">
      <h3 class="display-4" ><b>PHONEBOOK</b></h3>
      
     
    </div>  
  </div>
</section>
 
  <footer >
	<div class="row">
       <h4 class="col-sm-4"> &copy2018; Amomonpon Joan S.</h4>
    <ul class="col-sm-8">
      <ul class="col-sm-8">
		  <li class="col-sm-2"><img src="Images/img6.png"></li>
		 <li class="col-sm-2"><img src="Images/img9.png"></li>
 		<li class="col-sm-2"> <img src="Images/img2.jpg"></li>
 		<li class="col-sm-2"> <img src="Images/img5.jpg"></li>
		</ul>
    
    </ul>
  </div>
</footer>


</body>
</html>

