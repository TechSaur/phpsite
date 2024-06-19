<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$city = $_POST['city'];

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'myform';

	// Create Connection

	$conn = mysqli_connect($host,$user,$password,$dbname);

	// Check connection

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully. Data Send to the database.";


	// Sending data to database using INSERT query

	$sql = "INSERT INTO student(name,email,number,city) values('$name','$email','$number','$city')";

	mysqli_query($conn,$sql);
}
?>

<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> -->