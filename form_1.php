<?php
	$firstName = $_GET['firstName'];
	$age = $_GET['age'];
	$email = $_GET['email']
	echo "<h2>Response Demo Form</h2><h3> ";
	echo "You submitted the following information<br><ul>";
	echo "<li>Name: <strong> $firstName</strong></li>";
	echo "<li>Age: <strong> $age</strong></li>";
	echo "<li>Email: <strong> $email</strong></li>";
	echo "</li></ul></h3>";
?>