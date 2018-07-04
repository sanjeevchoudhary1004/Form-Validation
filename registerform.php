<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
<link href="formvalid.css" rel="stylesheet">
<script src="registervalid.js"></script>
</head>
<body>
<div id="form">
<p id="head"></p>
<!-- This segment displays the validation rule -->
<h2>Registration User Form</h2>
<!-- Form starts from here -->
<form onsubmit='return formValidation()' method="POST" action="register.php" enctype="multipart/form-data">
<label>Employee Name:</label>
<input id='firstname' type='text' name="name" >
<p id="p1"></p>
<!-- This segment displays the validation rule for user name -->
<label>Email:</label>
<input id='email' type='text' name="email">
<p id="p3"></p>
<!-- This segment displays the validation rule for Email-->
<label>Password(6-8 characters):</label>
<input id='username' type='password' name="password">
<p id="p2"></p>
<!-- This segment displays the validation rule for Password -->
<label>Mobile:</label>
<input type="number"  id='state' name="mobile">
<p id="p4"></p>
<!-- This segment displays the validation rule for Mobile No -->
<label>Upload:</label>
<input type="file" name="image"  ><br><br>
<input id="submit" type='submit' value='Submit' name="register">
</form>
</div>
</body>
</html>