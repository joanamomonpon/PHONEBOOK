


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
        <a class="nav-link fa fa-plus" href="Add.php">Add List <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-eye" href="View.php">View  <span class="sr-only">(current)</span></a>
      </li> 
    </ul>
	<form class="form-inline">
		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
  </div>
</nav>

<br><br>
	<section class="jumbotron">
    <div class="container">
 <center>
      <div class="col-6">
	<form class="needs-validation" novalidate action="adddata.php" method="post">
	 <label for="validationCustom01">First Name:</label>
	 <input type="text" class="form-control" id="firstname" required name="firstname">
		<div class="invalid-feedback">
          Please input name.
        </div> 
	 <label for="validationCustom02">Last Name:</label>
	 <input type="text" class="form-control" id="lastname" required name="lastname">
		<div class="invalid-feedback">
          Please input last name.
        </div>
	<label for="validationCustom03"> Phone Number:</label>
	 <input type="text" class="form-control" id="pnumber" required name="pnumber">
	 <div class="invalid-feedback">
          Please input number only.
        </div>
	 
	 
	<br>
	<br>
<button type="submit" class="btn btn-primary">Save</button>
  &nbsp;&nbsp;
	<button type="submit" class="btn btn-primary">Cancel</button>
	 
  
  
  <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  
  
</form>


</center>
      
      
     
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