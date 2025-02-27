<?php
include 'main.php';
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['myname'], $_POST['myselectbox'], $_POST['email'], $_POST['mynumber'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['myname']) || empty($_POST['myselectbox']) || empty($_POST['email']) || empty($_POST['mynumber'])  ) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
$stmt = $con->prepare('INSERT INTO callback (myname, myselectbox, email, mynumber	 ) VALUES (?, ?,?,?)');
$stmt->bind_param('ssss', $_POST['myname'], $_POST['myselectbox'], $_POST['email'], $_POST['mynumber'],);
$stmt->execute();
$stmt->close();
header("refresh:5;url=index.php");
echo 'You have submitted form';
exit;
