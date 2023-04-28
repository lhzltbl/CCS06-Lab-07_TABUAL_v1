<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// _____________________________________________________________________

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Registration Form</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Complete Name:<br />
		<input type="text" name="fullname" required/> <br />
        <br />
        
        Email Address: <br/>
        <input type="email" name="email" required> <br />
		<br />
        
        Birthdate: <br />
        <input type="date" name="birthdate" required/>
        <br />
        <br />
		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE 
<pre>
<?php
var_dump($_SESSION);
?>
</pre>
-->