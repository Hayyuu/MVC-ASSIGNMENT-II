<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="register.css" target="text/css" >
	<title></title>
</head>
<body>
<div class="container">
<h2>Registration Form</h2><br>
<form name="Formx" action="home.php" method="POST">
  <p>First Name</p>
  	<input type="text" placeholder="Enter first name" class="inp" name="firstname" required>
  	<br> 
  <p>Last Name</p>
  	<input type="text" class="inp" placeholder="Enter last name" name="lastname" required>
  	<br><br>
 <input type="submit" id="button" name="op" value="Login" onclick="return validateEmail()"><br><br><br></form></div>
</body>
</html>