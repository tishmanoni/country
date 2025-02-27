<?php
include 'main.php';
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Failed to connect to MySQL:.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div> ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['cpassword'], $_POST['email'], $_POST['firstname'], $_POST['lastname'])) {
	// Could not get the data that should have been sent.
	exit('<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Please complete the registration form!.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div>');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['firstname']) || empty($_POST['lastname'])) {
	// One or more values are empty.
	exit('<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Please complete the registration form.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div>');
}
// Check to see if the email is valid.
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Email is not valid!.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div>');
}
// Username must contain only characters and numbers.
if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
    exit('<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																						<div class="alert-icon">
																								<span class="icon-checkmark-circle"></span>
																						</div>
																						<strong>Warning!</strong>Username is not valid!.
																						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																				</div>');
}
// Password must be between 5 and 20 characters long.
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Password must be between 5 and 20 characters long!.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div>');
}
// Check if both the password and confirm password fields match
if ($_POST['cpassword'] != $_POST['password']) {
	exit('<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Passwords do not match!.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div>');
}
// We need to check if the account with that username exists.
$stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ? OR email = ?');
// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
$stmt->bind_param('ss', $_POST['username'], $_POST['email']);
$stmt->execute();
$stmt->store_result();
// Store the result so we can check if the account exists in the database.
if ($stmt->num_rows > 0) {
	// Username already exists
	echo '<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
																					<div class="alert-icon">
																							<span class="icon-checkmark-circle"></span>
																					</div>
																					<strong>Warning!</strong>Username and/or email exists!.
																					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
																			</div>';
} else {
	$stmt->close();
	// Username doesnt exists, insert new account
	$stmt = $con->prepare('INSERT INTO accounts (firstname, lastname, username, password, email, activation_code,	registered_date, customer_id	 ) VALUES (?, ?, ?, ?, ?, ?,?,?)');
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$uniqid = account_activation ? uniqid() : '';
	$stmt->bind_param('ssssssss', $_POST['firstname'], $_POST['lastname'],  $_POST['username'], $password, $_POST['email'], $uniqid, $_POST['registered_date'], $_POST['customer_id']);
	$stmt->execute();
	$stmt->close();
	
	
	if (account_activation) {
		// Account activation required, send the user the activation email with the "send_activation_email" function from the "main.php" file
		send_activation_email($_POST['email'], $uniqid);
		echo '<div class="alert alert-warning alert-icon-block alert-dismissible" role="alert">
		                                        <div class="alert-icon">
		                                            <span class="icon-checkmark-circle"></span>
		                                        </div>
		                                        <strong>Warning!</strong>Please check your email to activate your account!.
		                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
		                                    </div>';
	} else {
		echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
		                                        <div class="alert-icon">
		                                            <span class="icon-checkmark-circle"></span>
		                                        </div>
		                                        <strong>Success!</strong>You have successfully registered, you can now login!.
																						You will be redirected in a moment to Login....
		                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
		                                    </div>';
	}
}
?>
