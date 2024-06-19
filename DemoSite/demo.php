<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="home.css">
	<title> Home Page </title>
</head>
<body>
	<?php
	include 'demo2.php';
	?>
	<h1>This is home page</h1> <br> <br>
	<form action="#" method="post">
		Name : <input type="text" name="name" placeholder="Your Name"> <br> <br>
		Email : <input type="emial" name="email" placeholder="Email">	<br> <br>
		Number : <input type="number" name="number" placeholder="Mobile Number"> <br> <br>
		City : <input type="text" name="city" placeholder="Your City">	<br> <br>
		<input type="submit" name="submit" value="Send Data">
	</form>
</body>
</html>